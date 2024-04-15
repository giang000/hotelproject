<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_title',
        'image',
        'descrition',
        'price',
        'wifi',
        'room_type',
        'area',
        'facilities',
        'bed_bath'
    ];
}
