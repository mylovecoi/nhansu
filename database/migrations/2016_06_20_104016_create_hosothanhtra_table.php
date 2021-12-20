<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHosothanhtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosothanhtra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('macanbo', 50);

            $table->date('ngaythang')->nullable();
            $table->string('tenthanhtra', 50)->nullable();
            $table->string('noidung')->nullable();
            $table->string('xeploai', 100)->nullable();
            $table->string('ketluan')->nullable();
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
        Schema::drop('hosothanhtra');
    }
}
