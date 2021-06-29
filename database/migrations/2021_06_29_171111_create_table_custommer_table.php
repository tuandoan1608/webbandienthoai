<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCustommerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custommer', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('firstname');
            $table->integer('phone');
            $table->string('address');
            $table->string('remember_token')->nullable();
            $table->string('code')->nullable();
            $table->timestamp('time_active')->nullable();
            
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
        Schema::dropIfExists('custommer');
    }
}
