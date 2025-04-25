<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home ()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    
    public function contact ()
    {
        return view('contact');
    }
    public function solution()
    {
        return view('solution');
    }

    public function job_seaker()
    {
        return view('job_seaker');
    }
    public function privacy_policy()
    {
        return view('privacy_policy');
    }
    public function terms_conditions()
    {
        return view('terms_conditions');
    }
    
}
