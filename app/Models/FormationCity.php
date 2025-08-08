<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormationCity extends Model
{
    protected $table = 'formation_cities';
    protected $guarded = [''];

    public function student (){
        return $this->hasMany(Student::class,'formation_city_id');
    }
}
