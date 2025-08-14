<?php

namespace App\Http\Controllers;

use App\ClassHelpers\StudentHelpers;
use App\Http\Requests\FormationRegistrationRequest;
use App\Http\Requests\InscriptionRequest;
use App\Http\Requests\PreinscriptionRequest;
use App\Models\City;
use App\Models\FormationCity;
use App\Models\FormationLevel;
use App\Models\FormationMode;
use App\Models\FormationOption;
use App\Models\FormationParticipation;
use App\Models\FormationRound;
use App\Models\PaymentMode;
use App\Models\SchoolFaculty;
use App\Models\SchoolLevel;
use App\Models\Student;
use App\Models\StudentPayment;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Monolog\Formatter\FormatterInterface;

class StudentController extends Controller
{
    public function preinscriptionView (){

        $cities = City::all();
        $formation_cities = FormationCity::all();
        $school_faculties = SchoolFaculty::orderby('faculty_name','asc')->get();
        $school_levels = SchoolLevel::all();
        $formation_options = FormationOption::all();
        $formation_levels = FormationLevel::all();
        $payment_modes = PaymentMode::all();

        return view('student.inscription', compact('cities','formation_cities','school_faculties','school_levels','formation_options','formation_levels','payment_modes'));
    }

    public function preinscriptionStore (PreinscriptionRequest $request){

        //creation of student identifier

        $letters_tab = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        $nb_students = Student::count();
        $nb_students = str_pad($nb_students + 1 , '3','0',STR_PAD_LEFT);

        $identifier = 'MAT'.Carbon::now()->format('y').$letters_tab[rand(0,25)].$nb_students.'I-TECH';

        try {
            DB::transaction(function () use ($identifier, $request){
                $student = Student::create([
                    "matricule"             => $identifier,
                    "name"                  => $request->input('name'),
                    "email"                 => $request->input('email'),
                    "password"              => $request->input('password'),
                    "whatsapp_phone_number" => $request->input('whatsapp_number'),
                    "call_phone_number"     => $request->input('phone_number'),
                    "relative_phone_number" => $request->input('relative_number'),
                    "is_registered"         =>  $request->input('amount_paid')  == config('constants.amount.pre-inscription'),
                    "amount_paid"           => $request->input('amount_paid'),
                    "remaining_amount"      => config('constants.amount.pre-inscription') - $request->input('amount_paid') ,
                    "school_sector"         => $request->input('school_sector'),
                    "financial_reference"   => null,
                    "confirm_payment"       => false,
                    "residence_city_id"     => $request->input('city_residence'),
                    "faculty_id"            => $request->input('school_faculty'),
                    "school_level_id"       => $request->input('school_level'),
                    "payment_mode_id"       => $request->input('payment_mode'),
                    "state"                 => 1,
                ]);

            });
        }catch (\Exception $exception){
            DB::rollBack();
            return redirect()->back()->with(['error'=>'le service est indisponible veuiller reessayer plus tard '.$exception->getMessage()]);
        }

        $student = Student::where(['matricule' => $identifier])->first();
        $pdf = PDF::loadView('pdfs.information_file',[
            'student' => $student,
            'password' => $request->input('password'),
        ]);

        return $pdf->stream($student->name.'.pdf');
    }

    public function checkRound ($level_id){

        $round = FormationRound::where(['round_level'=>$level_id, 'state' => 1])->first();
        if (!$round)
            return response()->json(['status_code'=>500,'message'=> 'Aucune vague de formation disponible pour ce niveau']);

        return response()->json(['status_code'=>200, 'data'=>$round]);
    }

