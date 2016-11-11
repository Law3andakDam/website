<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamRole extends Model
{
     protected $table = 't_roles';
    
    protected $fillable =
        [
        'role',
    ];



    public function tram_member()
    {
        return $this->belongsTo('App\TeamMember');
    }

}
