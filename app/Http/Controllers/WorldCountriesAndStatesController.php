<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;
use App\Models\Publication;

class WorldCountriesAndStatesController extends Controller
{
    public function home()
    {
        $publications = publication::orderBy('id','desc')->paginate(5);
        $countries = Country::all();
        return view('home', compact('countries'), compact('publications'));
    }

    public function publications()
    {
        $publications = publication::orderBy('id','desc')->paginate(5);
        return view('blog', compact('publications'));
    }


    public function getstates()
    {
    	$country_id =request('country');

        $states= State::where('country_id', $country_id)->get();
        $option ="<option value=''>Select State</option>";
        foreach($states as $state){
            $option .= '<option value="' .$state->name. '">' .$state->name. '</option>';
        }
        return $option;
    }
}


