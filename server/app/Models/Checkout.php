<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [
        'user_id',
        'serial_number',
        'currency',
        'products',
        'amount',
        'discount',
        'discription',
        'address',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
