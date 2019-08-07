<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';

    public function customers()
    {
        return $this->belongsToMany('App\Customer');
    }

}
