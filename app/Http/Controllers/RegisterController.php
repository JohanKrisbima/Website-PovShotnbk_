<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register'
        ]); 
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=> 'required|max:225',
            'telpon'=> 'required|min:11|numeric',
            'email'=> 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:255',
            // 'password_confirmed'=> 'required|confirmed'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);
        
        // $request->session()->flash('success', 'Registration Succesfull!! Please Login');

        return redirect('/login')->with('success', '');
    }
}
