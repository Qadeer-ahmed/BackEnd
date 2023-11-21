<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Booking;

class Customer extends Model
{
    use HasFactory;
    public function bookings(){
    return $this->hasmany(Booking::class);
    
}
    }
