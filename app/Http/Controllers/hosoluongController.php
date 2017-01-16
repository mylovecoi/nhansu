<?php

namespace App\Http\Controllers;

use App\hosoluong;
use App\ngachbac;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosoluongController extends Controller
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

            return view('quanly.luong.index')
                ->with('furl','/nghiepvu/quatrinh/luong/')
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('pageTitle','Danh sách quá trình hưởng lương');
        } else
            return view('errors.notlogin');
    }

    function show($macanbo){
        if (Session::has('admin')) {
            $model = hosoluong::where('macanbo',$macanbo)->get();

            $m_plnb=ngachbac::select('plnb')->distinct()->get();
            //xem có nên làm giao diện cấp tỉnh, huyện
            if(session('admin')->level=="T" || session('admin')->level=="H"){
                //Có thể thêm combo chọn đơn vị
            }else{
                $m_pb=getPhongBanX();
                $m_cb=getCanBoX();
            }
            /*
            $m_nb = ngachbac::all('msngbac','plnb','tennb')->toArray();
            foreach($model as $hs){
                $hs->plnb=getInfoPLNB($hs,$m_nb);
                $hs->tennb=getInfoTenNB($hs,$m_nb);
            }
            */
            return view('quanly.luong.index')
                ->with('furl','/nghiepvu/quatrinh/luong/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('m_plnb',$m_plnb)
                ->with('pageTitle','Danh sách quá trình hưởng lương');
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
        $model = new hosoluong();

        $model->macanbo = $inputs['macanbo'];
        $model->ngaytu  = $inputs['ngaytu'];
        $model->ngayden  = $inputs['ngayden'];
        $model->msngbac  = $inputs['msngbac'];
        $model->bac  = $inputs['bac'];
        $model->heso  = $inputs['heso'];
        $model->vuotkhung  = $inputs['vuotkhung'];
        $model->pthuong  = $inputs['pthuong'];

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
        $model = hosoluong::find($inputs['id']);

        $model->ngaytu  = $inputs['ngaytu'];
        $model->ngayden  = $inputs['ngayden'];
        $model->msngbac  = $inputs['msngbac'];
        $model->bac  = $inputs['bac'];
        $model->heso  = $inputs['heso'];
        $model->vuotkhung  = $inputs['vuotkhung'];
        $model->pthuong  = $inputs['pthuong'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosoluong::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiepvu/quatrinh/luong/'.$macanbo);
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
        $model = hosoluong::find($inputs['id']);
        $m_nb = ngachbac::all('msngbac','plnb','tennb')->toArray();
        $model->plnb=getInfoPLNB($model,$m_nb);
        $model->tennb=getInfoTenNB($model,$m_nb);

        $m_plnb = ngachbac::select('plnb')->distinct()->get();
        $m_tennb = ngachbac::select('tennb')->where('plnb', '=', $model->plnb)->distinct()->get();
        $m_bac = ngachbac::select('bac')->where('msngbac', '=', $model->msngbac)->get();
        //die($model);

        $result['status'] = 'success';

        $result['message'] ='<div class="form-horizontal" id="chitiet">';
        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Từ ngày<span class="require">*</span></label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input type="date" name="ngaytu" id="ngaytu" value="'.$model->ngaytu.'" class="form-control">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Đến ngày</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input type="date" name="ngayden" id="ngayden" value="'.$model->ngayden.'" class="form-control">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Mã ngạch bậc<span class="require">*</span></label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="msngbac" class="form-control" name="msngbac" type="text"  value="'.$model->msngbac.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Nhóm ngạch bậc<span class="require">*</span></label>';
        $result['message'] .='<div class="col-sm-8">';
        $result['message'] .='<select class="form-control" name="plnb" id="plnb" onchange="getPLNB()">';
        foreach($m_plnb as $pl)
            $result['message'] .='<option value="'.$pl->plnb.'" '.($model->plnb==$pl->plnb?'selected':'').'>'.$pl->plnb.'</option>';
        $result['message'] .='</select>';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-sm-4 control-label">Tên ngạch bậc </label>';
        $result['message'] .='<div class="col-sm-8">';
        $result['message'] .='<select name="tennb" id="tennb" class="form-control" onchange="getBac()">';
        foreach($m_tennb as $nb)
            $result['message'] .='<option value="'.$nb->tennb.'" '.($model->tennb==$nb->tennb?'selected':'').'>'.$nb->tennb.'</option>';
        $result['message'] .='</select>';
        $result['message'] .='</div>';
        $result['message'] .='</div>';


        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Bậc lương</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<select name="bac" id="bac" class="form-control" onchange="getHS()">';
        foreach($m_bac as $bac)
            $result['message'] .='<option value="'.$bac->bac.'" '.($model->bac==$bac->bac?'selected':'').'>'.$bac->bac.'</option>';
        $result['message'] .='</select>';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Hệ số lương</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="heso" class="form-control" data-mask="fdecimal" name="heso" type="text" value="'.$model->heso.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Hệ số vượt khung</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="vuotkhung" class="form-control" data-mask="fdecimal" name="vuotkhung" type="text" value="'.$model->vuotkhung.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Phần trăm hưởng lương</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="pthuong" class="form-control" data-mask="fdecimal" name="pthuong" type="text" value="'.$model->pthuong.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';
        $result['message'] .='<input type="hidden" id="id_ct" name="id_ct" value="'.$model->id.'">';
        $result['message'] .='</div>';

        die(json_encode($result));
    }
}
