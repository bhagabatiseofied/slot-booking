<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TimeSlotController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('doctor', function () {
//     return view('doctor');
// })->name('doctor');


Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor');
Route::get('/patient', [PatientController::class, 'index'])->name('patient');
Route::get('/appointment', [AppointmentController::class, 'store'])->name('appointment');


Route::post('/createslot', [TimeSlotController::class, 'store'])->name('createSlot');
