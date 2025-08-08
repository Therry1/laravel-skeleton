<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormationYear extends Model
{
    protected $table = 'formation_years';
    protected $guarded = [''];

    public function formationRound (){
        $this->hasMany(FormationRound::class,'year_id');
    }
}
