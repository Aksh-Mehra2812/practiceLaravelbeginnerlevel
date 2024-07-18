<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){
        return view('user.pages.home');
    }

    public function userLogin(){
        return view('user.auth.login');
    }

    public function userRegister(){
        return view('user.auth.register');
    }

    public function add(){
        return view('user.pages.add');
    }
}
