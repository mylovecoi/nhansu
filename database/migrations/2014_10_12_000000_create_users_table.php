<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('status');
            $table->string('madv')->nullable();
            //$table->string('level');
            //$table->string('sadmin');
            $table->string('phanquyen')->nullable();
            $table->string('chucnang')->nullable();
            $table->string('manhomtk')->nullable();
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
        Schema::drop('users');
    }
}
