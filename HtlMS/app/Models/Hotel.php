<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'location', 'contact_number', 'email', 'description', 'rooms', 'facilities', 'images'];

    protected $casts = [
        'facilities' => 'array',
        'images' => 'array',
    ];
    
}
