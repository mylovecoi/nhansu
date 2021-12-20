<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHosocanboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosocanbo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('macanbo', 50)->unique();
            $table->string('mapb', 50)->nullable();
            $table->string('macvcq', 50)->nullable();
            $table->string('macvd', 50)->nullable();
            $table->string('anh', 150)->nullable();
            $table->string('macongchuc', 50)->nullable();
            $table->string('sunghiep', 100)->nullable();
            $table->string('tencanbo', 50)->nullable();
            $table->string('tenkhac', 50)->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('gioitinh', 10)->nullable();
            $table->string('nsxa', 50)->nullable();
            $table->string('nshuyen', 50)->nullable();
            $table->string('nstinh', 50)->nullable();
            $table->string('qqxa', 50)->nullable();
            $table->string('qqhuyen', 50)->nullable();
            $table->string('qqtinh', 50)->nullable();
            $table->string('dantoc', 20)->nullable();
            $table->string('tongiao', 20)->nullable();
            $table->string('tpgd', 100)->nullable();//thành phần gia đình
            $table->string('hktt')->nullable();
            $table->string('noio')->nullable();
            $table->date('ngaytd')->nullable();
            $table->string('lvtd')->nullable();
            $table->string('cqtd')->nullable();
            $table->date('ngaybn')->nullable();
            $table->date('ngayvao')->nullable();//ngày vào cơ quan làm việc
            $table->string('cvcn', 50)->nullable();//chức vụ cao nhất đảm nhiệm
            $table->string('lvhd')->nullable();//lĩnh vực hoạt động
            $table->string('nguontd')->nullable();
            $table->string('httd', 50)->nullable();//hình thức tuyển dụng
            $table->date('ngaybc')->nullable();
            $table->string('tdgdpt', 20)->nullable();//trình độ giáo dục phổ thông
            $table->string('tdcm')->nullable();//trình độ chuyên môn ------ xem có nên tách bảng hoặc tự động lấy thông tin cao nhất
            $table->string('chuyennganh', 100)->nullable();
            $table->string('noidt', 150)->nullable();
            $table->string('hinhthuc', 100)->nullable();
            $table->string('khoadt', 50)->nullable();
            $table->string('llct', 50)->nullable();//lý luận chính trị
            $table->string('qlnhanuoc', 100)->nullable();
            $table->string('ngoaingu', 30)->nullable();
            $table->string('trinhdonn', 30)->nullable();
            $table->string('trinhdoth', 30)->nullable();
            $table->date('ngayvd')->nullable();
            $table->date('ngayvdct')->nullable();
            $table->string('noikn', 100)->nullable();
            $table->string('ngayctctxh')->nullable();//ngày công tác tổ chức chính trị - xã hội - có thể từ .. đến
            $table->string('cvtcxh', 100)->nullable();//chức vụ
            $table->date('ngaynn')->nullable();
            $table->date('ngayxn')->nullable();
            $table->string('qhcn', 50)->nullable();//quân hàm cao nhất
            $table->string('dhpt', 100)->nullable();//danh hiệu phong tặng
            $table->string('stct', 150)->nullable();//Sở trường công tác
            $table->string('ttsk', 50)->nullable();
            $table->string('chieucao', 20)->nullable();
            $table->string('cannang', 20)->nullable();
            $table->string('nhommau', 20)->nullable();
            $table->string('thuongtat', 100)->nullable();
            $table->string('sothuongtat', 50)->nullable();
            $table->string('thuongbinh', 100)->nullable();
            $table->string('giadinhcs')->nullable();
            $table->string('socmnd', 20)->nullable();
            $table->date('ngaycap')->nullable();
            $table->string('noicap', 100)->nullable();
            $table->text('lichsubt')->nullable();
            $table->text('lichsuct')->nullable();
            $table->text('thannhannn')->nullable();
            $table->text('tnxbt')->nullable();
            $table->string('soBHXH', 30)->nullable();
            $table->date('ngayBHXH')->nullable();
            $table->integer('thangtapsu')->default(0);
            $table->string('sodt', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('sotk', 50)->nullable();
            $table->string('tennganhang', 150)->nullable();
            $table->string('tthn', 100)->nullable();
            $table->boolean('bhtn')->default(1);
            $table->string('madv',50)->nullable();
            //Thông tin lương hiện tại
            $table->string('msngbac', 50)->nullable();
            $table->date('ngaytu')->nullable();
            $table->date('ngayden')->nullable();
            $table->integer('bac')->default(1);
            $table->double('heso')->default(0);
            $table->double('vuotkhung')->default(0);
            $table->double('pthuong')->default(100);

            $table->string('phanloaict')->nullable();
            $table->string('kieuct')->nullable();
            $table->string('tenct')->nullable();
            $table->string('theodoi',5)->default(1)->nullable();
            $table->string('sodinhdanhcanhan')->nullable();
            $table->string('macvcqkn', 50)->nullable();//chức vụ kiêm nhiệm
            $table->date('ngaybonhiemlandau')->nullable();//ngày bổ nhiệm lần đầu chức vụ chính quyền
            $table->date('ngaybonhiemlai')->nullable();//ngày bổ nhiệm lại chức vụ
            $table->string('nhiemky')->nullable();//nhiệm kỳ đối với cán bộ chuyên trách
            $table->string('capchuyenden')->nullable();//cán bộ luân chuyển cấp X, H, T
            $table->double('heso_truythu')->default(0);//sau khi tạo bảng lương -> set = 0;
            $table->string('macapdo')->default(0);//cấp độ bảo mật hồ sơ => lấy trong bảng dmbaomat
            $table->string('macq',50)->nullable();//dùng để cho trường hợp cán bộ thuộc đơn vị cấp trên quản lý mặc định là mã đơn vị
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
        Schema::drop('hosocanbo');
    }
}
