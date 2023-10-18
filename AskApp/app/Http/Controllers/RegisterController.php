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
            'Nama'=>'required|max:255',
            'Email'=>'required|email:dns',
            'Username'=>'required|max:255',
            'Password'=>'required|min:5|max:255|confirmed'

        ]);
        $validated_data['Password']=bcrypt($validated_data['Password']);

        User::create($validated_data);

        $request->session()->flash('success','Regristration successfull! Please login');
        return redirect('/');
    }
}
