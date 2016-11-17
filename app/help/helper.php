<?php
use App\Http\Requests\TeamRequest;


function getSetting($settingname = 'name'){
    
    return \App\CMS::where('setting_name' , $settingname)->get()[0]->value;
}

