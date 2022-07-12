<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pokemon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('nome');
        $table->string('ataque1');
        $table->string('ataque2');
        $table->string('ataque3');
        $table->string('ataque4');
        $table->foreignId('user_id');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon');

    }
}
