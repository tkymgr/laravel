<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_shop', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('shop_id')->unsigned()->comment('店舗ID');
            $table->bigInteger('customer_id')->unsigned()->comment('顧客ID');
            $table->timestamps();

            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_shop');
    }
}
