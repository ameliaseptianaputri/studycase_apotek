<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApotekRecap extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicine_name',
        'stock',
        'price',
        'type',
    ];
}
