<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Truck
 * @package App
 * @mixin Builder
 */
class Tour extends Model
{
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
