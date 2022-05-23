<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travellog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'date', 'checkin', 'checkout',
        'location', 'keterangan', 'temperature', 'image'
    ];
}
