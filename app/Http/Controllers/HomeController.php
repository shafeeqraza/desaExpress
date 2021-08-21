<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("public.login");
        // dd("index");
    }

    public function register()
    {
        return view("public.register");
    }

    public function login()
    {
        return view("public.login");
    }

    public function forgotPassword()
    {
        return view("public.forgotpassword");

    }

    public function resetPassword($token)
    {
        return view("public.resetPassword", ['token' => $token]);
    }
}
