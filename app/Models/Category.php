<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name'];

    public function tshirtImages(): HasMany
    {
        return $this->hasMany(TshirtImage::class, 'tshirt_images_fk_category_id' ,'tshirt_images_id');
    }
}
