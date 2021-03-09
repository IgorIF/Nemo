<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilialBranch extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone',
        'metro',
        'prices'
    ];
}
