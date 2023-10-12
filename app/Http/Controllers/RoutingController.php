<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    public function home()
    {
        return view('auth.login');
    }
    
    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root($first)
    {
        if ($first != 'assets')
            return view($first);
        return view('dashboard');
    }

    /**
     * second level route
     */
    public function secondLevel($first, $second)
    {        
        if ($first != 'assets')
            return view($first.'.'.$second);
        return view('dashboard');
    }

    /**
     * third level route
     */
    public function thirdLevel($first, $second, $third)
    {
        if ($first != 'assets')
            return view($first.'.'.$second.'.'.$third);
        return view('dashboard');
    }
}
