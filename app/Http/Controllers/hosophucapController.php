<?php

namespace App\Http\Controllers;

use App\dmphucap;
use App\Http\Requests;
use App\hosophucap;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class hosophucapController extends Controller
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

            return view('quanly.phucap.index')
                ->with('furl','/nghiepvu/quatrinh/phucap/')
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('pageTitle','Danh sách quá trình hưởng phụ cấp');
        } else
            return view('errors.notlogin');
    }

    function show($macanbo){
        if (Session::has('admin')) {
            $model = hosophucap::where('macanbo',$macanbo)->get();

            $m_pc=dmphucap::all('mapc','tenpc','hesopc')->toArray();
            //xem có nên làm giao diện cấp tỉnh, huyện
            if(session('admin')->level=="T" || session('admin')->level=="H"){
                //Có thể thêm combo chọn đơn vị
            }else{
                $m_pb=getPhongBanX();
                $m_cb=getCanBoX();
            }

            foreach($model as $hs){
                $hs->tenpc=getInfoPhuCap($hs,$m_pc);
            }

            return view('quanly.phucap.index')
                ->with('furl','/nghiepvu/quatrinh/phucap/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('m_pc',$m_pc)
                ->with('pageTitle','Danh sách quá trình hưởng phụ cấp');
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
        $model = new hosophucap();

        $model->macanbo = $inputs['macanbo'];
        $model->ngaytu  = $inputs['ngaytu'];
        $model->ngayden  = $inputs['ngayden'];
        $model->mapc  = $inputs['mapc'];
        $model->hesopc  = $inputs['hesopc'];

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
        $model = hosophucap::find($inputs['id']);

        $model->ngaytu  = $inputs['ngaytu'];
        $model->ngayden  = $inputs['ngayden'];
        $model->mapc  = $inputs['mapc'];
        $model->hesopc  = $inputs['hesopc'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosophucap::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiepvu/quatrinh/phucap/'.$macanbo);
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
        $model = hosophucap::find($inputs['id']);
        die($model);
    }
}
