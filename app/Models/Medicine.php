<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    //default tablenya akn medicines

    // protected $table = 'medicine';

    protected $fillable = [
        'type',
        'name',
        'price',
        'stock',
    ];
    
}
