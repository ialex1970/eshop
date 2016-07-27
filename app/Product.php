<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

    public function scopeActive($query) {
        return $query->where('is_active', 1);
    }
}
