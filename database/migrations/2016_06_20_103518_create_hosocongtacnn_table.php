<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHosocongtacnnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosocongtacnn', function (Blueprint $table) {
            $table->increments('id');
            $table->string('macanbo', 50);

            $table->date('ngaytu');
            $table->date('ngayden');
            $table->string('noidung')->nullable();
            $table->string('doandi')->nullable();
            $table->double('kinhphi')->default(0);
            $table->string('nguonkp')->nullable();
            $table->string('nuoc', 50)->nullable();
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
        Schema::drop('hosocongtacnn');
    }
}
