<?php

namespace App\Http\Controllers;

use App\ClassHelpers\StudentHelpers;
use App\Models\Student;
use App\Models\StudentPayment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function read_student_inscripted(){
        /**
            fonction permettant de retourner l'ensemble des etudiant inscrits
         */
        $propertiesHelpers = new StudentHelpers();
        $list_students = Student::with(['studentPayment'])->get();
        return view('services/students_list', compact('propertiesHelpers','list_students'));
    }

    public function create_student()
    {
        /**
            fonction affichant l interface permettant de créé un etudiant
         */
        $propertiesHelpers = new StudentHelpers();

        return view('services/create_student', compact('propertiesHelpers'));
    }

    public function detail_student($studentId)
    {
        /**
            fonction pour gerer afficher les informations relatives à un etudiant
         */

        $student = Student::with(['studentPayment'])->where(['id'=>$studentId])->first();
        $current_month_payment = StudentPayment::where(['student_id'=>$studentId])
            ->whereYear('created_at','=',Carbon::now()->year)
            ->whereMonth('created_at','=',Carbon::now()->month)
            ->first();

        $month_is_paid = false;
        if (!empty($current_month_payment))
            $month_is_paid = true;

        //dd($month_is_paid,$current_month_payment);
        return view('services/detail_student', compact('student','month_is_paid'));
    }
    public function edit_student($studentId)
    {
        /**
            fonction affichant l interface permettant de modifier un etudiant
         */
        $propertiesHelpers = new StudentHelpers();
        $student = Student::find($studentId);

        return view('services/edit_student', compact('propertiesHelpers','student'));
    }

    public function store_student(Request $request)
    {
        /**
            fonction permettant d enregistrer un etudiant dans le système. declaration de la variable qui permettra de verifier
         * si le montant envoyé est total afin de pouvoir declarer l etudiant inscrit
         */
        $is_register = true;

        if ($request->student_amount_pay != 2000){
            $is_register = false;
        }

        try {
            DB::Transaction(function () use ($request, $is_register){

                $student = Student::create([
                    'name'                          => $request->student_name ?? null,
                    'program'                       => $request->student_program ?? null,
                    'phone_number'                  => $request->phone_number ?? null,
                    'school_name'                   => $request->student_faculty ?? null,
                    'school_level'                  => $request->student_level ?? null,
                    'choice_option'                 => $request->choice_option ?? null,
                    'level_formation'               => $request->formation_level ?? null,
                    'is_inscript'                   => $is_register,
                    'amount_paid_for_inscription'   => $request->student_amount_pay ?? null,
                    'stay_to_paid_for_inscription'  => 2000 - $request->student_amount_pay ?? null,
                    'has_paid_formation'            => false,
                ]);
            });
        }catch (\Exception $exception){
            DB::rollBack();
            return response()->json(['status_code'=>500 , 'message'=> 'Etudiant non enregisté' ,'error'=>$exception->getMessage()]);
        }
        return response()->json(['status_code'=>200 , 'message'=>'Etudiant enregistré avec success']);
    }

    public function update_student(Request $request, $studentId)
    {
        /**
            fonction permettant d'enregistrer les modification d un etudiant dans le système.
         */

        try {
            DB::Transaction(function () use ($request, $studentId){

                $student = Student::find($studentId);
                if (empty($student))
                    return response()->json(['status_code'=>404 , 'message'=> 'Etudiant non trouvé']);

                $student->update([
                    'name'                          => $request->student_name ?? $student->name,
                    'program'                       => $request->student_program ?? $student->program,
                    'phone_number'                  => $request->phone_number ?? $student->phone_number,
                    'school_name'                   => $request->student_faculty ?? $student->school_name,
                    'school_level'                  => $request->student_level ?? $student->school_level,
                    'choice_option'                 => $request->choice_option ?? $student->choice_option,
                    'level_formation'               => $request->formation_level ?? $student->level_formation,
                    'is_inscript'                   => $student->is_inscript,
                ]);
            });
        }catch (\Exception $exception){
            DB::rollBack();
            return response()->json(['status_code'=>500 , 'message'=> 'Etudiant non Modifié' ,'error'=>$exception->getMessage()]);
        }
        return response()->json(['status_code'=>200 , 'message'=>'Etudiant Modifié avec success']);
    }

    public function amount_inscription ($studentId)
    {
        /**
            fonction permettant de lire la somme q un etudiant a versé pour son inscription
         */
        $student = Student::find($studentId);
        if (empty($student))
            return response()->json(['status_code'=>404 , 'message'=> 'Etudiant non trouvé']);

        return response()->json(['status_code'=>200 , 'message'=>'requete réussi', 'current_amount_inscription'=>$student->amount_paid_for_inscription]);

    }

    public function amount_formation ($studentId)
    {
        /**
            fonction permettant de lire la somme q un etudiant a versé pour un mois en particulier
         */

        /**
            verification de l existance de l'etudiant dans la bd
         */
        $student = Student::find($studentId);
        if (empty($student))
            return response()->json(['status_code'=>404 , 'message'=> 'Etudiant non trouvé']);
         /**
            lecture de son paiement du mois courrent
          */
        $student_payment = StudentPayment::where(['id'=>$studentId])
            ->whereYear('created_at', '=' ,Carbon::now()->year)
            ->whereMonth('created_at', '=' ,Carbon::now()->month)
            ->first();

        if (empty($student_payment))
            return response()->json(['status_code'=>500 , 'message'=> 'aucun paiement de cet etudiant pour le mois courent', 'current_amount_inscription'=>null]);

        return response()->json(['status_code'=>200 , 'message'=>'requete réussi', 'current_amount_inscription'=>$student_payment->amount_paid]);
    }

    public function update_amount_inscription (Request $request, $studentId)
    {
        /**
            fonction permettant de modifier la somme q un etudiant a deja versé pour son inscription
         */

        $student = Student::find($studentId);
        if (empty($student))
            return response()->json(['status_code'=>404 , 'message'=> 'Etudiant non trouvé']);

        $student->update([
            'amount_paid_for_inscription'=>$student->amount_paid_for_inscription += $request->amount,
            'stay_to_paid_for_inscription' => 2000 - $student->amount_paid_for_inscription
        ]);

        return response()->json(['status_code'=>200 , 'message'=>'Opération réussi']);

    }

    public function update_amount_formation (Request $request , $paymentId)
    {
        /**
        fonction permettant de lire la somme q un etudiant a versé pour un mois en particulier
         */

        /**
        verification de l existance de l'etudiant dans la bd
         */

        $student_payment = StudentPayment::where(['id'=>$paymentId])
            ->whereYear('created_at', '=' ,Carbon::now()->year)
            ->whereMonth('created_at', '=' ,Carbon::now()->month)
            ->first();

        if (empty($student_payment))
            return response()->json(['status_code'=>500 , 'message'=> 'aucun paiement de cet etudiant pour le mois courent', 'current_amount_inscription'=>null]);

        $student_payment->update([
            'tranche2'      => true,
            'amount_paid'   => $student_payment->amount_paid += $request->new_amount,
            'stay_to_paid'  => 0,
        ]);
        return response()->json(['status_code'=>200 , 'message'=>'requete réussi']);
    }

    public function  store_student_payment (Request $request , $studentId){
        /**
            fonction permettant d'enregistrer le paiement d'un etudiant
         */
        $student = Student::find($studentId);
        if (empty($student))
            return response()->json(['status_code'=>404 , 'message'=> 'Etudiant non trouvé']);

        $propertiesHelpers = new StudentHelpers();

        $data_payment = [
            'current_month'     => Carbon::now()->locale('fr')->format('M'),
            'tranche1'          => true,
            'tranche2'          => $request->tranche_to_paid == 2,
            'level_formation'   => $request->current_level_formation,
            'amount_paid'       => $request->amount_paid,
            'stay_to_paid'      => $propertiesHelpers->formationPrices["$request->current_level_formation"] - $request->amount_paid,
            'student_id'        => $request->student_id,
            'state'             => 1,
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ];

        StudentPayment::insert($data_payment);

        return response()->json(['status_code'=>200, 'message'=>'Paiement enregistré avec success']);
    }

    public function statistic_of_system(){

        return view('services/statistic_system');
    }

}
