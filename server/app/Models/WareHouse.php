<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
    protected $fillable = ['name', 'location', 'stock_id'];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
