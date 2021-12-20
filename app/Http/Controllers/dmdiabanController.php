<?php

namespace App\Http\Controllers;

use App\dmdiaban;
use App\dmdonvi;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class dmdiabanController extends Controller
{
    public function index(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model = dmdiaban::where('capdo', '<>', 'SSA')->get();
            return view('system.danhmuc.diaban.index')
                ->with('model', $model)
                ->with('inputs', $inputs)
                ->with('a_magoc', array_column($model->toarray(), 'tendiaban', 'madiaban'))
                ->with('furl', '/danh_muc/dia_ban/')
                ->with('pageTitle', 'Danh mục địa bàn');
        } else
            return view('errors.notlogin');
    }
    //làm lại hàm kiểm tra
    //trường hợp cập nhật đơn vị cấp tỉnh báo lỗi do kiểm tra trc
    function store(Request $request)
    {
        $inputs = $request->all();
        //2 trường hợp: $inputs['madiaban'] == null
        if ($inputs['capdo'] == 'T') {
            $chk = dmdiaban::where('capdo', 'T')->first();
            if (($chk != null && $inputs['madiaban'] == null) || ($chk != null && $chk->madiaban != $inputs['madiaban'])) {
                return view('errors.403')
                    ->with('url', '/danh_muc/dia_ban/danh_sach')
                    ->with('baoloi', 'Hệ thống chỉ được tạo một đơn vị quản lý cấp độ I');
            }
            //if ($inputs['capdo'] == 'T' && dmdiaban::where('capdo', 'T')->where('madiaban', $inputs['madiaban'])->first() != null) {

        }
        if ($inputs['capdo'] != 'T' && !isset($inputs['magoc'])) {
            return view('errors.403')
                ->with('url', '/danh_muc/dia_ban/danh_sach')
                ->with('baoloi', "'Địa bàn cấp trên' không được bỏ trống");
        }
        $model = dmdiaban::where('madiaban', $inputs['madiaban'])->first();
        if ($model == null) {
            $inputs['madiaban'] = session('admin')->madv . '_' . getdate()[0];
            $inputs['stt'] = chkDbl(dmdiaban::where('capdo', $inputs['capdo'])->max('stt')) + 1;
            dmdiaban::create($inputs);
        } else {
            $model->update($inputs);
        }
        return redirect('/danh_muc/dia_ban/danh_sach');
    }

    //chưa làm
    function destroy(Request $request)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model = dmdiaban::findOrFail($inputs['iddelete']);
            $m_check = dmdonvi::where('madiaban', $model->madiaban)->get();
            if (count($m_check) > 0) {
                return view('errors.403')
                    ->with('url','/danh_muc/dia_ban/danh_sach')
                    ->with('baoloi','Bạn cần xóa hết danh sách đơn vị trong địa bàn: '.$model->tendiaban.' để có thể xóa địa bàn.');
            }
            $model->delete();
            return redirect('/danh_muc/dia_ban/danh_sach');
        } else
            return view('errors.notlogin');
    }

    function getinfo(Request $request){
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs = $request->all();
        $model = dmdiaban::where('madiaban',$inputs['madiaban'])->first();
        die($model);
    }
}
