<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rfid extends Model
{
    use HasFactory;

    protected $fillable = [
        'c0',
        'c1',
        'c2',
        'c3'
    ];
}
