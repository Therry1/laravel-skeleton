<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormationRound extends Model
{
    protected $table = 'formation_rounds';
    protected $guarded = [''];

    public function formationYear (){
        return $this->belongsTo(FormationYear::class,'year_id');
    }

    public function formationMonth (){
        return $this->belongsTo(FormationMonth::class,'month_id');
    }

    public function studentPayment (){
        return $this->hasMany(StudentPayment::class,'round_id');
    }
}
