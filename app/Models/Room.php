<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

   
      
    protected $fillable = [
        'roomtitle',
        'roomno',
        'floorno',
        'price',
        'category',
        'roomtype',
        'roomsize',
        'roomview',
        'guestservice',
        'facilities',
        'availablerooms',
        'maxoccupancy',
        'description',
        'image',
       
    ];


    protected $casts = [
        'image' => 'array',
        'guestservice' => 'array',
        'facilities' => 'array',
    ];

}
