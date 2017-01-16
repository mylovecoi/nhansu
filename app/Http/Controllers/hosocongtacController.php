<?php

namespace App\Http\Controllers;

use App\hosocongtac;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosocongtacController extends Controller
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

            return view('quanly.congtac.index')
                ->with('furl','/nghiepvu/quatrinh/congtac/')
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('pageTitle','Danh sách quá trình công tác trong nước');
        } else
            return view('errors.notlogin');
    }

    function show($macanbo){
        if (Session::has('admin')) {
            $model = hosocongtac::where('macanbo',$macanbo)->get();

            //xem có nên làm giao diện cấp tỉnh, huyện
            if(session('admin')->level=="T" || session('admin')->level=="H"){
                //Có thể thêm combo chọn đơn vị
            }else{
                $m_pb=getPhongBanX();
                $m_cb=getCanBoX();
            }

            return view('quanly.congtac.index')
                ->with('furl','/nghiepvu/quatrinh/congtac/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('pageTitle','Danh sách quá trình công tác trong nước');
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
        $model = new hosocongtac();

        $model->macanbo = $inputs['macanbo'];
        $model->phanloai  = $inputs['phanloai'];
        $model->ngaytu  = $inputs['ngaytu'];
        $model->ngayden  = $inputs['ngayden'];
        $model->linhvuc  = $inputs['linhvuc'];
        $model->noidung  = $inputs['noidung'];

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
        $model = hosocongtac::find($inputs['id']);

        $model->phanloai  = $inputs['phanloai'];
        $model->ngaytu  = $inputs['ngaytu'];
        $model->ngayden  = $inputs['ngayden'];
        $model->linhvuc  = $inputs['linhvuc'];
        $model->noidung  = $inputs['noidung'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosocongtac::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiepvu/quatrinh/congtac/'.$macanbo);
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
        $model = hosocongtac::find($inputs['id']);
        die($model);
    }
}
