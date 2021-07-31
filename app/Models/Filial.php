<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function pries(): HasMany {
        return $this->hasMany(Price::class, 'filial_alias', 'alias');
    }
}
