<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormationOption extends Model
{
    protected $table = 'formation_options';
    protected $guarded = [''];

    public function student (){
        return $this->hasMany(Student::class,'school_level_id');
    }
}
