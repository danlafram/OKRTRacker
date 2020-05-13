<?php

namespace App\Http\Controllers;

use App\Objective;
use App\KeyResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objectives     = Objective::where('user_id', Auth::id())->get();
        $key_results = $objectives->map(function ($objective){
            return $objective->keyresults;
        })->first();
        return view('home')->with(compact('objectives', 'key_results'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $target_date = $request->input('target_date');
        
        $objective = Objective::create([
            'name'          => $name,
            'target_date'   => $target_date,
            'is_done'       => false,
            'user_id'       => Auth::id() 
        ]);

        $key_results = $request->key_result;

        $krs = []; //krs == KeyResults
        foreach($key_results as $kr){
            if(!is_null($kr)){
                $key_result                 = new KeyResult();
                $key_result->name           = $kr;
                $key_result->is_done        = false;
                $key_result->objective_id   = $objective->id;
                $krs[] = $key_result->attributesToArray();
            }
        }

        KeyResult::insert($krs);

        return redirect()->action('ObjectiveController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function show(Objective $objective)
    {
        return view('home'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objective $objective)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objective $objective)
    {
        //
    }
}
