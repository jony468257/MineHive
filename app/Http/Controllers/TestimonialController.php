<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the testimonials.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('backend.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new testimonial.
     */
    public function create()
    {
        return view('backend.testimonials.create');
    }

    /**
     * Store a newly created testimonial in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'video_url'   => 'required|url',
            'client_name' => 'nullable|string|max:255',
        ]);

        // Convert YouTube watch URL to embed URL
        $video_url = $this->convertToEmbed($request->video_url);

        Testimonial::create([
            'title'       => $request->title,
            'client_name' => $request->client_name,
            'video_url'   => $video_url,
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial added successfully.');
    }

    /**
     * Show the form for editing the specified testimonial.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('backend.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified testimonial in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'video_url'   => 'required|url',
            'client_name' => 'nullable|string|max:255',
        ]);

        $video_url = $this->convertToEmbed($request->video_url);

        $testimonial->update([
            'title'       => $request->title,
            'client_name' => $request->client_name,
            'video_url'   => $video_url,
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified testimonial from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }

    /**
     * Helper: Convert YouTube watch URL to embed URL
     */
    private function convertToEmbed($url)
    {
        // Match the v= parameter
        if (preg_match('/v=([a-zA-Z0-9_-]+)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }

        // Match youtu.be short links
        if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }

        // Already embed or unknown format, return as is
        return $url;
    }
}
