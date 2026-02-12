<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function projects()
    {
        return view('projects');
    }

    public function projectDetails()
    {
        return view('project-details');
    }

    public function clients()
    {
        return view('clients');
    }

    public function contact()
    {
        return view('contact');
    }

    public function team()
    {
        return view('team');
    }

    public function branding()
    {
        return view('branding');
    }

    public function marketing()
    {
        return view('marketing');
    }

    public function webDesign()
    {
        return view('web-design');
    }

    public function appDevelopment()
    {
        return view('apps-development');
    }

    public function ecommerce()
    {
        return view('ecommerce');
    }

    public function softwareTools()
    {
        return view('software-tools');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function terms()
    {
        return view('terms');
    }
}
