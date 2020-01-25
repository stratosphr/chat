<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App
 * @mixin Builder
 */
class Order extends Model
{
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
