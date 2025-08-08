<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormationMonth extends Model
{
    protected $table = 'formation_months';
    protected $guarded = [''];

    public function formationRound (){
        $this->hasMany(FormationRound::class,'month_id');
    }

    public function studentPayment (){
        return $this->hasMany(StudentPayment::class,'month_id');
    }
}
