<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('service')->orderBy('order')->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = \App\Models\Service::where('is_active', true)->orderBy('order')->get();
        return view('admin.projects.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:projects,slug',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'content.en' => 'nullable|string',
            'content.ar' => 'nullable|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'client_name' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
            'website_url' => 'nullable|url',
            'is_featured' => 'boolean',
            'order' => 'integer',
        ]);

        if ($request->hasFile('main_image')) {
            $data['main_image'] = $this->uploadImageWebp($request->file('main_image'), 'projects');
        }

        if ($request->hasFile('gallery')) {
            $gallery = [];
            foreach ($request->file('gallery') as $image) {
                $gallery[] = $this->uploadImageWebp($image, 'projects/gallery');
            }
            $data['gallery'] = $gallery;
        }

        $data['is_featured'] = $request->has('is_featured');

        Project::create($data);
        return redirect()->route('admin.projects.index')->with('success', __('admin.success_add'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('admin.projects.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $services = \App\Models\Service::where('is_active', true)->orderBy('order')->get();
        return view('admin.projects.edit', compact('project', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:projects,slug,' . $project->id,
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'content.en' => 'nullable|string',
            'content.ar' => 'nullable|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'client_name' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
            'website_url' => 'nullable|url',
            'is_featured' => 'boolean',
            'order' => 'integer',
        ]);

        if ($request->hasFile('main_image')) {
            if ($project->main_image) {
                Storage::disk('public')->delete($project->main_image);
            }
            $data['main_image'] = $this->uploadImageWebp($request->file('main_image'), 'projects');
        }

        if ($request->hasFile('gallery')) {
            $gallery = $project->gallery ?? [];
            foreach ($request->file('gallery') as $image) {
                $gallery[] = $this->uploadImageWebp($image, 'projects/gallery');
            }
            $data['gallery'] = $gallery;
        }

        $data['is_featured'] = $request->has('is_featured');

        $project->update($data);
        return redirect()->route('admin.projects.index')->with('success', __('admin.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->main_image) {
            Storage::disk('public')->delete($project->main_image);
        }
        if ($project->gallery) {
            foreach ($project->gallery as $image) {
                Storage::disk('public')->delete($image);
            }
        }
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', __('admin.success_delete'));
    }
}
