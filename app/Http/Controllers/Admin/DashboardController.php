<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use App\Models\Client;
use App\Models\Testimonial;
use App\Models\ContactMessage;
use App\Models\PageView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $projectsCount = Project::count();
        $servicesCount = Service::count();
        $clientsCount = Client::count();
        $testimonialsCount = Testimonial::count();
        $messagesCount = ContactMessage::where('status', 'new')->count();
        $recentMessages = ContactMessage::latest()->take(5)->get();

        // Visitor Stats
        $totalVisitors = PageView::count();
        $uniqueVisitors = PageView::distinct('ip_address')->count();
        $visitorsLastWeek = PageView::where('created_at', '>=', now()->subDays(7))->count();
        $visitorsLastMonth = PageView::where('created_at', '>=', now()->subDays(30))->count();
        $topPages = PageView::select('path', DB::raw('count(*) as views'))
            ->groupBy('path')
            ->orderByDesc('views')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'projectsCount',
            'servicesCount',
            'clientsCount',
            'testimonialsCount',
            'messagesCount',
            'recentMessages',
            'totalVisitors',
            'uniqueVisitors',
            'visitorsLastWeek',
            'visitorsLastMonth',
            'topPages'
        ));
    }
}
