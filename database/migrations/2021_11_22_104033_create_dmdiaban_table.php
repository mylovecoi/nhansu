<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDmdiabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dmdiaban', function (Blueprint $table) {
            $table->increments('id');
            $table->string('magoc')->nullable();
            $table->string('madiaban')->unique();
            $table->string('tendiaban')->nullable();
            $table->string('capdo')->nullable();//ADMIN; T; H; X
            $table->string('madv')->nullable();//Đơn vị quản lý toàn địa bàn
            $table->string('stt')->nullable();//Đơn vị quản lý toàn địa bàn
            $table->text('ghichu')->nullable();
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
        Schema::dropIfExists('dmdiaban');
    }
}
