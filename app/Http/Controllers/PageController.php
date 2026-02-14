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
        $team = config('team');
        return view('about', compact('team'));
    }

    public function services()
    {
        return view('services');
    }

    public function projects()
    {
        return view('projects');
    }

    public function projectDetails(Request $request)
    {
        $id = $request->query('id');
        $projects = config('projects');

        if (!$id || !isset($projects[$id])) {
            return redirect()->route('projects');
        }

        $project = $projects[$id];
        return view('project-details', compact('project'));
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
        $team = config('team');
        return view('team', compact('team'));
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
