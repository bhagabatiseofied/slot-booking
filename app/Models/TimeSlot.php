<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class TimeSlot extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array

     */
    protected $fillable = [
        'date',
        'day_of_week',
        'start_time',
        'end_time',
        'doctor_id',
       
    ];



    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
