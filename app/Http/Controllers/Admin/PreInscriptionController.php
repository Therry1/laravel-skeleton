<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\FormationCity;
use App\Models\SchoolFaculty;
use App\Models\SchoolLevel;
use App\Models\FormationOption;
use App\Models\FormationLevel;
use App\Models\PaymentMode;

use Illuminate\Http\Request;

class PreInscriptionController extends Controller
{
    public function viewPreInscription (){
        $cities = City::all();
        $formation_cities = FormationCity::all();
        $school_faculties = SchoolFaculty::orderby('faculty_name','asc')->get();
        $school_levels = SchoolLevel::all();
        $formation_options = FormationOption::all();
        $formation_levels = FormationLevel::all();
        $payment_modes = PaymentMode::all();

        return view('administration.preinscription', compact(
            'cities',
                'formation_cities',
                'school_faculties',
                'school_levels','formation_options',
                'formation_levels',
                'payment_modes'
            )
        );
    }

    public function viewFormationParticipation(){
        $cities = City::all();
        $formation_cities = FormationCity::all();
        $school_faculties = SchoolFaculty::orderby('faculty_name','asc')->get();
        $school_levels = SchoolLevel::all();
        $formation_options = FormationOption::all();
        $formation_levels = FormationLevel::all();
        $payment_modes = PaymentMode::all();

        return view ('administration.formation_participation', compact(
                'cities',
                'formation_cities',
                'school_faculties',
                'school_levels',
                'formation_options',
                'formation_levels',
                'payment_modes'
            )
        );
    }
}
