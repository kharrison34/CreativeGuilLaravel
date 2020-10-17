<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landscapes extends Model
{
    use HasFactory;

    protected $casts = [
        'album' => 'array'
    ];
}
