<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('Backend.admin.user.index',compact('data'));
    }

    public function tambahuser()
    {
        return view('Backend.admin.user.create');
    }

    public function storeuser(Request $request)
    {
        $messages = [
            'username.required'=> 'Username Mohon diisi',
            'username.unique'=> 'Username sudah digunakan',
            'name.required'=> 'Nama Mohon diisi',
            'email.required'=> 'Email Mohon diisi',
            'password.required'=> 'Password Mohon diisi',
            'role.required'=> 'Role Mohon dipilih',
        ];

        $this->validate($request, [
            'username' => 'required|unique:users,username',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'is_role' => 'required',
        ], $messages);

        $save = User::create([
            'username'=> $request->username,  
            'name'=> $request->name, 
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'is_role'=> $request->is_role,
        ]);

        if($save){
            return redirect()->route('backend.admin.user')->with([
                'toast_success' => 'Berhasil tambah user!'
            ]);
        }else{
            return redirect()->back()->withInput()->with([
                'toast_error' => 'Gagal Tambah User!'
            ]);
        }


    }
}
