<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    
    protected $table = 't_members';
    
    protected $fillable = [
        'member_name', 
        'member_image', 
        'member_email', 
        'member_mobile', 
        'role_id',
        'password',
    ];


    public function team_role()
    {
        return $this->hasOne('App\TeamRole');
    }
}
