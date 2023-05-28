<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongTo;

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
        return $this->hasMany(OrderItem::class, 'order_items_fk_tshirt_images_id', 'order_items_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsToMany(Category::class, 'tshirt_images_fk_category_id' ,'category_id');
    }
}
