<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    public function user() { 

        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id')
            ->select('id', 'name');

    }
}
