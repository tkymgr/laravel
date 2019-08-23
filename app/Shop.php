<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';
    protected $fillable= ['name'];

    public function customers()
    {
        return $this->belongsToMany('App\Customer');
    }

    public function groups()
    {
        return $this->belongsToMany('App\Group');
    }

}
