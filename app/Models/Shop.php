<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_ktp_nik',
        'name',
        'url_domain',
        'description',
        'shop_icon',
        'kota',
    ];


    public function sellers(): BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }

    public function products(): hasMany
    {
        return $this->hasMany(products::class);
    }
}