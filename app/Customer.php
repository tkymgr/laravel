<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function getNameAttribute()
    {
        return "{$this->last_name} {$this->first_name}";
    }

}
