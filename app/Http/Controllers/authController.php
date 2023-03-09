<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    function login()
    {
        return view('auth.login');
    }
    function prosesLogin(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required|',
                'password' => 'required|min:8|max:25'
            ],
            [
                'name.required' => 'username harus di isi',
                'password.required' => 'password belum di isi',
            ]
        );
        $request->session()->regenerate();

        if (Auth::guard('admin')->attempt($request->only('name', 'password'))) {
            return redirect()->route('dashboard-admin');
        } elseif (Auth::guard('user')->attempt($request->only('name', 'password'))) {
            return redirect()->route('dashboard-user');
        }
    }
    function register()
    {
        return view('auth.register');
    }
    function prosesRegistrasi(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ], [
            'username.required' => 'username harus di isi',
            'email.required' => 'email nya mana',
            'password.required' => 'password belum di isi',
        ]);
        $insert = new user();
        $insert->name = $request->username;
        $insert->email = $request->email;
        $insert->password = bcrypt($request->password);
        $insert->save();
        if ($insert->save()) {
            return response()->json(['status' => 'success']);
        }
    }
    function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('/');
    }
}