    public function checkStudentForInscription (Request $request){

        $validator = Validator::make($request->all(),[
            'identifier' => 'required',
            'password' => 'required',
            'email'  => 'required|email'
        ],[
            'identifier.required' => 'le matricule est requis',
            'identifier.digits' => 'le matricule est invalide',
            'password.required' => 'le mot de passe est requis',
            'email.required' => 'l\'email est requis',
            'email.email' => 'l\'email n\'est pas conforme',
        ]);

        if ($validator->fails()){
            return response()->json([
                'status_code' => 422,
                'message' => 'erreur de validation',
                'errors' => $validator->errors()
            ],422);
        }

        $student_exist = Student::where([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'matricule'=>$request->input('identifier'),
        ])->exists();

        if(!$student_exist)
            return response()->json([
                'status_code'   => 400,
                'message'       => 'etudiant non existant. Veillez vous pré-inscrire ou contacter le service client',
            ],400);

        $formation_cities = FormationCity::all();
        $formation_options = FormationOption::all();
        $formation_levels = FormationLevel::all();
        $payment_modes = PaymentMode::all();
        $formation_modes = FormationMode::all();


        return response()->json([
            'status_code'           => 200,
            'message'               => 'success',

            'payment_modes'         =>$payment_modes,
            'formation_cities'      =>$formation_cities,
            'formation_options'     =>$formation_options,
            'formation_levels'      =>$formation_levels,
            'formation_modes'       =>$formation_modes,
        ],200);

    }

    public function formationStudentRegistration (FormationRegistrationRequest $request){

        if ($request->input('amount_paid') != config('constants.amount.inscription_level-'.$request->input('formation_level'))){
            return response()->json(['status_code' => 400,'message' => 'le montant à payer doit etre de'.config('constants.amount.inscription_level-'.$request->input('formation_level'))]);
        }

        $student = Student::where([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'matricule'=>$request->input('identifier'),
        ])->first();

        if(!$student)
            return response()->json([
                'status_code'   => 400,
                'message'       => 'etudiant non existant. Veillez vous pré-inscrire ou contacter le service client',
            ],400);

        $round = FormationRound::where([
            'round_code'=>$request->input('round_input'),
            'state' => 1
        ])->first();

        if(!$round)
            return response()->json([
                'status_code'   => 400,
                'message'       => 'cette vague de formation est indisponible',
            ],400);

        try {
            $financial_reference = '';
            DB::beginTransaction();
                $formation_participation = FormationParticipation::create([
                    'amount_paid'               => $request->input('amount_paid'),
                    'remaining_amount'          => config('constants.amount.inscription_level-'.$request->input('formation_level')) - $request->input('amount_paid'),
                    'financial_reference'       => $financial_reference,
                    'student_id'                => $student->id,
                    'round_id'                  => $round->id,
                    'payment_mode_id'           => $request->input('payment_mode'),
                    'formation_mode_id'         => $request->input('formation_mode'),
                    'formation_option_id'       => $request->input('formation_option'),
                    'formation_level_id'        => $request->input('formation_level'),
                    'state'                     => 1,
                ]);
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            return response()->json(['status_code' => 500 , 'message' => 'le service est indisponible', 'error' => $exception->getMessage()]);
        }

        return response()->json(['status_code' => 200 , 'message' => 'l\'étudiant a été enregistré à la vague de formation', 'data' => [
            'student' => $student,
            'round'   => $round,
            'participation' => $formation_participation
        ]]);

    }

    public function setBadge ($student_id , $round_id , $participation_id){

        $formation_participation = FormationParticipation::with(['student','formationRound','formationLevel','formationOption'])->where([
            'id'            =>$participation_id,
            'round_id'      =>$round_id,
            'student_id'    =>$student_id,
        ])->first();

        if(!$formation_participation)
            return response()->json([
                'status_code'   => 400,
                'message'       => 'etudiant non existant. Veillez vous pré-inscrire ou contacter le service client',
            ],400);



        $pdf = PDF::loadView('pdfs.formation_participation_badge',[
            'formation_participation' => $formation_participation,
        ])->setPaper('A5', 'landscape');

        return $pdf->stream($formation_participation->student->name.'.pdf');
        //return view('pdfs.formation_participation_badge');
    }
}
