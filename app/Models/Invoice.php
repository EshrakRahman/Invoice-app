<?php

namespace App\Models;

use App\Enums\InvoiceStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_number',
        'client_id',
        'business_address_id',
        'payment_terms',
        'project_description',
        'status',
    ];

    protected $casts = [
        'status' => InvoiceStatus::class,
        'payment_due' => 'datetime'
    ];

    public function businessAddress(): BelongsTo
    {
        return $this->belongsTo(BusinessAddress::class);
    }

    public function invoiceItems(): HasMany
    {
        return $this->hasMany(InvoiceItem::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
