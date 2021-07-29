<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Filial extends Model
{
    use HasFactory;

    protected $primaryKey = "alias";
    public $incrementing = false;

    protected $fillable = [
        'address',
        'phone',
        'metro',
        'prices',
        'promotion_prices',
        'header',
        'swimNeverNotEarly'
    ];

    public function trainers(): BelongsToMany {
        return $this->belongsToMany(Trainer::class);
    }
}
