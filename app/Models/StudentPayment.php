<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentPayment extends Model
{
    protected $table = 'student_payments';
    protected $guarded = [''];

    public function student (){
        return $this->belongsTo(Student::class,'student_id');
    }

    public function formationRound (){
        return $this->belongsTo(FormationRound::class,'round_id');
    }

    public function formationMonth (){
        return $this->belongsTo(FormationMonth::class,'month_id');
    }
}
