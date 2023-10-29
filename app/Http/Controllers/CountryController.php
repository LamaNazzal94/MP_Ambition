<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request; // Import the Request class
use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;



class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();
    return view('admin/country/index', compact('countries'));
    }


    
public function countryDetailes($id)
{
    $university= University::where('country_id',$id)->get();
    $countries = Country::find($id); // Fetch all countries from the database.

    return view('countryDetailes', compact('countries','university'));
}
  
    public function create()
    {
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif |max:2048',
            'description' => 'required',
            'quote' => 'required'
        ]);

        $countries = new Country();

        $countries->name = $request->input('name');
        $countries->description = $request->input('description');
        $countries->quote = $request->input('quote');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $countries->image = $imageName;
            // $storedPath = $uploadedFile->store('public/photo');
            $countries->save();
        }

        $countries->save();
        return redirect()->route('countries.index')->with('success', 'Data stored successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $countries = Country::findOrFail($id);

        return view('admin.country.edit', compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            // Add any desired image validation rules

        ]);

        $countries = Country::findOrFail($id);

          if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $countries->image =$request->image; ;
        }
        $countries->name = $request->input('name');

        // $countries->name = $request->name;
        $countries->quote = $request->quote;
        $countries->description = $request->description;

        // $admins->password = Hash::make ($request->input('password'));

      
        
        $countries->save();

        return redirect()->route('countries.index')->with('success', 'Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the country
        $country = Country::find($id);
    
        if (!$country) {
            // Handle the case where the country doesn't exist
            return redirect()->back()->with('error', 'Country not found');
        }
        $country->delete();
        return redirect()->route('countries.index')->with('success', 'Country deleted successfully');
    }
    
    
}
