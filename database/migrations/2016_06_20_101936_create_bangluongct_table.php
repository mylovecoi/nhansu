<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBangluongctTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangluong_ct', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mabl', 50)->nullable();
            $table->foreign('mabl')->references('mabl')->on('bangluong')->onUpdate('cascade')->onDelete('cascade');
            $table->string('macvcq', 50)->nullable();
            $table->foreign('macvcq')->references('macvcq')->on('dmchucvucq')->onUpdate('cascade')->onDelete('set null');
            $table->string('mapb', 50)->nullable();
            $table->foreign('mapb')->references('mapb')->on('dmphongban')->onUpdate('cascade')->onDelete('set null');
           // $table->integer('id_nb', 50)->length(10)->unsigned();//tham chiếu bảng ngachbac lấy mã, bậc, hệ số,....
            $table->integer('id_nb', false, true)->length(10)->nullable();//dung cái này do lỗi ->unsigned() tạo 2 khóa chính
            $table->foreign('id_nb')->references('id')->on('ngachbac')->onUpdate('cascade')->onDelete('set null');

            $table->string('msngbac', 50)->nullable();
            $table->string('macanbo', 50)->nullable();
            $table->string('tencanbo', 50)->nullable();
            $table->string('masoms', 50)->nullable();
            $table->double('heso')->default(0);
            $table->double('vuotkhung')->default(0);
            $table->double('pcct')->default(0);
            $table->double('pckct')->default(0);
            $table->double('pck')->default(0);
            $table->double('pccv')->default(0);
            $table->double('pckv')->default(0);
            $table->double('pcth')->default(0);
            $table->double('pcdd')->default(0);
            $table->double('pcdh')->default(0);
            $table->double('pcld')->default(0);
            $table->double('pcdbqh')->default(0);
            $table->double('pcudn')->default(0);
            $table->double('pctn')->default(0);
            $table->double('pctnn')->default(0);
            $table->double('pcdbn')->default(0);
            $table->double('pcvk')->default(0);
            $table->double('pckn')->default(0);
            $table->double('pcdang')->default(0);
            $table->double('pccovu')->default(0);
            $table->double('pclt')->default(0);
            $table->double('pcd')->default(0);
            $table->double('pctr')->default(0);
            $table->double('ptbhxh')->default(0);
            $table->double('ptbhyt')->default(0);
            $table->double('ptkpcd')->default(0);
            $table->double('ptbhtn')->default(0);
            $table->double('tonghs')->default(0);
            $table->double('ttl')->default(0);
            $table->double('giaml')->default(0);
            $table->double('bhct')->default(0);
            $table->double('tluong')->default(0);
            $table->double('stbhxh')->default(0);
            $table->double('stbhyt')->default(0);
            $table->double('stkpcd')->default(0);
            $table->double('stbhtn')->default(0);
            $table->double('ttbh')->default(0);
            $table->double('gttncn')->default(0);
            $table->double('luongtn')->default(0);
            $table->timestamps();
        });
    }

    public function integer($column, $autoIncrement = false, $unsigned = false)
    {
        return $this->addColumn('integer', $column, compact('autoIncrement', 'unsigned'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bangluong_ct');
    }
}
