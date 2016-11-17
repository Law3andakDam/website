<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;
use App\CMS;

class SiteSettingsController extends Controller
{
    public function ContactsIndex(Contact $contact){
           
           $contact = $contact->all();

           	return view('admin.site.contacts', compact('contact'));
    }

    public function ContactsStore(Request $request, Contact $contact){
    

     
    	// hide token and convert request to array of $key=>$req
    	 foreach(array_except($request->toArray(), ['_token', 'submit']) as $key => $req)  
    	 {  // get name_setting equal to this key  in $siteSettingUpdate
    	 	$contactSettingUpdate = $contact->where('contact_name' , $key)->get()[0];
            // assign value in the $req to column 'value' and save
            $contactSettingUpdate->fill(['value' => $req])->save();
    	 }

            return redirect('admin/dashboard');
    	
    }


    public function CMS_Index(CMS $cms){
           
           $cmss = $cms->all();

            return view('admin.site.cms', compact('cmss'));
    }

    public function CMS_Store(Request $request, CMS $cms){
      
        // hide token and convert request to array of $key=>$req
         foreach(array_except($request->toArray(), ['_token', 'submit']) as $key => $req)  
         {  // get name_setting equal to this key  in $siteSettingUpdate
            $CMS_SettingUpdate = $cms->where('setting_name' , $key)->get()[0];
            // assign value in the $req to column 'value' and save
            $CMS_SettingUpdate->fill(['value' => $req])->save();
         }

            return redirect('admin/dashboard');
        
    }
}
