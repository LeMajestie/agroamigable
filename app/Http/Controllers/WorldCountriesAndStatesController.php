<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;
use App\Models\Publication;
use App\Models\Comment;
use Illuminate\Support\Facades\Log; 

class WorldCountriesAndStatesController extends Controller
{
    public function home()
    {
        $publications = publication::orderBy('id','desc')->paginate(6);
        $countries = Country::all();
        return view('home', compact('countries'), compact('publications'));
    }

    public function publicationsShowcase()
    {   
        $publications = publication::orderBy('id','desc')->paginate(5);
        return view('blogshowcase', compact('publications'));
    }

    public function publicationsShowcaseCategory($category)
    {   
        $publications = publication::where('category', $category)
                           ->orderBy('id','desc')
                           ->paginate(5);
        return view('blogshowcase', compact('publications'));
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
        $publications = publication::orderBy('id','desc')->paginate(5, ['*'],'publications');
        $publicationSelected= Publication::where('slug', $slug)->get();
        $comments= Comment::where('slug', $slug)->get();
        $comments_paginated=Comment::where('slug', $slug)->orderBy('id','desc')->paginate(3,['*'], 'comments_paginated');
        Log::info('comments are: ' . $comments);
        Log::info('comments paginated are: ' . $comments_paginated);
        return view('blog', compact('publications', 'publicationSelected', 'comments_paginated'));
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


