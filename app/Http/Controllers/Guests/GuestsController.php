<?php

namespace App\Http\Controllers\Guests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use App\Guest;
use DB;


class GuestsController extends Controller
{

       public function index(){
       	
          return view('user.index');

       }

	   public function basic_email(Request $request){
	     $passed_name =  $request->name;
	     $passed_subject =  $request->subject;
	     $passed_mail =  $request->mailano; 
	     $passed_mess =  $request->mess;


	     $data = ['name'=>$passed_name , 'subject'=>$passed_subject , 'mail'=> $passed_mail , 
	     'mess'=>$passed_mess];
	    
	     // use ($data) :  to use it in the function
	     Mail::send(['html'=>'email.mymail'], $data, function($message)use ($data){
	        $message->to('law3andakdam@gmail.com','law3andakdam')->subject($data['subject']);
	        $message->from($data['mail'], $data['name']);

	     });
	       return redirect('/Home')->withFlashMessage('Your Message Sent Successfully');
      }

      public function join_Newsletters(Request $request, Guest $guest ){

        // check if guest join before
       $used = DB::table('guests')->where('email', $request->guest_email)->pluck('email');
       if($used->count()){
          // if already joined before.
          return redirect('/Home')->withFlashMessage('Already Exists');
       }
       else{ // if not .
        $guest->create([
       'email'=> $request->guest_email,
        ]);
        return redirect('/Home')->withFlashMessage('Welcome to Law3andakDam Family');}
      }
}
