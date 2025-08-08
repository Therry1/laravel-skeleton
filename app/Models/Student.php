<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $guarded = [''];


    public function residenceCity (){
        $this->belongsTo(City::class,'residence_city_id');
    }
    public function formationCity (){
        $this->belongsTo(FormationCity::class,'formation_city_id');
    }
    public function schoolFaculty (){
        $this->belongsTo(SchoolFaculty::class,'faculty_id');
    }
    public function formationOption (){
        $this->belongsTo(FormationOption::class,'formation_option_id');
    }
    public function formationLevel (){
        $this->belongsTo(FormationLevel::class,'formation_level_id');
    }
    public function paymentMode (){
        $this->belongsTo(PaymentMode::class,'payment_mode_id');
    }

    public function studentPayment (){
        return $this->hasMany(StudentPayment::class,'student_id');
    }
}
