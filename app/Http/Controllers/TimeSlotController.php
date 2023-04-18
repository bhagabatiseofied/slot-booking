<?php

namespace App\Http\Controllers;


use App\Models\TimeSlot;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


        $this->validate($request, [
            'date' => 'required',
            'stime' => 'required',
            'etime' => 'required',
           
        ]);

        

        $name_of_the_day = date('l', strtotime($request->date));

        $slot = TimeSlot::create([
            
                    
            'date' => $request->date,
            'day_of_week' => $name_of_the_day,
            'start_time' => $request->stime,
            'end_time' => $request->etime,
            'doctor_id' => 1,
            
            
        ]);

        
        return redirect()->route('doctor')->withSuccess('Slot Created Successfuly');



    }

    /**
     * Display the specified resource.
     */
    public function show(TimeSlot $timeSlot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TimeSlot $timeSlot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TimeSlot $timeSlot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TimeSlot $timeSlot)
    {
        //
    }
}
