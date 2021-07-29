<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Trainer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'video'
    ];

    public function filials(): BelongsToMany {
        return $this->belongsToMany(Filial::class);
    }

    public function filialsAlias(): string {
        $result = "";
        foreach ($this->filials as $filial) {
            $result = $result . "$filial->alias ";
        }

        return $result;
    }
}
