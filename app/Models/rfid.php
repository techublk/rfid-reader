<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rfid extends Model
{
    use HasFactory;

    protected $table = 'rfid';

    protected $fillable = [
        'c0',
        'c1',
        'c2',
        'c3',
        'processed',
    ];
}
