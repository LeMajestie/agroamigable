<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;

class WorldCountriesAndStatesController extends Controller
{
    public function home()
    {
        $countries = Country::all();
        return view('home', compact('countries'));
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


