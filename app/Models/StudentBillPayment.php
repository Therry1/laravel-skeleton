<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentBillPayment extends Model
{
    protected $table = 'student_bill_payments';
    protected $guarded = [''];

    public function payment()
    {
        return $this->belongsTo(StudentPayment::class , 'student_payment_id');
    }
}
