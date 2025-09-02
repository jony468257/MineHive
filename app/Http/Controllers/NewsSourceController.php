<?php

 namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsSource;

class NewsSourceController extends Controller
{
    public function index()
    {
        $newsSources = NewsSource::all();
        return view('backend.news.index', compact('newsSources'));
    }

    public function create()
    {
        return view('backend.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        NewsSource::create([
            'name' => $request->name
        ]);

        return redirect()->route('news.index')->with('success', 'News Source Added!');
    }

    public function edit($id)
    {
        $news = NewsSource::findOrFail($id);
        return view('backend.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $news = NewsSource::findOrFail($id);
        $news->update([
            'name' => $request->name
        ]);

        return redirect()->route('news.index')->with('success', 'News Source Updated!');
    }

     public function destroy($id)
    {
        $news = NewsSource::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'News Source deleted successfully.');
    }
}

