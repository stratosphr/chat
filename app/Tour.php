<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
