<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultancy;

class ConsultancyController extends Controller
{
   public function index()
    {
        $consultancies = Consultancy::latest()->get();
        return view('backend.consultancy.index', compact('consultancies'));
    }
    // Frontend store function
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        Consultancy::create([
            'full_name' => $request->full_name,
            'company_name' => $request->company_name,
            'designation' => $request->designation,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success','Your consultancy request has been submitted!');
    }

    // Backend: Index (show all consultancy requests)
     

    // Backend: Delete a request
    public function destroy($id)
    {
        $consultancy = Consultancy::findOrFail($id);
        $consultancy->delete();

        return redirect()->back()->with('success','Consultancy request deleted successfully!');
    }

}
