<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = 
    [
            // 'name',
            // 'email',
            // 'tel',
            // 'nid',
            // 'roomno',
            // 'roomcategory',
            // 'maxoccupancy',
            // 'checkInDate',            
            // 'checkOutDate',



            'cname',
            'email',
            'tel',
            'nid',
            'roomcategory',
            'roomno',
            'guestnumber',
            'checkInDate',
            'checkOutDate',
            'price',
            'discount',
            'specialrequest',
    ];
}
