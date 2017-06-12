<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Genre;
use Cinema\Movie;
use Redirect;
use Session;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=Movie::Movies();
        
        return view('pelicula.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres=Genre::pluck('genre','id');
        return view('pelicula.create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Movie::create(
           $request->all());
        Session::flash('message','pelicula creada correctamente');
        return Redirect::to('/pelicula');
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
          $genres=Genre::pluck('genre','id');
          $movie=Movie::find($id);
           return view('pelicula.edit',['movie'=>$movie,'genres'=>$genres]);
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
        $movie=Movie::find($id);
        $movie->fill($request->all());
        $movie->save();
        Session::flash('message',' Pelicula editada correctamente');
        return Redirect::to('/pelicula');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie=Movie::find($id);
        $movie->delete();
        Session::flash('message',' Pelicula eliminada correctamente');
        return Redirect::to('/pelicula');
    }
}
