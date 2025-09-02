<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('backend.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en'=>'nullable|string|max:255',
            'title_bn'=>'nullable|string|max:255',
            'subtitle_en'=>'nullable|string|max:255',
            'subtitle_bn'=>'nullable|string|max:255',
            'description_en'=>'nullable|string',
            'description_bn'=>'nullable|string',
        ]);

        Slider::create([
            'title' => json_encode(['en'=>$request->title_en,'bn'=>$request->title_bn]),
            'subtitle' => json_encode(['en'=>$request->subtitle_en,'bn'=>$request->subtitle_bn]),
            'description' => json_encode(['en'=>$request->description_en,'bn'=>$request->description_bn]),
        ]);

        return redirect()->route('sliders.index')->with('success','Slider uploaded successfully!');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('backend.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([
            'title_en'=>'nullable|string|max:255',
            'title_bn'=>'nullable|string|max:255',
            'subtitle_en'=>'nullable|string|max:255',
            'subtitle_bn'=>'nullable|string|max:255',
            'description_en'=>'nullable|string',
            'description_bn'=>'nullable|string',
        ]);

        $slider->title = json_encode(['en'=>$request->title_en,'bn'=>$request->title_bn]);
        $slider->subtitle = json_encode(['en'=>$request->subtitle_en,'bn'=>$request->subtitle_bn]);
        $slider->description = json_encode(['en'=>$request->description_en,'bn'=>$request->description_bn]);

        $slider->save();

        return redirect()->route('sliders.index')->with('success','Slider updated successfully!');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect()->route('sliders.index')->with('success','Slider deleted successfully!');
    }
}
