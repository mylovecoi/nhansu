<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHosochucvudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosochucvud', function (Blueprint $table) {
            $table->increments('id');
            $table->string('macanbo', 50);
            $table->string('macvd', 50)->nullable();

            $table->date('ngaytu')->nullable();
            $table->date('ngayden')->nullable();
            $table->string('noidungqd', 255)->nullable();
            $table->string('soqd', 50)->nullable();
            $table->string('ngayqd')->nullable();
            $table->string('nguoiky')->nullable();
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
        Schema::drop('hosochucvud');
    }
}
