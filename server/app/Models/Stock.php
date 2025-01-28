<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['quantity', 'product_id', 'warehouse_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function warehouses()
    {
        return $this->hasMany(WareHouse::class);
    }
}
