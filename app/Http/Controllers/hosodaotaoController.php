<?php

namespace App\Http\Controllers;

use App\hosodaotao;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosodaotaoController extends Controller
{
    function index(){
        if (Session::has('admin')) {
            //xem có nên làm giao diện cấp tỉnh, huyện
            if(session('admin')->level=="T" || session('admin')->level=="H"){
                //Có thể thêm combo chọn đơn vị
            }else{
                $m_pb=getPhongBanX();
                $m_cb=getCanBoX();
            }

            return view('quanly.daotao.index')
                ->with('furl','/nghiepvu/quatrinh/daotao/')
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('pageTitle','Danh sách quá trình đào tạo');
        } else
            return view('errors.notlogin');
    }

    function show($macanbo){
        if (Session::has('admin')) {
            $model = hosodaotao::where('macanbo',$macanbo)->get();

            //xem có nên làm giao diện cấp tỉnh, huyện
            if(session('admin')->level=="T" || session('admin')->level=="H"){
                //Có thể thêm combo chọn đơn vị
            }else{
                $m_pb=getPhongBanX();
                $m_cb=getCanBoX();
            }

            return view('quanly.daotao.index')
                ->with('furl','/nghiepvu/quatrinh/daotao/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('pageTitle','Danh sách quá trình đào tạo');
        } else
            return view('errors.notlogin');
    }

    function store(Request $request){
        $result = array(
            'status' => 'fail',
            'message' => 'error',
        );
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs = $request->all();
        $model = new hosodaotao();

        $model->macanbo = $inputs['macanbo'];
        $model->phanloai  = $inputs['phanloai'];
        $model->ngaytu  = $inputs['ngaytu'];
        $model->ngayden  = $inputs['ngayden'];
        $model->tencoso  = $inputs['tencoso'];
        $model->chuyennganh  = $inputs['chuyennganh'];
        $model->hinhthuc  = $inputs['hinhthuc'];
        $model->vanbang  = $inputs['vanbang'];
        $model->ghichu  = $inputs['ghichu'];

        $model->save();

        $result['message'] = "Thêm mới thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function update(Request $request){
        $result = array(
            'status' => 'fail',
            'message' => 'error',
        );
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs = $request->all();
        $model = hosodaotao::find($inputs['id']);

        $model->phanloai  = $inputs['phanloai'];
        $model->ngaytu  = $inputs['ngaytu'];
        $model->ngayden  = $inputs['ngayden'];
        $model->tencoso  = $inputs['tencoso'];
        $model->chuyennganh  = $inputs['chuyennganh'];
        $model->hinhthuc  = $inputs['hinhthuc'];
        $model->vanbang  = $inputs['vanbang'];
        $model->ghichu  = $inputs['ghichu'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosodaotao::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiepvu/quatrinh/daotao/'.$macanbo);
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
        $model = hosodaotao::find($inputs['id']);
        die($model);
    }
}
