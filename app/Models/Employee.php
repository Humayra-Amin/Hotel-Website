<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'fname',
        'lname',
        'eid',
        'Locality',
        'email',
        'phone',            
        'dob',
        'nid',
        'country',
        'joiningdate',
        'sex',
        'salary',
        'position',
        'image',
    ];


    protected $casts = [
        'image' => 'array',
    ];

    
}
