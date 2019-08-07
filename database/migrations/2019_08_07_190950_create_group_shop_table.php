<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_shop', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('group_id')->unsigned()->comment('グループID');
            $table->bigInteger('shop_id')->unsigned()->comment('店舗ID');
            $table->timestamps();

            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('shop_id')->references('id')->on('shops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_shop');
    }
}
