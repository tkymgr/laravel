<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_name')->comment('顧客名字');
            $table->string('first_name')->comment('顧客名前');
            $table->string('last_kana')->comment('顧客名字カナ');
            $table->string('first_kana')->comment('顧客名前カナ');
            $table->enum('status', ['active', 'stop']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
