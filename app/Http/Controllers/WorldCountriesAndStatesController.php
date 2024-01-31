<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;
use App\Models\Publication;
use Illuminate\Support\Facades\Log; 

class WorldCountriesAndStatesController extends Controller
{
    public function home()
    {
        $publications = publication::orderBy('id','desc')->paginate(6);
        $countries = Country::all();
        return view('home', compact('countries'), compact('publications'));
    }

    public function publications($id)
    {   
        Log::info('id is: ' . $id);
        $publications = publication::orderBy('id','desc')->paginate(5);
        $publicationSelected= Publication::where('id', $id)->get();
        return view('blog', compact('publications'), compact('publicationSelected'));
    }

    public function publicationsBySlug($slug)
    {
        Log::info('slug is: ' . $slug);
        $publications = publication::orderBy('id','desc')->paginate(5);
        $publicationSelected= Publication::where('slug', $slug)->get();
        return view('blog', compact('publications'), compact('publicationSelected'));
    }



    public function getstates()
    {
    	$country_id =request('country');

        $states=State::where('country_id', $country_id)->get();
        $option ="<option value=''>Select State</option>";
        foreach($states as $state){
            $option .= '<option value="' .$state->name. '">' .$state->name. '</option>';
        }
        return $option;
    }
}


