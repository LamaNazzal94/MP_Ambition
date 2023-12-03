<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Department;
use App\Models\College;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\University;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::with('college')->get();
        return view('admin/department/index', compact('departments'));
    }
    public function departmentDetailes($id,$college_id)
    {
        $apples = Apply::where('department_id',$id)->get();
        $department = Department::find($id);
        $college=College::find($college_id); // Fetch all countries from the database.

        return view('departments/departmentDetailes', compact('department','college'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $college = College::all();
        return view('admin.department.create', compact('college'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $departments = new Department; // Replace 'YourModel' with your actual Eloquent model
       

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // You can customize these rules
            'introduction' => 'required',

            'apportunities' => 'required',
            'apportunitie2' => 'required',
            'apportunitie3' => 'required',
            'apportunitie4' => 'required',
            'apportunitie5' => 'required',
            'apportunitie6' => 'required',
            'apportunitie7' => 'required',

            'cost' => 'required',
            'duration_study' => 'required',
            
        ]);
        // dd($request);
        
        $image = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $image);

    
        // Create a new university record in the database using the Eloquent model
        $departments->name = $request->input('name');
        $departments->image = $image;
      
        $departments->introduction = $validatedData['introduction'];
        $departments->apportunities = $validatedData['apportunities'];
        $departments->apportunitie2 = $validatedData['apportunitie2'];
        $departments->apportunitie3 = $validatedData['apportunitie3'];
        $departments->apportunitie4 = $validatedData['apportunitie4'];
        $departments->apportunitie5 = $validatedData['apportunitie5'];
        $departments->apportunitie6 = $validatedData['apportunitie6'];
        $departments->apportunitie7 = $validatedData['apportunitie7'];


        $departments->cost = $validatedData['cost'];
        $departments->duration_study = $validatedData['duration_study'];
        
       
        $departments->college_id =  $request->input('college'); // Get the 'college_id' from the request
        // $college = College::find($request->input('college'));
        // if ($college) {
        //     $departments->college()->associate($college);
        // }
        $departments->save();
        // Redirect or return a response as needed
    
        return redirect()->route('departments.index')->with('success', 'Data stored successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
