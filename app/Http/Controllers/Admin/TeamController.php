<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $members = TeamMember::orderBy('order')->get();
        return view('admin.team.index', compact('members'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name.en' => 'required|string|max:255',
            'name.ar' => 'required|string|max:255',
            'role.en' => 'required|string|max:255',
            'role.ar' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'bio.en' => 'nullable|string',
            'bio.ar' => 'nullable|string',
            'social_links' => 'nullable|array',
            'cv_link' => 'nullable|url',
            'order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImageWebp($request->file('image'), 'team');
        }

        $data['is_active'] = $request->has('is_active');

        TeamMember::create($data);

        return redirect()->route('admin.team.index')->with('success', __('admin.success_add'));
    }

    public function edit(TeamMember $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, TeamMember $team)
    {
        $data = $request->validate([
            'name.en' => 'required|string|max:255',
            'name.ar' => 'required|string|max:255',
            'role.en' => 'required|string|max:255',
            'role.ar' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'bio.en' => 'nullable|string',
            'bio.ar' => 'nullable|string',
            'social_links' => 'nullable|array',
            'cv_link' => 'nullable|url',
            'order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }
            $data['image'] = $this->uploadImageWebp($request->file('image'), 'team');
        }

        $data['is_active'] = $request->has('is_active');

        $team->update($data);

        return redirect()->route('admin.team.index')->with('success', __('admin.success_update'));
    }

    public function destroy(TeamMember $team)
    {
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }
        $team->delete();

        return redirect()->route('admin.team.index')->with('success', __('admin.success_delete'));
    }
}
