<?php

namespace App\Http\Controllers;

use App\DnDvLt;
use App\DnDvLtReg;
use App\DonViDvVt;
use App\DonViDvVtReg;
use App\GeneralConfigs;
use App\hosocanbo;
use App\Register;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index()
    {
        if (Session::has('admin')) {
            if(session('admin')->username == 'sa')
                return redirect('cau_hinh_he_thong');
            else{
                $model=hosocanbo::join('hosotinhtrangct', 'hosocanbo.macanbo', '=', 'hosotinhtrangct.macanbo')
                    ->select('hosocanbo.macanbo','hosocanbo.tencanbo','hosocanbo.ngaysinh','hosocanbo.gioitinh',
                        'hosotinhtrangct.tenct','hosocanbo.sunghiep','hosocanbo.ngayvd','hosocanbo.ngayden','hosocanbo.msngbac')
                    ->where('hosotinhtrangct.hientai','1')
                    ->where('hosotinhtrangct.phanloaict','Đang công tác')
                    ->where('hosocanbo.madv',session('admin')->maxa)
                    ->get();

                $a_ketqua=array();
                $a_ketqua['congchuc']=$model->where('sunghiep','Công chức')->count();
                $a_ketqua['vienchuc']=$model->where('sunghiep','Viên chức')->count();
                $a_ketqua['tapsu']=$model->where('tenct','Tập sự')->count();
                $a_ketqua['chinhthuc']=$model->count()-$a_ketqua['tapsu'];
                $a_ketqua['dv_nam']=$model->where('ngayvd','','0000-00-00')
                    ->where('ngayvd','<>',null)
                    ->where('gioitinh','Nam')->count();
                $a_ketqua['dv_nu']=$model->where('ngayvd','','0000-00-00')
                    ->where('ngayvd','<>',null)
                    ->where('gioitinh','Nữ')->count();
                $a_ketqua['gt_nam']=$model->where('gioitinh','Nam')->count();
                $a_ketqua['gt_nu']=$model->where('gioitinh','Nữ')->count();

                $date = getdate();
                $gen=getGeneralConfigs();
                foreach ($model as $ct){
                    $dt = date_create($ct->ngaysinh);
                    $ct->thang=date_format($dt,'m');
                    $ct->nam=$ct->gioitinh=='Nam'?date_format($dt,'Y')+$gen['tuoinam']:date_format($dt,'Y')+$gen['tuoinu'];

                    $dt_luong = date_create($ct->ngayden);
                    $ct->nam_luong=date_format($dt_luong,'Y');
                }
                $m_nghihuu= $model->where('nam',$date['year']);
                $m_nangluong = $model->where('nam_luong',$date['year']);
                $m_sinhnhat=$model->where('thang',$date['mon']);
                $m_hettapsu= $model->where('tenct','Hết tập sự');//Chưa làm

                return view('dashboard')
                    ->with('m_nangluong',$m_nangluong)
                    ->with('m_nghihuu',$m_nghihuu)
                    ->with('m_sinhnhat',$m_sinhnhat)
                    ->with('m_hettapsu',$m_hettapsu)
                    ->with('a_ketqua',$a_ketqua)
                    ->with('pageTitle','Tổng quan');
            }

        }else
            return view('welcome');

    }

    public function setting()
    {
        if (Session::has('admin')) {
            if(session('admin')->sadmin == 'ssa')
            {
                $model = GeneralConfigs::first();
                $setting = $model->setting;

                return view('system.general.setting')
                    ->with('setting',json_decode($setting))
                    ->with('pageTitle','Cấu hình chức năng chương trình');
            }

        }else
            return view('welcome');
    }

    public function upsetting(Request $request)
    {
        if (Session::has('admin')) {
            $update = $request->all();

            $model = GeneralConfigs::first();

            $update['roles'] = isset($update['roles']) ? $update['roles'] : null;
            $model->setting = json_encode($update['roles']);
            $model->save();

            return redirect('cau_hinh_he_thong');
        }else
            return view('welcome');
    }

    public function regdvlt(){
        return view('system.register.dvlt.register')
            ->with('pageTitle','Đăng ký thông tin doanh nghiệp cung cấp dịch vụ lưu trú');
    }

    public function regdvltstore(Request $request){
        $input = $request->all();
        $model = new Register();
        $model->tendn = $input['tendn'];
        $model->masothue = $input['masothue'];
        $model->diachidn = $input['diachidn'];
        $model->teldn  = $input['teldn'];
        $model->faxdn = $input['faxdn'];
        $model->email = $input['emaildn'];
        $model->noidknopthue = $input['noidknopthue'];
        $model->giayphepkd = $input['giayphepkd'];
        $model->tailieu = $input['tailieu'];
        $model->username = $input['username'];
        $model->password = md5($input['rpassword']);
        $model->pl = 'DVLT';
        $model->setting = '';
        $model->dvxk = 0;
        $model->dvxb = 0;
        $model->dvxtx = 0;
        $model->dvk = 0;
        $model->save();
        return view('errors.register-success');
    }

    public function regdvvt(){
        return view('system.register.dvvt.register')
            ->with('pageTitle','Đăng ký thông tin doanh nghiệp cung cấp dịch vụ vận tải');
    }

    public function regdvvtstore(Request $request){
        $input = $request->all();
        $model = new Register();

        $model->tendn = $input['tendn'];
        $model->masothue = $input['masothue'];
        $model->diachidn = $input['diachidn'];
        $model->teldn  = $input['teldn'];
        $model->faxdn = $input['faxdn'];
        $model->email = $input['emaildn'];
        $model->noidknopthue = $input['noidknopthue'];
        $model->giayphepkd = $input['giayphepkd'];
        $model->tailieu = $input['tailieu'];
        $model->username = $input['username'];
        $model->password = md5($input['rpassword']);
        $model->pl = 'DVVT';

        $input['roles'] = isset($input['roles']) ? $input['roles'] : null;
        $model->setting = json_encode($input['roles']);
        $x = $input['roles'];
        $model->dvxk = isset($x['dvvt']['vtxk']) ? 1 : 0;
        $model->dvxb = isset($x['dvvt']['vtxb']) ? 1 : 0;
        $model->dvxtx = isset($x['dvvt']['vtxtx']) ? 1 : 0;
        $model->dvk = isset($x['dvvt']['vtch']) ? 1 : 0;

        $model->save();
        return view('errors.register-success');
    }

    public function checkrgmasothue(Request $request){
        $input = $request->all();
        if ($input['pl'] == 'DVLT') {
            $model = DnDvLt::where('masothue', $input['masothue'])
                ->first();
            $modelrg = Register::where('masothue', $input['masothue'])
                ->where('pl','DVLT')
                ->first();
        }elseif($input['pl']=='DVVT'){
            $model = DonViDvVt::where('masothue',$input['masothue'])
                ->first();
            $modelrg = Register::where('masothue',$input['masothue'])
                ->where('pl','DVVT')
                ->first();
        }
        if(isset($model)) {
            echo 'cancel';
        }else{
            if(isset($modelrg)){
                echo 'cancel';
            }else
                echo 'ok';
        }
    }

    public function checkrguser(Request $request){
        $input = $request->all();
        if ($input['pl'] == 'DVLT') {
            $model = User::where('username', $input['user'])
                ->first();
            $modelrg = Register::where('username', $input['user'])
                ->first();
        }elseif($input['pl']=='DVVT'){
            $model = User::where('username', $input['user'])
                ->first();
            $modelrg = Register::where('username', $input['user'])
                ->first();
        }
        if(isset($model)) {
            echo 'cancel';
        }else{
            if(isset($modelrg)){
                echo 'cancel';
            }else
                echo 'ok';
        }
    }

}
