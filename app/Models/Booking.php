<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = 
    [
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
            'paid',
            'due',
            'specialrequest',
            'status',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class); 
    }
}
