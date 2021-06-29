<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->integer('category_id');
            $table->integer('producttype_id');
            $table->string('content')->nullable();
            $table->decimal('price',10,2);
            $table->double('discount')->nullable();
            $table->date('startdate')->nullable();
            $table->date('enddate')->nullable();
            $table->integer('startsale')->nullable();
            $table->integer('status')->nullable();
      
            $table->integer('buyCount');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
