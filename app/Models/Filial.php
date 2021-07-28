<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone',
        'metro',
        'prices',
        'promotion_prices',
        'header',
        'swimNeverNotEarly'
    ];
}
