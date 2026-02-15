<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $clients = \App\Models\Client::where('is_active', true)->orderBy('order')->limit(6)->get();
        $testimonials = \App\Models\Testimonial::where('is_active', true)->limit(3)->get();
        return view('home', compact('clients', 'testimonials'));
    }

    public function about()
    {
        $team = \App\Models\TeamMember::where('is_active', true)->orderBy('order')->get();
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
        $clients = \App\Models\Client::where('is_active', true)->orderBy('order')->get();
        return view('clients', compact('clients'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function team()
    {
        $team = \App\Models\TeamMember::where('is_active', true)->orderBy('order')->get();
        $testimonials = \App\Models\Testimonial::where('is_active', true)->limit(3)->get();
        return view('team', compact('team', 'testimonials'));
    }


    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function terms()
    {
        return view('terms');
    }

    public function serviceDetail($slug)
    {
        $service = \App\Models\Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('service-detail', compact('service'));
    }
}
