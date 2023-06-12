<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['id', 'nif', 'address', 'default_payment_type', 'default_payment_ref'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function tshirtImages(): HasMany
    {
        return $this->hasMany(TshirtImage::class, 'tshirt_images_fk_customer_id', 'tshirt_images_id');
    }
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'orders_fk_customers_id', 'orders_id');
    }
}
