<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        // displays the total amount of shares available in home page
        // $amount = Form::amount();
        // $amount = $request->input('amount');


         $shares =Form::sum('amount');
        return view('home')
        ->with('shares' ,$shares);
    }
    public function store(Request $request)
    {
        //StorRequest class handles use input validation
        $amount = $request->input('amount');
        $shares = Form::deterUserInput($amount);
        return view('home')->with('shares', $shares);
    }
}
