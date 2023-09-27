<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Exception;
use Illuminate\Support\Facades\Log;

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
        $publications = publication::orderBy('id','desc')->paginate(5);
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
        Log::debug('An informational message.');
        if($request->hasFile('image'))
        {
            Log::debug('An informational message.');
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            //$file->move('/images/publications_images/',$filename);

            try {
                // Code that may throw an exception
                $file->move(public_path('/images/publications_images'),$filename);
                //$request->image->move(url('/images'), $filename);
                // public/images/file.png
                // ...
            } catch (Exception $e) {
                // Exception handling code
                Log::debug($e->getMessage());
                // ...
            }

            $request['image']=$filename;
        }

        $request->validate([
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

            // Check if validation fails
    if ($request->fails()) {
        return redirect()
            ->back()
            ->withErrors($request)
            ->withInput(); // This will retain the old input values
    }

        publication::create($request->post());

        return redirect()->route('publications.index')->with('success','La publicación ha sido creada satisfactoriamente');
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
        $request->validate([
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
