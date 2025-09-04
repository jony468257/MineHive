<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('backend.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('backend.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $imagePath = $request->file('image')->store('gallery_images', 'public');

        Gallery::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Image added successfully.');
    }

    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }
            $gallery->image = $request->file('image')->store('gallery_images', 'public');
        }

        $gallery->title = $request->title;
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Image updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if (Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Image deleted successfully.');
    }
}
