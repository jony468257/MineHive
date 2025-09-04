<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use Illuminate\Http\Request;

class SliderImageController extends Controller
{
    public function index()
    {
        $slides = SliderImage::latest()->get();
        return view('backend.sliders.index', compact('slides'));
    }

    public function create()
    {
        return view('backend.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('slider_images', 'public');

        SliderImage::create([
            'title' => $request->title,
            'image' => $path,
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider image added successfully.');
    }

    public function edit(SliderImage $slider)
    {
        return view('backend.sliders.edit', compact('slider'));
    }

    public function update(Request $request, SliderImage $slider)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('slider_images', 'public');
            $slider->image = $path;
        }

        $slider->title = $request->title;
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider image updated successfully.');
    }

    public function destroy(SliderImage $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider image deleted successfully.');
    }
}
