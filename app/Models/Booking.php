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
            'room_id',
            'guestnumber',
            'checkInDate',
            'checkOutDate',
            'price',
            'discount',
            'specialrequest',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class); 
    }
}
