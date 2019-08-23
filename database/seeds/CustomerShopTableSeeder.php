<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($id = 1; $id <= 10000; $id++) {
            DB::table('customer_shop')->insert([
                'shop_id' => 1,
                'customer_id' => $id,
            ]);
        }
    }
}
