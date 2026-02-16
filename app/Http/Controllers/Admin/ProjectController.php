<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with(['service', 'images'])->orderBy('order')->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::where('is_active', true)->orderBy('order')->get();
        return view('admin.projects.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'service_id' => 'required|exists:services,id',
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:projects,slug',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'overview_en' => 'nullable|string',
            'overview_ar' => 'nullable|string',
            'client_name_en' => 'nullable|string|max:255',
            'client_name_ar' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'website_url' => 'nullable|url',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'testimonial_text_en' => 'nullable|string',
            'testimonial_text_ar' => 'nullable|string',
            'testimonial_name_en' => 'nullable|string|max:255',
            'testimonial_name_ar' => 'nullable|string|max:255',
            'testimonial_role_en' => 'nullable|string|max:255',
            'testimonial_role_ar' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'order' => 'integer',
            'status' => 'required|in:active,draft',
        ]);

        // Prepare JSON fields
        $projectData = [
            'service_id' => $data['service_id'],
            'slug' => $data['slug'],
            'title' => ['en' => $data['title_en'], 'ar' => $data['title_ar']],
            'description' => ['en' => $data['description_en'] ?? '', 'ar' => $data['description_ar'] ?? ''],
            'overview' => ['en' => $data['overview_en'] ?? '', 'ar' => $data['overview_ar'] ?? ''],
            'client_name' => ['en' => $data['client_name_en'] ?? '', 'ar' => $data['client_name_ar'] ?? ''],
            'duration' => $data['duration'] ?? null,
            'website_url' => $data['website_url'] ?? null,
            'is_featured' => $request->has('is_featured'),
            'order' => $data['order'] ?? 0,
            'status' => $data['status'],
        ];

        // Handle testimonial
        if ($data['testimonial_text_en'] || $data['testimonial_text_ar']) {
            $projectData['testimonial_text'] = ['en' => $data['testimonial_text_en'] ?? '', 'ar' => $data['testimonial_text_ar'] ?? ''];
            $projectData['testimonial_name'] = ['en' => $data['testimonial_name_en'] ?? '', 'ar' => $data['testimonial_name_ar'] ?? ''];
            $projectData['testimonial_role'] = ['en' => $data['testimonial_role_en'] ?? '', 'ar' => $data['testimonial_role_ar'] ?? ''];
        }

        // Handle featured image
        if ($request->hasFile('featured_image')) {
            $projectData['featured_image'] = $this->uploadImageWebp($request->file('featured_image'), 'projects');
        }

        $project = Project::create($projectData);

        // Handle gallery images
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $index => $image) {
                $imagePath = $this->uploadImageWebp($image, 'projects/gallery');
                $project->images()->create([
                    'image_path' => $imagePath,
                    'order' => $index + 1
                ]);
            }
        }

        // Handle Features
        if ($request->has('features')) {
            foreach ($request->input('features') as $index => $featureData) {
                if (!empty($featureData['title_en']) || !empty($featureData['title_ar'])) {
                    $project->features()->create([
                        'icon' => $featureData['icon'] ?? 'fas fa-check-circle',
                        'title' => ['en' => $featureData['title_en'] ?? '', 'ar' => $featureData['title_ar'] ?? ''],
                        'description' => ['en' => $featureData['description_en'] ?? '', 'ar' => $featureData['description_ar'] ?? ''],
                        'order' => $index + 1
                    ]);
                }
            }
        }

        // Handle Tech Stack
        if ($request->has('tech_stack')) {
            foreach ($request->input('tech_stack') as $index => $techData) {
                if (!empty($techData['name'])) {
                    $project->techStack()->create([
                        'name' => $techData['name'],
                        'icon' => $techData['icon'] ?? 'fas fa-code',
                        'order' => $index + 1
                    ]);
                }
            }
        }

        return redirect()->route('admin.projects.index')->with('success', __('admin.success_add'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return redirect()->route('admin.projects.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $services = Service::where('is_active', true)->orderBy('order')->get();
        $project->load(['images', 'features', 'techStack']);
        return view('admin.projects.edit', compact('project', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'service_id' => 'required|exists:services,id',
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:projects,slug,' . $project->id,
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'overview_en' => 'nullable|string',
            'overview_ar' => 'nullable|string',
            'client_name_en' => 'nullable|string|max:255',
            'client_name_ar' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'website_url' => 'nullable|url',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'testimonial_text_en' => 'nullable|string',
            'testimonial_text_ar' => 'nullable|string',
            'testimonial_name_en' => 'nullable|string|max:255',
            'testimonial_name_ar' => 'nullable|string|max:255',
            'testimonial_role_en' => 'nullable|string|max:255',
            'testimonial_role_ar' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'order' => 'integer',
            'status' => 'required|in:active,draft',
        ]);

        // Prepare JSON fields
        $projectData = [
            'service_id' => $data['service_id'],
            'slug' => $data['slug'],
            'title' => ['en' => $data['title_en'], 'ar' => $data['title_ar']],
            'description' => ['en' => $data['description_en'] ?? '', 'ar' => $data['description_ar'] ?? ''],
            'overview' => ['en' => $data['overview_en'] ?? '', 'ar' => $data['overview_ar'] ?? ''],
            'client_name' => ['en' => $data['client_name_en'] ?? '', 'ar' => $data['client_name_ar'] ?? ''],
            'duration' => $data['duration'] ?? null,
            'website_url' => $data['website_url'] ?? null,
            'is_featured' => $request->has('is_featured'),
            'order' => $data['order'] ?? 0,
            'status' => $data['status'],
        ];

        // Handle testimonial
        if ($data['testimonial_text_en'] || $data['testimonial_text_ar']) {
            $projectData['testimonial_text'] = ['en' => $data['testimonial_text_en'] ?? '', 'ar' => $data['testimonial_text_ar'] ?? ''];
            $projectData['testimonial_name'] = ['en' => $data['testimonial_name_en'] ?? '', 'ar' => $data['testimonial_name_ar'] ?? ''];
            $projectData['testimonial_role'] = ['en' => $data['testimonial_role_en'] ?? '', 'ar' => $data['testimonial_role_ar'] ?? ''];
        }

        // Handle featured image
        if ($request->hasFile('featured_image')) {
            if ($project->featured_image) {
                Storage::disk('public')->delete($project->featured_image);
            }
            $projectData['featured_image'] = $this->uploadImageWebp($request->file('featured_image'), 'projects');
        }

        $project->update($projectData);

        // Handle gallery images
        if ($request->hasFile('gallery')) {
            $currentCount = $project->images()->count();
            foreach ($request->file('gallery') as $index => $image) {
                $imagePath = $this->uploadImageWebp($image, 'projects/gallery');
                $project->images()->create([
                    'image_path' => $imagePath,
                    'order' => $currentCount + $index + 1
                ]);
            }
        }

        // Handle Features (Sync by deleting and recreating)
        if ($request->has('features')) {
            $project->features()->delete();
            foreach ($request->input('features') as $index => $featureData) {
                if (!empty($featureData['title_en']) || !empty($featureData['title_ar'])) {
                    $project->features()->create([
                        'icon' => $featureData['icon'] ?? 'fas fa-check-circle',
                        'title' => ['en' => $featureData['title_en'] ?? '', 'ar' => $featureData['title_ar'] ?? ''],
                        'description' => ['en' => $featureData['description_en'] ?? '', 'ar' => $featureData['description_ar'] ?? ''],
                        'order' => $index + 1
                    ]);
                }
            }
        }

        // Handle Tech Stack (Sync by deleting and recreating)
        if ($request->has('tech_stack')) {
            $project->techStack()->delete();
            foreach ($request->input('tech_stack') as $index => $techData) {
                if (!empty($techData['name'])) {
                    $project->techStack()->create([
                        'name' => $techData['name'],
                        'icon' => $techData['icon'] ?? 'fas fa-code',
                        'order' => $index + 1
                    ]);
                }
            }
        }

        return redirect()->route('admin.projects.index')->with('success', __('admin.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete featured image
        if ($project->featured_image) {
            Storage::disk('public')->delete($project->featured_image);
        }

        // Delete gallery images
        foreach ($project->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }

        // Delete project (will cascade delete related records)
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', __('admin.success_delete'));
    }

    /**
     * Delete a single gallery image
     */
    public function deleteImage($imageId)
    {
        $image = \App\Models\ProjectImage::findOrFail($imageId);
        Storage::disk('public')->delete($image->image_path);
        $image->delete();

        return response()->json(['success' => true]);
    }
}
