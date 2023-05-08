<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->enum('ws',['yes','no'])->default('yes');
            $table->string('longitud')->nullable();
            $table->string('latitud')->nullable();
            $table->longText('logo')->nullable();
            $table->text('instagram')->nullable();
            $table->longText('notices')->nullable();
            $table->enum('status_notices',['activo','inactivo'])->default('activo');
            $table->enum('status',['activo','inactivo'])->default('activo');
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
        Schema::dropIfExists('entities');
    }
}
