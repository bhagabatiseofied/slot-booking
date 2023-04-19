<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeSlotController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ApiController;

use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::get('/patient', [ApiController::class, 'index'])->name('patientapi');
    Route::post('/slotapi', [ApiController::class, 'store'])->name('slotapi');
    Route::post('/updateslotapi/{id}', [ApiController::class, 'update']);
   
});



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);



// Route::post('/me', [AuthController::class, 'me']);


Route::get('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');







