<?php

namespace App\Http\Controllers;

use App\dmdonvi;
use App\GeneralConfigs;
use App\Users;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class dmdonviController extends Controller
{
    public function index(){
        if (Session::has('admin')) {
            $m_pb=dmdonvi::all();
            return view('system.danhmuc.donvi.index')
                ->with('model',$m_pb)
                ->with('pageTitle','Danh mục đơn vị');
        } else
            return view('errors.notlogin');
    }

    public function change($madv){
        if (Session::has('admin')) {
            $model = Users::find(session('admin')->id);
            $model->maxa=$madv;
            $model->save();
            session('admin')->maxa=$madv;
            return redirect('danh_muc/don_vi/index');
        } else
            return view('errors.notlogin');
    }

    public function information_local(){
        if (Session::has('admin')) {
            $model=dmdonvi::where('madv',session('admin')->maxa)->first();
            return view('system.general.local.index')
                ->with('model',$model)
                ->with('url','/he_thong/don_vi/')
                ->with('pageTitle','Thông tin đơn vị');
        } else
            return view('errors.notlogin');
    }

    function edit_local($madv){
        if (Session::has('admin')) {
            if((session('admin')->level=='X'&&session('admin')->maxa==$madv)
                || (session('admin')->level=='T'&&session('admin')->mahuyen==$madv)
                || (session('admin')->level=='H'&&session('admin')->mahuyen==$madv)){
                $model=dmdonvi::where('madv',$madv)->first();
                return view('system.general.local.edit')
                    ->with('model',$model)
                    ->with('url','/he_thong/don_vi/')
                    ->with('pageTitle','Chỉnh sửa thông tin đơn vị');
            }else{return view('errors.noperm');}

        } else
            return view('errors.notlogin');
    }

    function update_local(Request $request, $madv){
        if (Session::has('admin')) {
            if((session('admin')->level=='X'&&session('admin')->maxa==$madv)
                || (session('admin')->level=='T'&&session('admin')->mahuyen==$madv)
                || (session('admin')->level=='H'&&session('admin')->mahuyen==$madv)){
                $inputs=$request->all();

                $model=dmdonvi::where('madv',$madv)->first();
                $model->diachi=$inputs['diachi'];
                $model->sodt=$inputs['sodt'];
                $model->lanhdao=$inputs['lanhdao'];
                $model->diadanh=$inputs['diadanh'];
                $model->cdlanhdao=$inputs['cdlanhdao'];
                $model->nguoilapbieu=$inputs['nguoilapbieu'];
                $model->khoiphongban=$inputs['khoiphongban'];
                $model->diadanh=$inputs['diadanh'];
                $model->save();
                return redirect('/he_thong/don_vi/don_vi');
            }else{return view('errors.noperm');}

        } else
            return view('errors.notlogin');
    }

    function information_global(){
        if (Session::has('admin')) {
            $model=GeneralConfigs::first();
            return view('system.general.global.index')
                ->with('model',$model)
                ->with('url','/he_thong/don_vi/')
                ->with('pageTitle','Thông tin đơn vị');
        } else
            return view('errors.notlogin');
    }

    function edit_global($id){
        if (Session::has('admin')) {
            $model=GeneralConfigs::find($id);
            return view('system.general.global.edit')
                ->with('model',$model)
                ->with('url','/he_thong/don_vi/')
                ->with('pageTitle','Chỉnh sửa thông tin chung');
        } else
            return view('errors.notlogin');
    }

    function update_global(Request $request, $id){
        if (Session::has('admin')) {
            $inputs=$request->all();
            $model=GeneralConfigs::first();
            $model->tuoinam=$inputs['tuoinam'];
            $model->tg_hetts=$inputs['tg_hetts'];
            $model->tuoinu=$inputs['tuoinu'];
            $model->tg_xetnl=$inputs['tg_xetnl'];
            $model->bhxh=$inputs['bhxh'];
            $model->bhxh_dv=$inputs['bhxh_dv'];
            $model->bhyt=$inputs['bhyt'];
            $model->bhyt_dv=$inputs['bhyt_dv'];
            $model->bhtn=$inputs['bhtn'];
            $model->bhtn_dv=$inputs['bhtn_dv'];
            $model->kpcd=$inputs['kpcd'];
            $model->kpcd_dv=$inputs['kpcd_dv'];
            $model->luongcb=$inputs['luongcb'];
            $model->save();
            return redirect('/he_thong/don_vi/chung');

        } else
            return view('errors.notlogin');
    }

    public function information_manage(){
        if (Session::has('admin')) {
            $model=dmdonvi::all();
            return view('system.manage.index')
                ->with('model',$model)
                ->with('url','/he_thong/quan_tri/')
                ->with('pageTitle','Danh mục đơn vị');
        } else
            return view('errors.notlogin');
    }

    public function create_manage(){
        if (Session::has('admin')) {
            $model=dmdonvi::where('level','H')->get();
            return view('system.manage.create')
                ->with('model',$model)
                ->with('url','/he_thong/quan_tri/')
                ->with('pageTitle','Thêm mới đơn vị');
        } else
            return view('errors.notlogin');
    }

    public function store_manage(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();

            $model=new dmdonvi();
            $model->macqcq=$inputs['macqcq'];
            $model->madv=$inputs['madv'];
            $model->tendv=$inputs['tendv'];
            $model->diachi=$inputs['diachi'];
            $model->diadanh=$inputs['diadanh'];
            $model->khoiphongban=$inputs['khoiphongban'];
            $model->diadanh=$inputs['diadanh'];
            $model->save();

            return redirect('/he_thong/quan_tri/don_vi');
        } else
            return view('errors.notlogin');
    }

    public function list_account($madv){
        if (Session::has('admin')) {
            $model_donvi=dmdonvi::where('madv',$madv)->first();
            $model=Users::where('maxa',$madv)->get();
            return view('system.manage.list_account')
                ->with('model',$model)
                ->with('model_donvi',$model_donvi)
                ->with('url','/he_thong/quan_tri/')
                ->with('pageTitle','Danh sách tài khoản người dùng');
        } else
            return view('errors.notlogin');
    }

    public function create_account($madv){
        if (Session::has('admin')) {
            return view('system.manage.create_account')
                ->with('madv',$madv)
                ->with('url','/he_thong/quan_tri/')
                ->with('pageTitle','Thêm mới tài khoản người dùng');
        } else
            return view('errors.notlogin');
    }

    public function store_account(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model=new Users();
            $model->level='X';
            $model->maxa=$inputs['madv'];
            $model->name=$inputs['name'];
            $model->username=$inputs['username'];
            $model->password=md5($inputs['password']);
            $model->phone=$inputs['phone'];
            $model->email=$inputs['email'];
            $model->status=$inputs['status'];
            $model->save();

            return redirect('/he_thong/quan_tri/don_vi/maso='.$inputs['madv']);
        } else
            return view('errors.notlogin');
    }

    public function edit_account($id){
        if (Session::has('admin')) {
            $model=Users::findorfail($id);
            return view('system.manage.edit_account')
                ->with('model',$model)
                ->with('url','/he_thong/quan_tri/')
                ->with('pageTitle','Chỉnh sửa thông tin tài khoản');
        } else
            return view('errors.notlogin');
    }

    public function update_account(Request $request, $id){
        if (Session::has('admin')) {
            $inputs = $request->all();

            $model=Users::findorfail($id);
            $model->name=$inputs['name'];
            $model->username=$inputs['username'];
            $model->password=md5($inputs['newpass']);
            $model->phone=$inputs['phone'];
            $model->email=$inputs['email'];
            $model->status=$inputs['status'];
            $model->save();

            return redirect('/he_thong/quan_tri/don_vi/maso='.$model->maxa);
        } else
            return view('errors.notlogin');
    }

    function destroy_account(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model = Users::findOrFail($inputs['iddelete']);
            $maxa=$model->maxa;
            $model->delete();
            return redirect('/he_thong/quan_tri/don_vi/maso='.$maxa);
        }else
            return view('errors.notlogin');
    }
}
