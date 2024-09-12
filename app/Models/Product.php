<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $primaryKey = 'product_id'; // Menentukan kolom primary key

    protected $table ="products";
    
    protected $fillable = [
        'shop_id',
        'name',
        'category_code',
        'desc',
        'weight',
        'price',
        'stock',
        'status',
    ];

    public function pictures()
    {
        return $this->hasMany(ProductPicture::class);
    }

    public function shops()
    {
        return $this->belongsTo(Shop::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_code', 'category_code');
    }
}