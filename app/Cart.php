<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $table="cart";
    public function items()
    {
        return $this->belongsTo('App\Item');
    }
}
