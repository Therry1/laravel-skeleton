<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMode extends Model
{
    protected $table = 'payment_modes';
    protected $guarded = [''];

    public function student (){
        return $this->hasMany(Student::class,'payment_mode_id');
    }
}
