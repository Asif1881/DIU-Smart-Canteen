<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table="items";
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function cart()
    {
        return $this->hasMany('App\Cart');
    }
}
