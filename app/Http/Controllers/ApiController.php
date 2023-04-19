<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeSlot;

class ApiController extends Controller
{
    //


    function index(Request $request){


       

        // $user= User::where('email', $request->email)->first();
        // // print_r($data);
        //     if (!$user || !Hash::check($request->password, $user->password)) {
        //         return response([
        //             'message' => ['These credentials do not match our records.']
        //         ], 404);
        //     }

        //     $token = $user->createToken('my-app-token')->plainTextToken;

        //     $response = [
        //         'user' => $user,
        //         'token' => $token
        //     ];

        // return response($response, 201);
    }


    function store(Request $request){


        
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

        

        return response()->json([
            'status' => true,
            'message' => 'Slot Created Successfully',
            
        ], 200);


    }




    function update(Request $request,$id){


        
        $this->validate($request, [
            'date' => 'required',
            'stime' => 'required',
            'etime' => 'required',
           
        ]);

        

        $name_of_the_day = date('l', strtotime($request->date));


        $slot = TimeSlot::find($id);

         $slot->update([
            'date' => $request->date,
            'day_of_week' => $name_of_the_day,
            'start_time' => $request->stime,
            'end_time' => $request->etime,
            'doctor_id' => 1,
            ]);

    

        return response()->json([
            'status' => true,
            'message' => 'Slot Updated Successfully',
            
        ], 200);


    }


}
