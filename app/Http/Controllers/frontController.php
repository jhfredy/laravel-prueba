<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Movie;

class frontController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only'=>'admin']);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function contacto(){
        return view('contacto');
    }

    public function review(){
        $movies=Movie::Movies();
        return view('review',compact('movies'));
    }
    public function admin(){
        return view('admin.index');
    }

    
}
