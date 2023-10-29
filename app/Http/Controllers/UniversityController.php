<?php

namespace App\Http\Controllers;
use App\Models\College;
use App\Models\Country;
use App\Models\University;
use App\Http\Requests\StoreUniversityRequest;
use App\Http\Requests\UpdateUniversityRequest;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $universities = University::all();
        $universities = University::with('country')->get();
        return view('admin/university/index', compact('universities'));
    }

    public function uniDetailes($id,$country_id)
{

    // $university= University::where('country_id',$id)->get();
    $collages = College::where('uni_id',$id)->get();
    // dd($collages);
    $university = University::find($id);
    $country=Country::find($country_id); // Fetch all countries from the database.

    return view('uniDetailes', compact('university','country','collages'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $country=Country::all();
        return view('admin.university.create', compact("country"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $university = new University; // Replace 'YourModel' with your actual Eloquent model

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for image uploads
            'image1' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // You can customize these rules
            'image2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'accommodation' => 'required',
            'offer' => 'required',
            'ranking' => 'required',
            'about' => 'required',
            'requirement' => 'required',
            'cost' => 'required',
            'location' => 'required',
            // 'country_id' => 'numeric',
        ]);

        // Handle main image

        
        $mainImageName = time() . '_' . $request->file('main_image')->getClientOriginalName();
        $request->file('main_image')->move(public_path('images'), $mainImageName);

        $image1 = time() . '_' . $request->file('image1')->getClientOriginalName();
        $request->file('image1')->move(public_path('images'), $image1);

        $image2 = time() . '_' . $request->file('image2')->getClientOriginalName();
        $request->file('image2')->move(public_path('images'), $image2);

        $image3 = time() . '_' . $request->file('image3')->getClientOriginalName();
        $request->file('image3')->move(public_path('images'), $image3);
        
        // Create a new university record in the database using the Eloquent model
        $university->name = $request->input('name');
        $university->main_image = $mainImageName;
        $university->image1 = $image1;
        $university->image2 = $image2;
        $university->image3 = $image3;
        $university->accommodation = $validatedData['accommodation'];
        $university->offer = $validatedData['offer'];
        $university->ranking = $validatedData['ranking'];
        $university->about = $validatedData['about'];
        $university->requirement = $validatedData['requirement'];
        $university->cost = $validatedData['cost'];
        $university->location = $validatedData['location'];
       
        $university->country_id =  $request->input('country'); // Get the 'country_id' from the request
        $country = Country::find($request->input('country'));
        if ($country) {
            $university->country()->associate($country);
        }
        $university->save();

        // Redirect or return a response as needed
    


        return redirect()->route('universities.index')->with('success', 'Data stored successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(University $university)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $universities = University::findOrFail($id);

        return view('admin.university.edit', compact('universities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'main_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file types and size as needed
            'image1' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'accommodation' => 'required|string',
            'offer' => 'required|string',
            'ranking' => 'string',
            'about' => 'required|string',
            'requirement' => 'required|string',
            'cost' => 'required|string',
            'location' => 'string',
        ]);
    
        $university = University::find($id);
    
        if (!$university) {
            return redirect()->route('universities.index')->with('error', 'University not found.');
        }
    
        $university->name = $request->input('name');
        $university->accommodation = $request->input('accommodation');
        $university->offer = $request->input('offer');
        $university->ranking = $request->input('ranking');
        $university->about = $request->input('about');
        $university->requirement = $request->input('requirement');
        $university->cost = $request->input('cost');
        $university->location = $request->input('location');
    
        // Update main image if a new one is provided
        if ($request->hasFile('main_image')) {
            $mainImage = $request->file('main_image');
            $mainImageName = time() . '.' . $mainImage->getClientOriginalExtension();
            $mainImage->move(public_path('images'), $mainImageName);
            $university->main_image = $mainImageName;
        }
    
        // Update image1 if a new one is provided
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $image1Name = time() . '1.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('images'), $image1Name);
            $university->image1 = $image1Name;
        }
    
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $image2Name = time() . '2.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('images'), $image2Name);
            $university->image2 = $image2Name;
        }
    
        // Update image3 if a new one is provided
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $image3Name = time() . '3.' . $image3->getClientOriginalExtension();
            $image3->move(public_path('images'), $image3Name);
            $university->image3 = $image3Name;
        }
    
        $university->save();
    
        return redirect()->route('universities.index')->with('success', 'University information updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        University::destroy($id);
        return back()->with('success', 'University deleted successfully.');
    }
}