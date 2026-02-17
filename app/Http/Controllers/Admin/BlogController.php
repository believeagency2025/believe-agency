<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $blogs = Blog::orderBy('order')->latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:blogs,slug',
            'content.en' => 'required|string',
            'content.ar' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']['en']);
        }

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImageWebp($request->file('image'), 'blogs');
        }

        $data['is_active'] = $request->has('is_active');

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', __('admin.success_add'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:blogs,slug,' . $blog->id,
            'content.en' => 'required|string',
            'content.ar' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']['en']);
        }

        if ($request->hasFile('image')) {
            if ($blog->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($blog->image);
            }
            $data['image'] = $this->uploadImageWebp($request->file('image'), 'blogs');
        }

        $data['is_active'] = $request->has('is_active');

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', __('admin.success_update'));
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', __('admin.success_delete'));
    }
}
