<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormationParticipation;
use App\Models\FormationRound;
use App\Models\PaymentMode;
use App\Models\Student;
use App\Models\StudentPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MoneyController extends Controller
{
    public function studentRegistration (Request $request){
        return true;
    }

    public function checkStudentForPayment (Request $request){

        $validator = Validator::make($request->all(),[
            'identifier'        => 'required',
            'password'          => 'required',
            'email'             => 'required|email',
            'formation_level'   => 'required|int',

        ],[
            'identifier.required'   => 'le matricule est requis',
            'identifier.digits'     => 'le matricule est invalide',
            'password.required'     => 'le mot de passe est requis',
            'email.required'        => 'l\'email est requis',
            'email.email'           => 'l\'email n\'est pas conforme',
            'formation_level.required'  => 'le niveau de formation est requis',
            'formation_level.int'       => 'le niveau envoyé n\'existe pas',
        ]);

        if ($validator->fails()){
            return response()->json([
                'status_code' => 422,
                'message' => 'erreur de validation',
                'errors' => $validator->errors()
            ],422);
        }

        $student = Student::where([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'matricule'=>$request->input('identifier'),
        ])->first();

        if(!$student)
            return response()->json([
                'status_code'   => 500,
                'message'       => 'etudiant non existant. Veillez vous pré-inscrire ou contacter le service client',
            ],500);

        $student_formation_participation = FormationParticipation::where(['student_id'=> $student->id,'state' => 1])
            ->whereHas('formationRound', function ($q) use ($request) {
                $q->where('round_level', $request->input('formation_level'))
                    ->where('state', 1);
            })
            ->with([
                'formationRound' => function ($q) use ($request){
                    $q->where('round_level', $request->input('formation_level'))
                        ->where('state', 1);
                }
            ])
            ->first();

        if(!$student_formation_participation)
            return response()->json([
                'status_code'   => 400,
                'message'       => 'Vous n etes pas inscrit dans le round de formation actuellement disponible pour ce niveau',
            ],400);


        $payment_of_student = Student::whereHas(
            'studentPayment', function ($q) use ($student_formation_participation) {
            $q->where(['formation_participation_id' => $student_formation_participation->id])
                ->with(['billPayments']);
        }
        )->with([
            'studentPayment' => function ($q) use ($student_formation_participation) {
                $q->where(['formation_participation_id' => $student_formation_participation->id])
                    ->with(['billPayments']);
            }
        ])->where(['id' => $student->id])->first();

        $payment_modes = PaymentMode::all();

        return response()->json([
            'status_code'           => 200,
            'message'               => 'success',
            'payment_mode'          => $payment_modes,
            'student'               => $payment_of_student,
            'formation_participation'=>$student_formation_participation
        ],200);

    }
}
