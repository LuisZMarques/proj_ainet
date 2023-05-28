<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Color extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name'];

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'order_item_fk_color_code');
    }
}
