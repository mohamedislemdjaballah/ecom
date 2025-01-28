<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    protected $fillable = ['user_id', 'invoices', 'products'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
