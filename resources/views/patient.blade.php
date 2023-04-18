<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Patients Slot Booking</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <body >
        

        <h2> Book A slot for appointment </h2>



        <div class="container">


            <div class="container">


                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif 




        <div class="container">
            <h2>Book a Slot</h2>
                   
            <table class="table">
              <thead>
                <tr>
                  <th>Slot Id</th>
                  <th>Doctor Name</th>
                  <th>Appointment Date</th>
                  <th>Day Of Week</th>
                  <th>Start time</th>
                  <th>End time</th>
                  <th>Booking Status</th>
                  
                </tr>
              </thead>
              <tbody>

                @foreach ($slots as $slot)
                <tr>
                  <td> {{$slot->id}}</td>
                  
                  <td> {{$slot->doctor->name}}</td>
                  <td> {{$slot->date}}</td>
                  <td> {{$slot->day_of_week}}</td>
                  
                  <td> {{$slot->start_time}}</td>
                  <td> {{$slot->end_time}}</td>

                  <td>
                    @if($slot->status == 0) 
                    <a href="{{ route('appointment', ['date' => $slot->date,'slot_id' => $slot->id,'doctor_id' => $slot->doctor->id,'patient_id' => 1]) }}"> 
     
                        Book Now</a>
                
                    @else
                    Booked
                    @endif
                </td>
                 
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
       




    </body>
</html>
