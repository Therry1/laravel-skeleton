<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormationLevel;
use App\Models\FormationParticipation;
use App\Models\FormationRound;
use App\Models\FormationYear;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SystemController extends Controller
{
    public function index (){

        $new_year = Carbon::now()->year.'/'.Carbon::now()->addYear()->year;

        $exist = FormationYear::where('year_number', $new_year)->exists();

        $formation_levels = FormationLevel::all();


        $formation_rounds = FormationRound::all();

        return view('administration.home', compact('exist','formation_levels','formation_rounds'));
    }

    public function addYear (){

        $new_year = Carbon::now()->year.'/'.Carbon::now()->addYear()->year;
        $exist = FormationYear::where('year_number', $new_year)->exists();

        if ($exist) {
            return response()->json(['status'=>'error','status_code'=>400, 'message'=>'l\'année en cours n est pas terminé','data'=>$exist]);
        }

        try {
            FormationYear::create([
                'year_label'=> Carbon::now().'/'.Carbon::now()->addYear(),
                'year_number'=> $new_year
            ]);
        }catch (\Exception $exception){
            return response()->json(['status'=>'error','status_code'=>500, 'message'=>'une erreur s\'est produite dans l système','data'=>$exception->getMessage()]);
        }

        return response()->json(['status'=>'success','status_code'=>200, 'message'=>'année créé']);
    }

    public function addRound (Request $request){

        $validator = Validator::make($request->all(),[
            'round_level'=>'required',
        ],
        [
            'round_level' => 'le niveau de la vague de formation est requis',
        ]);

        if ($validator->fails())
            return response()->json(['status_code'=>400,'message'=> 'Erreur de validation. Veiller remplir correctement le formulaire' , 'data'=>$validator->errors()]);

        $level_id = $request->input('round_level');
        $check_round = FormationRound::where(['round_level' => $level_id, 'state'=>1])->latest()->first();

        if ($check_round)
            return response()->json(['status_code'=>500 , 'message'=> 'Une vague de formation pour ce niveau est encours']);

        $round_number = FormationRound::where(['round_level' => $level_id])->count();

        $round_number = str_pad($round_number+1, '3','0', STR_PAD_LEFT);

        $round_code = 'ROUND'.date('d').date('m').'25'.'L'.$request->input('round_level').$round_number;
        $start_date = Carbon::now();
        $end_date = '';

        if ($level_id == 1){
            $end_date = Carbon::now()->addMonth(3);
        }else{
            $end_date = Carbon::now()->addMonth($request->input('round_runtime') ?? 7);
        }

        try {
            DB::Transaction(function () use ($round_code , $level_id , $start_date , $end_date){
                $formation_round = FormationRound::create([
                    'round_code' => $round_code,
                    'round_label' => 'Tour n°'.FormationRound::count(),
                    'round_level' => $level_id,
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'year_id' => (FormationYear::latest()->first())->id,
                ]);
            });
        }catch (\Exception $exception){
            DB::rollBack();
            return response()->json(['status_code'=>500,'message'=> 'Une erreur s\'est produite dans le système', 'data' => $exception->getMessage()]);
        }

        return response()->json(['status_code'=>200,'message'=> 'Nouvelle formation créé']);
    }

    public function viewRound($round_id){

        $round = FormationRound::findOrFail($round_id);

        $participations = FormationParticipation::with([
            'student',
        ])->where([
            'round_id' => $round_id
        ])->get();

        return view(
            'administration.round_formation_views.round_formation_detail',
            compact('round_id','round','participations')
        );
    }
}
