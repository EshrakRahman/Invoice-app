<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BusinessAddress extends Model
{
    protected $fillable = [
        'street_address',
        'post_code',
        'country'
    ];

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }
}
