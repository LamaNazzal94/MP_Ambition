<?php

namespace App\Http\Controllers;
use App\Models\LangAcademies;

use Illuminate\Http\Request;

class LangAcademiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academies = LangAcademies::all();
        return view('admin/acadmy/index', compact('academies'));
    }
    
    public function lanAcademiesDetailes()
    {
        $academies = LangAcademies::all(); // Fetch all academies from the database.

        return view('LanguageAcademies/academies', compact('academies'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.acadmy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif |max:2048',
            'description' => 'required',
            'location' => 'required',
        ]);

        $academies = new LangAcademies();

        $academies->name = $request->input('name');
        $academies->description = $request->input('description');
        $academies->location = $request->input('location');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $academies->image = $imageName;
            // $storedPath = $uploadedFile->store('public/photo');
            $academies->save();
        }

        $academies->save();
        return redirect()->route('lanAcadimes.index')->with('success', 'Data stored successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aca = LangAcademies::findOrFail($id);

        return view('admin.acadmy.edit', compact('aca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'description' => 'required',
            'location' => 'required',

        ]);

        $academies = LangAcademies::findOrFail($id);

          if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $academies->image =$request->image; ;
        }
        $academies->name = $request->input('name');
        $academies->location = $request->location;
        $academies->description = $request->description;
        $academies->save();

        return redirect()->route('lanAcadimes.index')->with('success', 'Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the country
        $academies = LangAcademies::find($id);
    
        if (!$academies) {
            // Handle the case where the country doesn't exist
            return redirect()->back()->with('error', 'Acadmy not found');
        }
        $academies->delete();
        return redirect()->route('lanAcadimes.index')->with('success', 'Acadmy deleted successfully');
    }
}
