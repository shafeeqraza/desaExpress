<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        if(auth()->user()->role == "driver") {

            return view("driver.dashboard");

        }else if(auth()->user()->role == "dispatcher") {

            return view("dispatcher.dashboard");

        }
    }
}
