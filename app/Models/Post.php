<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductReview;
class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'title',
        'synopsis',
        'body',
        'image',
        'category',
        ];
        
        public function reviews() {

        return $this->hasMany(\App\Models\ProductReview::class, 'post_id', 'id');

    }
}
