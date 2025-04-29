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
    public function saas_firm()
    {
        return view('saasFirm');
    }

    public function marketing_agancy()
    {
        return view('markiting_agancy');
    }

    public function pharmaceutical()
    {
        return view('Pharmaceutical');
    }

    public function real_estate()
    {
        return view('real_estate');
    }

    public function logistics()
    {
        return view('Logistics');
    }

    public function Accounting_Finance()
    {
        return view('Accounting&Finance');
    }

    public function Ecommcer()
    {
        return view('Ecommcer');
    }
    public function home_services()
    {
        return view('home_services');
    }
}