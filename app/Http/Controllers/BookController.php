<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'region' => 'required',
            'city' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->with('modelOpen', true)->withErrors($validator)->withInput($request->all());
        }

        return response()->download(public_path('/AgroAmigable.pdf'));
    }

    public function getDownload()
    {
        try {
            $headers = [
                'Content-Type' => 'application/pdf',
            ];

            $pathToFile = "/AgroAmigable.pdf";
            $name = "AgroAmigable.pdf";

            return response()->download(public_path('/AgroAmigable.pdf'));
        } catch (\Exception $e) {
            // Log the exception
            Log::error('Exception occurred: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
