<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests;

class LoginController extends Controller
{
  

    use AuthenticatesUsers;

   
    protected $redirectTo = '/admin/dashboard';
    protected $redirectAfterLogout = '/login';

   
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect($this->redirectAfterLogout);
    }
}
