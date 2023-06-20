<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
        /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $publications = Publication::orderBy('id','desc')->paginate(5);
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

        Publication::create($request->post());

        return redirect()->route('publications.index')->with('success','Publication has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Publication  $Publication
    * @return \Illuminate\Http\Response
    */
    public function show(Publication $Publication)
    {
        return view('publications.show',compact('Publication'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Publication  $Publication
    * @return \Illuminate\Http\Response
    */
    public function edit(Publication $Publication)
    {
        return view('publications.edit',compact('Publication'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Publication  $Publication
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Publication $Publication)
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

        $Publication->fill($request->post())->save();

        return redirect()->route('publications.index')->with('success','Publication Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Publication  $Publication
    * @return \Illuminate\Http\Response
    */
    public function destroy(Publication $Publication)
    {
        $Publication->delete();
        return redirect()->route('publications.index')->with('success','Publication has been deleted successfully');
    }
}
