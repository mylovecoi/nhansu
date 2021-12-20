<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHosobaohiemyteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosobaohiemyte', function (Blueprint $table) {
            $table->increments('id');
            $table->string('macanbo', 50);
            $table->date('ngaytu')->nullable();
            $table->date('ngayden')->nullable();
            $table->date('ngaylinhthe')->nullable();
            $table->string('noidangky', 150)->nullable();
            $table->string('sothebh', 50)->nullable();
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
        Schema::drop('hosobaohiemyte');
    }
}
