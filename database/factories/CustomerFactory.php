<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name, // 顧客名
        'kana' => $faker->kanaName, // 顧客名カナ
        'status' => 'active',
    ];
});
