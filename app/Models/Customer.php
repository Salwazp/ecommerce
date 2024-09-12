<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\rellations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'Fname',
        'Lname',
        'gender',
        'date_of_birth',
        'email',
        'phone',
        'profile_icon'

    ];

    public function users(): BelongsTo
    {
        return $this->belongTo(User::class);
    }
    public function sellers() 
    {
        return $this->hasOne(Seller::class);
    }
}
