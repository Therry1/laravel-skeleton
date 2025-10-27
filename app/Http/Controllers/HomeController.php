<?php

namespace App\Http\Controllers;

use App\Models\FormationLevel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formation_levels = FormationLevel::all();
        return view('services/home', compact('formation_levels'));
    }

    public function returnContactPage(){

        return view ('services.contact');

    }



}
