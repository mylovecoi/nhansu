<?php

namespace App\Http\Controllers;

use App\hosokhenthuong;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class hosokhenthuongController extends Controller
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

            return view('quanly.khenthuong.index')
                ->with('furl','/nghiepvu/danhgia/khenthuong/')
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('pageTitle','Danh sách hồ sơ khen thưởng');
        } else
            return view('errors.notlogin');
    }

    function show($macanbo){
        if (Session::has('admin')) {
            $model = hosokhenthuong::where('macanbo',$macanbo)->get();
            //xem có nên làm giao diện cấp tỉnh, huyện
            if(session('admin')->level=="T" || session('admin')->level=="H"){
                //Có thể thêm combo chọn đơn vị
            }else{
                $m_pb=getPhongBanX();
                $m_cb=getCanBoX();
            }

            return view('quanly.khenthuong.index')
                ->with('furl','/nghiepvu/danhgia/khenthuong/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('pageTitle','Danh sách hồ sơ khen thưởng');
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
        $model = new hosokhenthuong();

        $model->macanbo = $inputs['macanbo'];
        $model->ngaythang  = $inputs['ngaythang'];
        $model->hinhthuc  = $inputs['hinhthuc'];
        $model->noidung  = $inputs['noidung'];
        $model->capqd  = $inputs['capqd'];

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
        $model = hosokhenthuong::find($inputs['id']);

        $model->ngaythang  = $inputs['ngaythang'];
        $model->hinhthuc  = $inputs['hinhthuc'];
        $model->noidung  = $inputs['noidung'];
        $model->capqd  = $inputs['capqd'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosokhenthuong::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiepvu/danhgia/khenthuong/'.$macanbo);
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
        $model = hosokhenthuong::find($inputs['id']);
        die($model);
    }
}
