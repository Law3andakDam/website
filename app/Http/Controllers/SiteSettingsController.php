<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

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
}
