<?php

namespace App\Http\Controllers;

use App\Models\Shedule;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;

class SheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('type','guard')->withCount('shedules')
        ->having('shedules_count', '<', 2)
        ->get();
        $locations = Location::all();
        return view('admin.shedule.create', compact(['users','locations']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shedule = Shedule::create([
            'user_id'=>$request->id,
            'location_id'=>$request->location,
            'date'=>$request->date,
            'time_from'=>$request->timeFrom,
            'time_to'=>$request->timeTo
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shedule  $shedule
     * @return \Illuminate\Http\Response
     */
    public function show(Shedule $shedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shedule  $shedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Shedule $shedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shedule  $shedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shedule $shedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shedule  $shedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shedule $shedule)
    {
        //
    }
}
