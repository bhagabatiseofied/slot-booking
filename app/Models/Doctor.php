<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;



    public function timeslots()
    {
        return $this->hasMany(TimeSlot::class);
    }


}


