<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function login()
    {
        return view('admins.login');
    }
    public function login_user()
    {
        return view('pages.login');
    }
    public function register_user()
    {
        return view('pages.register');
    }
    public function profil()
    {
        return view('pages.profil');
    }
}
