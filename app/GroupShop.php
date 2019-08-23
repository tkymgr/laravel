<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupShop extends Model
{
    protected $table = 'group_shop';
    protected $fillable = ['group_id', 'shop_id'];
}
