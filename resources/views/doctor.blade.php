<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Doctor Slot Create</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <body >
        

        <h2> Create Booking slot by Doctor </h2>



        <div class="container">


            <div class="container">


                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif 


                <h2>Choose a Day and Time</h2>
             
                <form class="form-inline" method="post" action="{{ route('createSlot') }}">

                    @csrf
                  <div class="form-group">
                    <label for="email">Date</label>

                    <input type="date" class="form-control" id="pwd" placeholder="Enter Date" name="date">
                    {{-- <select class="form-control" id="slot" name="dow">
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                        <option>Friday</option>
                        <option>Saturday</option>
                      </select> --}}
                  </div>
                  <div class="form-group">
                    <label for="pwd">Strat Time:</label>
                    <input type="time" class="form-control" id="pwd" placeholder="Enter start time" name="stime">
                  </div>

                  <div class="form-group">
                    <label for="pwd">End Time:</label>
                    <input type="time" class="form-control" id="pwd" placeholder="Enter End time" name="etime">
                  </div>
                  
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
              </div>



        </div>


       

       
            
        


        <div class="container">
            <h2>Created Slots by Doctor</h2>
                   
            <table class="table">
              <thead>
                <tr>
                  <th>Slot Id</th>
                  <th>Date</th>
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
                  <td> {{$slot->date}}</td>
                  <td> {{$slot->day_of_week}}</td>
                  <td> {{$slot->start_time}}</td>
                  <td> {{$slot->end_time}}</td>

                  <td>
                    @if($slot->status == 0) 
                    Available
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
