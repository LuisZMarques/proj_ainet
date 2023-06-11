<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongTo;

class Order extends Model
{
    use HasFactory;


    public function orderItems(): HasMany
    {
        return $this->hasMany(orderItem::class, 'order_id');
    }

    public function customer(): BelongTo
    {
        return $this->belongsTo(Customer::class,'orders_fk_customers_id', 'customer_id');
    }

    
}
