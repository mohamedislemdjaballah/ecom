<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['user_id', 'details'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
