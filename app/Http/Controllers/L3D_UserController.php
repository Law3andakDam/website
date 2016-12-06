<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;


class L3D_UserController extends Controller
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
	       return redirect('admin/home')->withFlashMessage('Your Message Sent Successfully');
      }
}
