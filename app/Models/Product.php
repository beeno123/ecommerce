<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function productSizes()
    {
        return $this->hasMany(ProductSize::class);
    }
    public function productOptions()
    {
        return $this->hasMany(ProductOption::class);
    }
}
