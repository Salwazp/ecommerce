<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_code';  // Define custom primary key
    public $incrementing = false;            // Disable auto-increment for string primary key
    protected $keyType = 'string';  

    protected $fillable = [
        'category_code',
        'name'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_code', 'category_code');
    }
}