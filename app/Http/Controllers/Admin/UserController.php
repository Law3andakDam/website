<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    
    public function ChangeInfo(Request $request){
         
         $id = Auth::user()->id;
         $user = User::find($id);
          
         if(!empty($request->get('username'))){
          $user->name = $request->get('username');
         }
         if(!empty($request->get('email'))){
          $user->email = $request->get('email');	
         }

         if(!empty($request->get('password'))){
          $user->password = bcrypt($request->get('password'));
         }
        
         $user->save();

          return redirect('/admin/dashboard')->withFlashMessage('Updated Successfully');
    }
}
