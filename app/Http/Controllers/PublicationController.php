<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PublicationController extends Controller
{
        /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        Log::debug('An informational message.');
        $publications = publication::orderBy('id','desc')->paginate(6);
        return view('publications.index', compact('publications'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('publications.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        
      if ($request->hasFile('image2')) {
    $file = $request->file('image2');
    
    // Validate the file type and size
    $validator = Validator::make(
        ['image2' => $file],
        ['image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'] // Adjust the allowed file types and size as needed
    );

    if ($validator->fails()) {
        // Handle validation errors for the image
        return Redirect::back()->withInput($request->input())->withErrors($validator);
    }

    $extention = $file->getClientOriginalExtension();
    $filename = time() . '.' . $extention;

    try {
        $file->move(public_path('/images/publications_images'), $filename);
    } catch (Exception $e) {
        Log::error($e->getMessage());
        // Handle the exception and return an error response
    }

    // Update the request data using the ->merge() method
    $request['image'] = $filename;
    //dd($request);
    
}

$validator = Validator::make($request->all(), [
    'name' => 'required',
    'slug' => 'required|unique:publications,slug',
    'body' => 'required',
    'image' => 'required',
    'abstract' => 'required',
    'minimage' => 'required',
    'published' => 'required',
    'color' => 'required',
    'author' => 'required',
]);

if ($validator->fails()) {
    Session::flash('create_category_error', "true");
    return Redirect::back()->withInput($request->input())->withErrors($validator);
}

publication::create($request->post());

return redirect()->route('publications.index')->with('success', 'La publicaci車n ha sido creada satisfactoriamente');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\publication  $publication
    * @return \Illuminate\Http\Response
    */
    public function show(publication $publication)
    {
        return view('publications.show',compact('publication'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\publication  $publication
    * @return \Illuminate\Http\Response
    */
    public function edit(publication $publication)
    {
        return view('publications.edit',compact('publication'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\publication  $publication
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, publication $publication)
    {
              if ($request->hasFile('image2')) {
    $file = $request->file('image2');
    
    // Validate the file type and size
    $validator = Validator::make(
        ['image2' => $file],
        ['image2' => 'required|image|mimes:jpeg,png,jpg,gif'] // Adjust the allowed file types and size as needed
    );

    if ($validator->fails()) {
        // Handle validation errors for the image
        return Redirect::back()->withInput($request->input())->withErrors($validator);
    }

    $extention = $file->getClientOriginalExtension();
    $filename = time() . '.' . $extention;

    try {
        $file->move(public_path('/images/publications_images'), $filename);
    } catch (Exception $e) {
        Log::error($e->getMessage());
        // Handle the exception and return an error response
    }

    // Update the request data using the ->merge() method
    $request['image'] = $filename;
    //dd($request);
              }

        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'abstract' => 'required',
            'image' => 'required',
            'minimage' => 'required',
            'published' => 'required',
            'color' => 'required',
            'author' => 'required',
        ]);
        
        if ($validator->fails()) {
            return Redirect::back()->withInput($request->input())->withErrors($validator); // Set the error message
        }

        $publication->fill($request->post())->save();

        return redirect()->route('publications.index')->with('success','publication Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\publication  $publication
    * @return \Illuminate\Http\Response
    */
    public function destroy(publication $publication)
    {
        $publication->delete();
        return redirect()->route('publications.index')->with('success','publication has been deleted successfully');
    }
}
