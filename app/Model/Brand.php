<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //

    protected $guarded = [];

    protected $table = 'brands';

    public function categories()
    {
        return $this->belongsToMany('App\Model\Category', 'brand_category');
    }
}
