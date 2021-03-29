<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function signUp()
    {
        return view('frontend.sign-up');
    }
}
