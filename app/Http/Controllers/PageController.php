<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $clients = \App\Models\Client::where('is_active', true)->orderBy('order')->limit(6)->get();
        $testimonials = \App\Models\Testimonial::where('is_active', true)->limit(3)->get();
        $featuredProjects = \App\Models\Project::with('service')
            ->where('status', 'active')
            ->where('is_featured', true)
            ->orderBy('order')
            ->limit(6)
            ->get();

        $services = \App\Models\Service::where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('home', compact('clients', 'testimonials', 'featuredProjects', 'services'));
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
        $projects = \App\Models\Project::where('status', 'active')
            ->orderBy('order')
            ->get();

        $services = \App\Models\Service::where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('projects', compact('projects', 'services'));
    }

    public function projectDetails($slug)
    {
        $project = \App\Models\Project::with(['service', 'images', 'features', 'techStack'])
            ->where('slug', $slug)
            ->where('status', 'active')
            ->firstOrFail();

        return view('project-details', compact('project'));
    }

    public function clients()
    {
        $clients = \App\Models\Client::where('is_active', true)->orderBy('order')->get();
        return view('clients', compact('clients'));
    }

    public function contact()
    {
        $services = \App\Models\Service::where('is_active', true)
            ->orderBy('order')
            ->get();
        return view('contact', compact('services'));
    }

    public function team()
    {
        $team = \App\Models\TeamMember::where('is_active', true)->orderBy('order')->get();
        $testimonials = \App\Models\Testimonial::where('is_active', true)->limit(3)->get();
        return view('team', compact('team', 'testimonials'));
    }


    public function privacyPolicy()
    {
        $locale = app()->getLocale();
        $content = \App\Models\Setting::get("privacy_policy_{$locale}");
        return view('privacy-policy', compact('content'));
    }

    public function terms()
    {
        $locale = app()->getLocale();
        $content = \App\Models\Setting::get("terms_conditions_{$locale}");
        return view('terms', compact('content'));
    }

    public function serviceDetail($slug)
    {
        $service = \App\Models\Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('service-detail', compact('service'));
    }

    public function blogs()
    {
        $blogs = \App\Models\Blog::where('is_active', true)->orderBy('order')->latest()->paginate(6);
        return view('blogs.index', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $blog = \App\Models\Blog::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $recentBlogs = \App\Models\Blog::where('is_active', true)->where('id', '!=', $blog->id)->latest()->limit(5)->get();
        return view('blogs.show', compact('blog', 'recentBlogs'));
    }
}
