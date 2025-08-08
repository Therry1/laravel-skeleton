<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormationLevel extends Model
{
    protected $table = 'formation_levels';
    protected $guarded = [''];

    public function student (){
        return $this->hasMany(Student::class,'formation_level_id');
    }
}
