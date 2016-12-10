<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodNeedy extends Model
{
     protected $table = 'cases';

    protected $fillable = [
       'name', 'email', 'mobile', 'hospital_name', 'blood_type_id',
     
    ];

}
