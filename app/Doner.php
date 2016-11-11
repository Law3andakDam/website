<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doner extends Model
{
    protected $table = 'doners';

    protected $fillable = [
      
      'blood_type_id','doner_mobile','doner_email'
    ];


    public function doner_blood_type()
    {
        return $this->hasOne('App\BloodType');
    }
}
