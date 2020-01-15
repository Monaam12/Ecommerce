<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $table = 'products';

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
