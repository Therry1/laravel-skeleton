<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $guarded = [''];

    public function student (){
        return $this->hasMany(Student::class,'residence_city_id');
    }
}
