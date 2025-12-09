<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormationParticipation;
use App\Models\FormationRound;
use App\Models\PaymentMode;
use App\Models\Student;
use App\Models\StudentPayment;
use App\Models\StudentBillPayment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MoneyController extends Controller
{
    public function studentRegistration (Request $request){
        return true;
    }

    // verifier si l'etudiant est préinscrit a fin de l iscrire à une formation
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

    // verifier l'appartenance de l'etudiant à la formation et au round qu'il souhaite payer (lors du paiement d'un mois de formation)
    public function adminCheckStudentForPayment(Request $request){

        $validator = Validator::make($request->all(),[
            'identifier'        => 'required',
            'password'          => 'required',
            'email'             => 'required|email',
            'formation_level'   => 'required|int',
            'round_id'          => 'required|int'
        ],[
            'identifier.required'   => 'le matricule est requis',
            'identifier.digits'     => 'le matricule est invalide',
            'password.required'     => 'le mot de passe est requis',
            'email.required'        => 'l\'email est requis',
            'email.email'           => 'l\'email n\'est pas conforme',
            'formation_level.required'  => 'le niveau de formation est requis',
            'formation_level.int'       => 'le niveau envoyé n\'existe pas',
            'round_id.required'  => 'le tour de fomation est requi',
            'round_id.int'       => 'le roun renseigné n eiste pas',
        ]);

        // recherche de l'étudiant dans a table student
        $student = Student::where([
            'matricule' => $request->input('identifier'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
        ])->first();

        // verifier si l'utilisateur qui souhaite faire un paiement existe
        if (!$student){
            return response()->json([
                'status_code' => 404,
                'message' => 'L\'étudiant recherché est abscent dans notre système'
            ]);
        }
        // recherche de l'étudiant dans la table formation participation
    }

    public function paid_month(Request $request){
        // récupération des données envoyé par le formulaire pour effectuer unn paiement
        $form_data = (object)$request->all();

        # recherche de l'étudiant qui souhaite payer
        $student = Student::where([
            'id' => $form_data->student_id,
            'matricule' => $form_data->student_identifier
        ])->first();

        if (!$student){
            return response()->json([
                'status_code'=>404, 
                'message'=> 'Apprennant innexistant dans le système' , 
                'data'=> null
            ]);
        }

        # verifier que l'étudiant est bien inscrit dans le round de formation en vigueur
        $formation_particiation = FormationParticipation::where([
            'id' => $form_data->participation_id,
            'round_id'=> $form_data->round_id,
            'student_id'=> $form_data->student_id
        ])->first();
        
        if (!$formation_particiation){
            return response()->json([
                'status_code'=>404, 
                'message'=> 'Apprennant innexistant dans le round de formation spécifié' , 
                'data'=> null
            ]);
        }

        # rechercher les paiements de l'étudiant pour le round de formation courant
        $student__payment = StudentPayment::with([
            'billPayments' => function ($q){
                $q->where('is_paid', false )
                ->orderby('month_number', 'asc');
            }
        ])->where([
            'round_id'=> $form_data->round_id,
            'student_id'=> $form_data->student_id
        ])->first();

        if (!$formation_particiation){
            return response()->json([
                'status_code'=>404, 
                'message'=> 'Aucune configuration de paiement disponible pour cette étudiant' , 
                'data'=> null
            ]);
        }
        # commencer à couvrir les mois non payés
        try{
            DB::beginTransaction();

            $amount_paid = $form_data->amount_paid;
            

            foreach ($student__payment->billPayments as $bill_payment_stmt){
                # verfier s'il ya encore de l'argent pour payer le prohain mois
                if ($amount_paid == 0){
                    break;
                }

                $bill_payment = StudentBillPayment::findOrFail($bill_payment_stmt->id);

                # verifier si la première tranche est du mois courant est payé
                if (!$bill_payment->tranche1){
                    
                    # on verifie que le montant payé peux couvrir un tranche de paiement
                    # car si on verse un multiple de a somme à payer pour le mois, on poura 
                    # soi payer une tranche ou tout le mois et pour savoir si on a versé un multiple de d'un x
                    # on fait 
                    if (
                        $bill_payment->amount_to_paid > $amount_paid and 
                        $bill_payment->amount_to_paid % $amount_paid != 0 
                    ){
                        throw new Exception("Le montant payé ne laissera une tranche non payé : montant: $form_data->amount_paid", 1);
                    }elseif (
                        $bill_payment->amount_to_paid < $amount_paid and 
                        $amount_paid  %  $bill_payment->amount_to_paid != 0 
                    ) {
                        throw new Exception("Le montant payé ne laissera une tranche non payé : montant: $form_data->amount_paid", 1);
                    }

                    $bill_payment->tranche1 = true;
                    $bill_payment->amount_paid += ($bill_payment->amount_to_paid / 2) ;
                    $bill_payment->remaining_amount -= ($bill_payment->amount_to_paid / 2) ;
                    $amount_paid -= ($bill_payment->amount_to_paid / 2);

                    $bill_payment->save();
                }
 
                if (!$bill_payment->tranche2 and $amount_paid != 0){
                    $bill_payment->tranche2 = true;
                    $bill_payment->amount_paid += ($bill_payment->amount_to_paid / 2);
                    $bill_payment->remaining_amount -= ($bill_payment->amount_to_paid / 2);
                    $amount_paid -= ($bill_payment->amount_to_paid / 2);

                    $bill_payment->save();
                }
            }

            return response()->json([
                'status_code'=>200, 
                'message'=> 'Versemnt éffectué avec success' , 
                'data'=> null
            ]);

            DB::commit();
        }catch(Exception $exception){
            DB::rollback();
            return response()->json([
                'status_code'=> 500,
                'message'=> 'error' , 
                'data'=> $exception->getMessage()
            ]);
        }
        

    }
}
