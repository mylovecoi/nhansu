<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKkgdvltctdfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kkgdvltctdf', function (Blueprint $table) {
            $table->increments('id');
            $table->string('macskd')->nullable();
            $table->string('maloaip')->nullable();
            $table->string('loaip')->nullable();
            $table->text('qccl')->nullable();
            $table->text('sohieu')->nullable();
            $table->string('ghichu')->nullable();
            $table->string('mucgialk')->nullable();
            $table->string('mucgiakk')->nullable();
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
        Schema::dropIfExists('kkgdvltctdf');
    }
}
