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
        'maxoccupancy',
        'description',
        'category_id',
        'roomtype',
        'roomsize',
        'roomview',
        'guestservice',
        'facilities',
        'availablerooms',
        'image',
       
    ];


    protected $casts = [
        'image' => 'array',
        'guestservice' => 'array',
        'facilities' => 'array',
    ];

}
