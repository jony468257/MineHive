<?php

 namespace App\Http\Controllers;

use App\Models\AgencySection;
use Illuminate\Http\Request;

class AgencySectionController extends Controller
{
    public function index()
    {
        $sections = AgencySection::latest()->get();
        return view('backend.agency.index', compact('sections'));
    }

    public function create()
    {
        return view('backend.agency.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required|string|max:255',
            'title_bn' => 'nullable|string|max:255',
            'subtitle_en' => 'nullable|string',
            'subtitle_bn' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_bn' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'video_link' => 'nullable|url',
        ]);

        $path = $request->file('image') ? $request->file('image')->store('agency', 'public') : null;

        AgencySection::create(array_merge($request->all(), ['image' => $path]));

        return redirect()->route('agency.index')->with('success', 'Agency Section added successfully.');
    }

    public function edit(AgencySection $agency)
    {
        return view('backend.agency.edit', compact('agency'));
    }

    public function update(Request $request, AgencySection $agency)
    {
        $request->validate([
            'title_en' => 'required|string|max:255',
            'title_bn' => 'nullable|string|max:255',
            'subtitle_en' => 'nullable|string',
            'subtitle_bn' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_bn' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'video_link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('agency', 'public');
            $agency->image = $path;
        }

        $agency->update($request->except('image'));

        return redirect()->route('agency.index')->with('success', 'Agency Section updated successfully.');
    }

    public function destroy(AgencySection $agency)
    {
        $agency->delete();
        return redirect()->route('agency.index')->with('success', 'Agency Section deleted successfully.');
    }
}
