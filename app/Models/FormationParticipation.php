<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormationParticipation extends Model
{
    protected $table = 'formation_participations';
    protected $guarded = [''];

    public function formationRound (){
        return $this->belongsTo(FormationRound::class, 'round_id');
    }

    public function student (){
        return $this->belongsTo(Student::class, 'student_id');
    }
    public function formationOption (){

        return $this->belongsTo(FormationOption::class, 'formation_option_id');
    }

    public function formationLevel (){

        return $this->belongsTo(FormationLevel::class, 'formation_level_id');
    }

}
