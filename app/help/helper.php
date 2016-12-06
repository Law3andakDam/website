<?php
use App\Http\Requests\TeamRequest;


function getSetting($settingname = 'name'){
    
    return \App\CMS::where('setting_name' , $settingname)->get()[0]->value;
}


#CMS
function getIntroduction($settingname = 'introduction'){
    
    return \App\CMS::where('setting_name' , $settingname)->get()[0]->value;
}


function getBloodDoners($settingname = 'blood_doners'){
    
    return \App\CMS::where('setting_name' , $settingname)->get()[0]->value;
}

function getConfidentiality($settingname = 'confidentialy'){
    
    return \App\CMS::where('setting_name' , $settingname)->get()[0]->value;
}

function getLaw3andakDamRights($settingname = 'l3d_rights'){
    
    return \App\CMS::where('setting_name' , $settingname)->get()[0]->value;
}


# Contacts 
function getFaceBook($settingname = 'facebook'){
    
    return \App\Contact::where('contact_name' , $settingname)->get()[0]->value;
}

function getTwitter($settingname = 'twitter'){
    
    return \App\Contact::where('contact_name' , $settingname)->get()[0]->value;
}









