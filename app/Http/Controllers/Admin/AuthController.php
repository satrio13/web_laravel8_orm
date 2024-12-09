<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuthModel;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login()
    {
        if(session('id_user'))
        {
            return redirect()->route('backend');  
        }

        return view('admin.auth.login');
    }

    function proses_login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        
        $user = AuthModel::where('username', $username)->first();
        if($user)
        {
            if($user->is_active == '1')
            {
                if(password_verify($password, $user->password))
                {
                    $params = [
                        'id_user' => $user->id_user,
                        'nama' => $user->nama,
                        'username' => $user->username,
                        'email' => $user->email,
                        'level' => $user->level
                    ];

                    session($params);
                    return redirect()->route('backend');  
                }else
                {
                    return redirect()->back()->withInput()->with('error', 'Password Salah!');  
                }
            }else
            {
                return redirect()->back()->withInput()->with('error', 'Akun tidak aktif!');
            }
        }else
        {
            return redirect()->back()->withInput()->with('error', 'Username tidak terdaftar!');
        }
    }

    function logout()
    {
        session()->flush();
        return redirect()->route('auth/login');  
    }

    function cek_session()
    {
        if(!session('id_user'))
        {
            return response()->json(['session_active' => false]);   
        }else
        {
            return response()->json(['session_active' => true]);
        }     
    }

}