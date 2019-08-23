<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable= ['name', 'remarks'];

    public function shops()
    {
        return $this->belongsToMany('App\Shop');
    }

}
