<?php


use App\Models\Student;

if (function_exists('checkExistingStudent')){

    function checkExistingStudent ($request , $student_id = null){

        if ($student_id){
            $student_exist = Student::where(['id' => $student_id])->exists();

        }else {
            $student_exist = Student::where([
                'email'=>$request->input('email'),
                'password'=>$request->input('password'),
                'matricule'=>$request->input('identifier'),
            ])->exists();
        }

        if(!$student_exist)
            return false;

        return true;

    }
}
