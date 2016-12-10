<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [

        // Roles
        'admin/roles/create',
        'admin/roles/{id}/edit',
        'admin/roles/{id}/delete',
        'admin/roles/update',

        
        // Team Members
        'admin/teams/create', 
        'admin/teams/{id}/edit',
        'admin/teams/{id}/delete',
        'admin/teams/update',

        // Blood Types
        'admin/blood_types/create',
        'admin/blood_types/{id}/edit',
        'admin/blood_types/{id}/delete',
        'admin/blood_types/update',


        // Site Setting
        'admin/contact_settings',
        'admin/cms_settings',

        
        // Guest
        '/home',
        '/Terms',
        '/AboutUs',
        '/ContactUs',
        '/sendmail',

        // Blood Needy
        '/NeedBlood',

        // Doners     
        '/Doner/list',
        '/Doner',
        
        
    ];
}
