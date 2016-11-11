<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    protected $table = 'blood_type';

    protected $fillable = [
      'type',
    ];



    public function doner()
    {
        return $this->belongsTo('App\Doner');
    }
}

