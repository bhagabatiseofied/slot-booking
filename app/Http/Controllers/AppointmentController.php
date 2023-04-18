<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\TimeSlot;
use Illuminate\Http\Request;

class AppointmentController extends Controller
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
            'slot_id' => 'required',
            'doctor_id' => 'required',
            'patient_id' => 'required',
            'date' => 'required',
           
        ]);


        $appointment = Appointment::create([
            
            'slot_id' => $request->slot_id,
            'doctor_id' => $request->doctor_id,
            'patient_id' => $request->patient_id,
            'appointment_date' => $request->date,  
        ]);



        $update_status = TimeSlot::find($appointment->slot_id);
        $update_status ->status = 1;
        $update_status ->save();




        
        return redirect()->route('patient')->withSuccess('Appointment Booked Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
