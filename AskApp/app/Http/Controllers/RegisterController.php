<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Layout.Register',[
            'title'=>'register',
            'active'=>'Register'
        ]);
    }
    public function store(Request $request)
    {
        $validated_data=$request->validate([
            'nama'=>'required|max:255',
            'email'=>'required|email:dns',
            'username'=>'required|max:255',
            'password'=>'required|min:5|max:255|confirmed'

        ]);
        $validated_data['password']=bcrypt($validated_data['password']);

        User::create($validated_data);

        $request->session()->flash('success','Regristration successfull! Please login');
        return redirect('/');
    }
}
