<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    protected $table = 'students';
    protected $guarded = [''];

    public function studentPayment (): hasMany
    {
        return $this->hasMany(StudentPayment::class, '');
    }
}
