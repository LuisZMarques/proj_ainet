<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TshirtImage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['customer_id', 'category_id', 'name', 'description', 'image_url', 'extra_info'];


    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customers_id');
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class,'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
