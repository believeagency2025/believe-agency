<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('order')->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:services,slug',
            'subtitle.en' => 'nullable|string|max:255',
            'subtitle.ar' => 'nullable|string|max:255',
            'icon_class' => 'required|string',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'content.en' => 'nullable|string',
            'content.ar' => 'nullable|string',
            'features' => 'nullable',
            'process' => 'nullable',
            'why_choose_us' => 'nullable',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = \Illuminate\Support\Str::slug($data['title']['en']);
        }

        // Parse JSON fields if they are strings
        foreach (['features', 'process', 'why_choose_us'] as $field) {
            if (isset($data[$field]) && is_string($data[$field])) {
                $data[$field] = json_decode($data[$field], true);
            }
        }

        $data['is_active'] = $request->has('is_active');

        Service::create($data);

        return redirect()->route('admin.services.index')->with('success', __('admin.success_add'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('admin.services.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:services,slug,' . $service->id,
            'subtitle.en' => 'nullable|string|max:255',
            'subtitle.ar' => 'nullable|string|max:255',
            'icon_class' => 'required|string',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',
            'content.en' => 'nullable|string',
            'content.ar' => 'nullable|string',
            'features' => 'nullable',
            'process' => 'nullable',
            'why_choose_us' => 'nullable',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = \Illuminate\Support\Str::slug($data['title']['en']);
        }

        // Parse JSON fields if they are strings
        foreach (['features', 'process', 'why_choose_us'] as $field) {
            if (isset($data[$field]) && is_string($data[$field])) {
                $data[$field] = json_decode($data[$field], true);
            }
        }

        $data['is_active'] = $request->has('is_active');

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', __('admin.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', __('admin.success_delete'));
    }
}
