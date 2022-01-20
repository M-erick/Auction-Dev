<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
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

       return view('buyPanel')->with('usersData',
       Form::whereDate('created_at', '=' ,Carbon::today()->toDateString())->get());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //StorRequest class handles use input validation
        $amount = $request->input('amount');






            Form::create([

                'days'=>$request->input('days'),
                'amount'=>$amount,
                'name'=>auth()->user()->name,
                'user_id' =>auth()->user()->id



            ]);

            return redirect('/BuyShares')->with('message','Your bid has been placed');
            //update table to contain sum of remaining shares after user purchases ;





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
