<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentPayment extends Model
{
    protected $table = 'student_payments';
    protected $guarded = [''];

    public function studentPayment (): belongsTo
    {
        return $this->belongsTo(Student::class, '');
    }
}
