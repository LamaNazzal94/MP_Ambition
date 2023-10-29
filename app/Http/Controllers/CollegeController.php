<?php

namespace App\Http\Controllers;

use App\Models\College;

use App\Http\Requests\StoreCollegeRequest;
use App\Http\Requests\UpdateCollegeRequest;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\University;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colleges = College::with('university')->get();
        return view('admin/college/index', compact('colleges'));
    }
    public function collegeDetailes($id,$uni_id)
{

    $department = Department::where('college_id',$id)->get();

    // $university= University::where('country_id',$id)->get();
    $college = College::find($id);
    $university=University::find($uni_id); // Fetch all countries from the database.

    return view('collegeDetailes', compact('college','university','department'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $university=University::all();
        return view('admin.college.create', compact("university"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCollegeRequest $request)
    {
        $college = new College; 
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for image uploads
            // 'country_id' => 'numeric',
        ]);

        // Handle main image
        $ImageName = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $ImageName);

      
        // Create a new university record in the database using the Eloquent model
       // Replace 'YourModel' with your actual Eloquent model
        $college->name = $validatedData['name'];
        $college->image = $ImageName;
        $college->uni_id =  $request->input('university');
     
        $college->save();

        // Redirect or return a response as needed
    


        return redirect()->route('colleges.index')->with('success', 'Data stored successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(College $college)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $colleges = College::findOrFail($id);

        return view('admin.college.edit', compact('colleges'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $college = College::find($id);

        if (!$college) {
            return redirect()->route('colleges.index')->with('error', 'College not found.');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $college->name = $request->input('name');

        // Update image if a new one is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $college->image = $imageName;
        }

        $college->save();

        return redirect()->route('colleges.index')->with('success', 'College information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
            College::destroy($id);
            return back()->with('success', 'University deleted successfully.');
        
    }
}
