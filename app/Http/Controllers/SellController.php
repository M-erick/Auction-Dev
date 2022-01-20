<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //only authenticated users can view this page
     public function __constructor() {
        $this->middleware('auth');
    }

    public function index()
    {
        $userDisplay = Form::orderBy('created_at','desc')
        ->take(10)
        ->get();
        //get use created timer and loop through all time is complete
        return view('sellPanel')->with('timer',$userDisplay);
    }

    }
