<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login()
    {
        return view('Backend.login');
    }

    public function auth(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_role == 1) {
                return redirect()->route('backend.admin');
            }else if(auth()->user()->is_role == 2){
                return redirect()->route('backend.user');
            }else{
                return redirect()->back()->withInput()->with('toast_error','No Access Menu.');
            }
        }else{
            return redirect()->back()->withInput()->with('toast_error','Email-Address And Password Are Wrong.');
        }
    }
    

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admin');
    }



}
