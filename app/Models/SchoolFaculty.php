<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolFaculty extends Model
{
    protected $table = 'school_faculties';
    protected $guarded = [''];

    public function student (){
        return $this->hasMany(Student::class,'faculty_id');
    }
}
