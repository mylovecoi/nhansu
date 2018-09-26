<?php

namespace App\Http\Controllers;

use App\dmphongban;
use App\hosocanbo;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class dmphongbanController extends Controller
{
    public function index(){
        if (Session::has('admin')) {
            /*
            switch(session('admin')->level){
                case 'H':{
                    $m_pb=dmphongban::where('madv',session('admin')->mahuyen)->orderby('sapxep')->get();
                    break;
                }
                case 'T':{
                    $m_pb=dmphongban::where('madv',session('admin')->matinh)->orderby('sapxep')->get();
                    break;
                }
                default:{
                    $m_pb=dmphongban::where('madv',session('admin')->maxa)->orderby('sapxep')->get();
                    break;
                }
            }
            */
            $m_pb=dmphongban::where('madv',session('admin')->madv)->get();
            return view('system.danhmuc.phongban.index')
                ->with('model',$m_pb)
                ->with('furl','/danh_muc/phong_ban/')
                ->with('pageTitle','Danh mục phòng ban');
        } else
            return view('errors.notlogin');
    }

    function store(Request $request)
    {
        $result = array(
            'status' => 'fail',
            'message' => 'error',
        );
        if (!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }
        $inputs = $request->all();

        $model = new dmphongban();
        $model->mapb = session('admin')->madv .'.'.getdate()[0];
        $model->tenpb = $inputs['tenpb'];
        $model->diengiai = $inputs['diengiai'];
        $model->sapxep = $inputs['sapxep'];
        $model->madv = session('admin')->madv;
        $model->save();

        //Trả lại kết quả
        $result['message'] = 'Thao tác thành công.';
        $result['status'] = 'success';

        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $m_check = hosocanbo::wherein('mapb',function($qr)use($id){
                $qr->select('mapb')->from('dmphongban')->where('id',$id)->get();})->get();
            if(count($m_check)<=0)
            {
                $model = dmphongban::findOrFail($id);
                $model->delete();
            }
            return redirect('/danh_muc/phong_ban/index');
        }else
            return view('errors.notlogin');
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
        $model = dmphongban::where('mapb',$inputs['mapb'])->first();
        $model->tenpb = $inputs['tenpb'];
        $model->diengiai = $inputs['diengiai'];
        $model->sapxep = $inputs['sapxep'];
        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
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
        $model = dmphongban::where('mapb',$inputs['mapb'])->first();
        die($model);
    }
}
