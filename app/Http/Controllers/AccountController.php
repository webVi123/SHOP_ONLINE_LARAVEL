<?php

namespace App\Http\Controllers;


class AccountController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
    // public function showupdateuser(){
    //     return view('updateuser');
    // }


    // public function showupdateuser(){
    //     $user = Auth::user();
    //     return view('updateuser', compact('user'));
    // }

    public function forgotpass(){
        return view('forgotpass');
    }
}
