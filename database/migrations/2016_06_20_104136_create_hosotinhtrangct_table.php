<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHosotinhtrangctTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosotinhtrangct', function (Blueprint $table) {
            $table->increments('id');
            $table->string('macanbo', 50);
            $table->string('maht', 50)->nullable();
            $table->string('mahts', 50)->nullable();

            $table->string('phanloaict', 50)->nullable();
            $table->string('kieuct', 50)->nullable();
            $table->string('tenct', 50)->nullable();
            $table->boolean('hientai')->default(0);
            $table->string('madv', 50)->nullable();
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
        Schema::drop('hosotinhtrangct');
    }
}
