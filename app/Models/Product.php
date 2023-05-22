<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // リレーションシップ
    public function reviews() { 

        return $this->hasMany(\App\Models\ProductReview::class, 'product_id', 'id');

    }
}