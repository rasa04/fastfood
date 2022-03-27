<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $table = 'foods';
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'type',
        'photo'
    ];
}
