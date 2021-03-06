<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:movies|between:1,50',
            'format' => 'required|in:VHS,DVD,Streaming',
            'length' => 'required|integer|min:1|max:499',
            'year' => 'required|integer|min:1801|max:2099',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Movie::create($request->all());
        return redirect()->route('movies.index')
                        ->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies.show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movies.edit',compact('movie'));
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
        $this->validate($request, [
            'title' => 'required|between:1,50',
            'format' => 'required|in:VHS,DVD,Streaming',
            'length' => 'required|integer|min:1|max:499',
            'year' => 'required|integer|min:1801|max:2099',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Movie::find($id)->update($request->all());
        return redirect()->route('movies.show', ['id' => $id])
                        ->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nonDeletable = array('The Men Who Stare at Goats','Goats','Heidi','The Hunchback of Notre Dame','Napoleon Dynamite','Sense and Sensibility');
        $movie = Movie::find($id);
        if (in_array($movie->title,$nonDeletable)) {
            return redirect()->route('movies.show', ['id' => $id])
                        ->with('failure','As this movie pertains to goats, sheep, or a llama named Tina, it accordingly is unable to be deleted.');
        }
        Movie::find($id)->delete();
        return redirect()->route('movies.index')
                        ->with('success','Item deleted successfully');
    }
}
