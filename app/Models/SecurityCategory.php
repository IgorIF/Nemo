<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecurityCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'text'
    ];

    public function securityItems() {
        return $this->hasMany(SecurityItem::class);
    }
}
