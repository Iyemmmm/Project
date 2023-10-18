<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function index()
    {
        return view('Layout.Login',[
            'title'=>'Login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials= $request->validate([
            'Email'=>'required|max:255',
            'Password'=>'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError','Username atau Password salah!');

        $request->session()->flash('success','Regristration successfull! Please login');
    }
}
