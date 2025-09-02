<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // Show all blogs (Admin view)
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('backend.blogs.index', compact('blogs'));
    }

    // Show single blog
    public function show($id)
    {
        $blog = Blog::findOrFail($id); // Single blog fetch
        return view('backend.blogs.show', compact('blog'));
    }

    // Show create form
    public function create()
    {
        return view('backend.blogs.create');
    }

    // Store blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    // Show edit form
    public function edit(Blog $blog)
    {
        return view('backend.blogs.edit', compact('blog'));
    }

    // Update blog
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }

            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    // Delete blog
    public function destroy(Blog $blog)
    {
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
