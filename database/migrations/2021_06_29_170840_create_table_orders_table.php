<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('custommer_id');
            $table->integer('status');
            $table->integer('option_id')->nullable();
            $table->bigInteger('amount')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('note')->nullable();
            $table->string('order_code');
            $table->date('order_date');
            
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
        Schema::dropIfExists('orders');
    }
}
