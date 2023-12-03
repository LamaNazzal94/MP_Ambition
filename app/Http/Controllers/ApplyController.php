<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Http\Requests\StoreApplyRequest;
use App\Http\Requests\UpdateApplyRequest;
use App\Models\Department;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;


class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applies = Apply::with('department')->get();
        return view('admin.apply.index', compact('applies'));
    }

    public function applyDetailes($id)
    {
        // Fetch all countries from the database.

        return view('applyDetailes', compact('id'));
    }
    public function applyUser(Request $request)
    {
        $apply = new Apply; // Replace 'YourModel' with your actual Eloquent model
        // Validate the incoming request data
      
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required',
            'high_school_certificate' => 'required',
            'age' => 'required',
            'nationalID' => 'required',
            'bio' => 'required',

            // 'country_id' => 'numeric',
        ]);


        $apply->first_name = $request->input('first_name');
        $apply->last_name = $validatedData['last_name'];
        $apply->email = $validatedData['email'];
        $apply->high_school_certificate = $validatedData['high_school_certificate'];
        $apply->age = $validatedData['age'];
        $apply->nationalID = $validatedData['nationalID'];
        $apply->bio = $validatedData['bio'];
        $apply->department_id = $request->input('department_id');
        $apply->user_id =Auth::id(); // Get the 'country_id' from the request

        $department = Department::find($request->input('country'));
        if ($department) {
            $apply->country()->associate($department);
        }
        $apply->save();
        $user = User::find(Auth::id());
        session()->flash('success', 'Applied successfully');
            return redirect()->route('home')->with('success', 'applied successfully');
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = Department::all();
        return view('admin.apply.create', compact("department"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $apply = new Apply; // Replace 'YourModel' with your actual Eloquent model

        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',

            'email' => 'required',
            'high_school_certificate' => 'required',
            'age' => 'required',
            'nationalID' => 'required',
            'bio' => 'required',

            // 'country_id' => 'numeric',
        ]);

        $apply->first_name = $request->input('first_name');
        $apply->last_name = $validatedData['last_name'];
        $apply->email = $validatedData['email'];
        $apply->high_school_certificate = $validatedData['high_school_certificate'];
        $apply->age = $validatedData['age'];
        $apply->nationalID = $validatedData['nationalID'];
        $apply->bio = $validatedData['bio'];

        $apply->department_id = $request->input('department'); // Get the 'country_id' from the request
        $department = Department::find($request->input('country'));
        if ($department) {
            $apply->country()->associate($department);
        }
        $apply->save();
        $user = User::find(Auth::id());
        if ($user->role == 'admin')
            return redirect()->route('applies.index')->with('success', 'Data stored successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Apply $apply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apply $apply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplyRequest $request, Apply $apply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apply $apply)
    {
        //
    }
}
