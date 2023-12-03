<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\University;


class HomeController extends Controller
{
    public function index()
    {
     
  $cou = Country::all(); // Fetch all countries from the database.
  $unis = University::all(); // Fetch all countries from the database.

return view('home', compact('cou' , 'unis'));

    }
    public function uniDetailes($id,$country_id)
{

    // $university= University::where('country_id',$id)->get();
    $collages = College::where('uni_id',$id)->get();
    // dd($collages);
    $university = University::find($id);
    $country=Country::find($country_id); // Fetch all countries from the database.

    return view('universities/uniDetailes', compact('university','country','collages'));
}


     public function adminHome(){
        return view('admin.main');
     }
}
