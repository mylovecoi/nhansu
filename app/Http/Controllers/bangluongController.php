<?php

namespace App\Http\Controllers;

use App\bangluong;
use App\bangluong_ct;
use App\bangluongphucap;
use App\dmchucvucq;
use App\dmdonvi;
use App\dmphucap;
use App\hosocanbo;
use App\ngachbac;
use App\phucapdanghuong;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class bangluongController extends Controller
{
    function index(){
        if (Session::has('admin')) {
            $model = bangluong::where('madv',session('admin')->maxa)->get();
            return view('manage.bangluong.index')
                ->with('furl','/chuc_nang/bang_luong/')
                ->with('furl_ajax','/ajax/bang_luong/')
                ->with('model',$model)
                ->with('tendv',getTenDV(session('admin')->maxa))
                ->with('pageTitle','Danh sách bảng lương');
        } else
            return view('errors.notlogin');
    }

    function store(Request $request){
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs=$request->all();
        $mabl=session('admin')->madv .'_'.getdate()[0];

        $ngaytu=$inputs['nam'].'-'.$inputs['thang'].'-01';
        /*
        $m_cb=hosocanbo::where(function($query) use ($ngaytu){
                $query->where('ngaytu','<=',$ngaytu)
                    ->whereNull('ngayden');
                })
                ->orwhere(function($query) use ($ngaytu){
                    $query->where('ngaytu','<=',$ngaytu)
                        ->where('ngayden','>=',$ngaytu);
                })
            ->where('madv',session('admin')->madv)
            ->get();
        */
        $m_cb=hosocanbo::where(function($query) use ($ngaytu){
            $query->where('ngaytu','<=',$ngaytu)
                ->where('ngayden','>=',$ngaytu);
            })->where('madv',session('admin')->madv)
            ->select('macanbo','tencanbo','macvcq','mapb','msngbac','heso','vuotkhung',DB::raw("'".$mabl. "' as mabl"),
            'pck','pccv','pckv','pcth','pcdh','pcld','pcudn','pctn','pctnn','pcdbn','pcvk','pckn','pccovu','pcdbqh')
            ->get();
        $gnr=getGeneralConfigs();

        $model = new bangluong();
        $model->mabl=$mabl;
        $model->madv=session('admin')->madv;
        $model->thang=$inputs['thang'];
        $model->nam=$inputs['nam'];
        $model->noidung=$inputs['noidung'];
        $model->nguoilap=session('admin')->name;
        $model->ngaylap=Carbon::now()->toDateTimeString();
        $model->save();

        /* tính toán bảng lương trường hợp tách phụ cấp
        $m_pc=phucapdanghuong::where(function($query) use ($ngaytu){
            $query->where('ngaytu','<=',$ngaytu)
                ->where('ngayden','>=',$ngaytu);
            })->where('madv',session('admin')->madv)
            ->select('macanbo','mapc','hesopc','baohiem',DB::raw($mabl. ' as mabl'))
            ->get();
        foreach($m_cb as $cb){
            $pc_bh=$m_pc->where('macanbo',$cb->macanbo)->where('baohiem',1)->sum('hesopc');
            $pc_kbh=$m_pc->where('macanbo',$cb->macanbo)->where('baohiem',0)->sum('hesopc');
            $tonghs=$cb->heso+$pc_bh+$pc_kbh;
            $cb->tonghs=$tonghs;
            $cb->ttl=$tonghs*$gnr['luongcb'];

            $nopbaohiem=($pc_kbh+$cb->heso)*$gnr['luongcb'];

            $cb->stbhxh=$nopbaohiem*floatval($gnr['bhxh'])/100;
            $cb->stbhyt=$nopbaohiem*floatval($gnr['bhyt'])/100;
            $cb->stkpcd=$nopbaohiem*floatval($gnr['kpcd'])/100;
            $cb->stbhtn=$nopbaohiem*floatval($gnr['bhtn'])/100;

            $cb->ttbh=$cb->stbhxh+$cb->stbhyt+$cb->stkpcd + $cb->stbhtn;
            $cb->luongtn=$cb->ttl - $cb->ttbh;

            $cb->stbhxh_dv=$nopbaohiem*floatval($gnr['bhxh_dv'])/100;
            $cb->stbhyt_dv=$nopbaohiem*floatval($gnr['bhyt_dv'])/100;
            $cb->stkpcd_dv=$nopbaohiem*floatval($gnr['kpcd_dv'])/100;
            $cb->stbhtn_dv=$nopbaohiem*floatval($gnr['bhtn_dv'])/100;
            $cb->ttbh_dv=$cb->stbhxh_dv + $cb->stbhyt_dv + $cb->stkpcd_dv + $cb->stbhtn_dv;
        }
        bangluong_ct::insert($m_cb->toarray());
        bangluongphucap::insert($m_pc->toarray());
        */

        /*
         foreach($m_cb as $cb){
            $ths=0;
            $m_luongct=new bangluong_ct();
            $m_luongct->mabl=$mabl;
            $m_luongct->macanbo = $cb->macanbo;
            $m_luongct->tencanbo  = $cb->tencanbo;
            $m_luongct->macvcq = $cb->macvcq;
            $m_luongct->mapb = $cb->mapb;
            $m_luongct->msngbac = $cb->msngbac;

            $m_luongct->heso=$cb->heso;
            $ths +=$cb->heso;
            $m_luongct->vuotkhung=$cb->vuotkhung;
            $ths +=$cb->vuotkhung;
            //$phucap=$m_pc->where('macanbo',$cb->macanbo);

            //$m_luongct->pcct=$cb->pcct;
            //$m_luongct->pckct=$cb->pckct;
            $m_luongct->pck=$cb->pck;
            $ths +=$cb->pck;
            $m_luongct->pccv=$cb->pccv;
            $ths +=$cb->pccv;
            $m_luongct->pckv=$cb->pckv;
            $ths +=$cb->pckv;
            $m_luongct->pcth=$cb->pcth;
            $ths +=$cb->pcth;
            //$m_luongct->pcdd=$cb->pcdd;
            $m_luongct->pcdh=$cb->pcdh;
            $ths +=$cb->pcdh;
            $m_luongct->pcld=$cb->pcld;
            $ths +=$cb->pcld;
            //$m_luongct->pcdbqh=$cb->pcdbqh;
            $m_luongct->pcudn=$cb->pcudn;
            $ths +=$cb->pcudn;
            $m_luongct->pctn=$cb->pctn;
            $ths +=$cb->pctn;
            $m_luongct->pctnn=$cb->pctnn;
            $ths +=$cb->pctnn;
            $m_luongct->pcdbn=$cb->pcdbn;
            $ths +=$cb->pcdbn;
            $m_luongct->pcvk=$cb->pcvk;
            $ths +=$cb->pcvk;
            $m_luongct->pckn=$cb->pckn;
            $ths +=$cb->pckn;
            //$m_luongct->pcdang=$cb->pcdang;
            $m_luongct->pccovu=$cb->pccovu;
            //$m_luongct->pclt=$cb->pclt;
            //$m_luongct->pcd=$cb->pcd;
            //$m_luongct->pctr=$cb->pctr;
            $m_luongct->tonghs=$ths;
            $ttl=$gnr['luongcb']*$ths;
            $m_luongct->ttl=$ttl;
               // chưa tính được các loại hệ số pải nộp bh
               //tách bảng phụ cấp riêng ra - liên kết với bảng hosocanbo

            $m_luongct->stbhxh=$ttl*floatval($gnr['bhxh'])/100;
            $m_luongct->stbhyt=$ttl*floatval($gnr['bhyt'])/100;
            $m_luongct->stkpcd=$ttl*floatval($gnr['kpcd'])/100;
            $m_luongct->stbhtn=$ttl*floatval($gnr['bhtn'])/100;
            $tbh=$m_luongct->stbhxh+$m_luongct->stbhyt+$m_luongct->stkpcd + $m_luongct->stbhtn;
            $m_luongct->ttbh=$tbh;
            $m_luongct->luongtn=$ttl-$tbh;

            $m_luongct->stbhxh_dv=$ttl*floatval($gnr['bhxh_dv'])/100;
            $m_luongct->stbhyt_dv=$ttl*floatval($gnr['bhyt_dv'])/100;
            $m_luongct->stkpcd_dv=$ttl*floatval($gnr['kpcd_dv'])/100;
            $m_luongct->stbhtn_dv=$ttl*floatval($gnr['bhtn_dv'])/100;
            $m_luongct->ttbh_dv=$m_luongct->stbhxh_dv + $m_luongct->stbhyt_dv + $m_luongct->stkpcd_dv + $m_luongct->stbhtn_dv;

            $m_luongct->save();

            $cb->tonghs=$tonghs;
        }
         * */

        foreach($m_cb as $cb){
            $ths=0;
            $ths +=$cb->heso;
            $ths +=$cb->vuotkhung;
            $ths +=$cb->pck;
            $ths +=$cb->pccv;
            $ths +=$cb->pckv;
            $ths +=$cb->pcth;
            $ths +=$cb->pcdh;
            $ths +=$cb->pcld;
            $ths +=$cb->pcudn;
            $ths +=$cb->pctn;
            $ths +=$cb->pctnn;
            $ths +=$cb->pcdbn;
            $ths +=$cb->pcvk;
            $ths +=$cb->pckn;
            $ths +=$cb->pccovu;
            $ths +=$cb->pcdbqh;

            $cb->tonghs=$ths;
            $cb->ttl=$gnr['luongcb']*$ths;
            $luongnopbaohiem=$gnr['luongcb']*($cb->heso+$cb->pccv);

               // chưa tính được các loại hệ số pải nộp bh
               //tách bảng phụ cấp riêng ra - liên kết với bảng hosocanbo

            $cb->stbhxh=$luongnopbaohiem*floatval($gnr['bhxh'])/100;
            $cb->stbhyt=$luongnopbaohiem*floatval($gnr['bhyt'])/100;
            $cb->stkpcd=$luongnopbaohiem*floatval($gnr['kpcd'])/100;
            $cb->stbhtn=$luongnopbaohiem*floatval($gnr['bhtn'])/100;
            $cb->ttbh=$cb->stbhxh+$cb->stbhyt+$cb->stkpcd + $cb->stbhtn;
            $cb->luongtn=$cb->ttl - $cb->ttbh;

            $cb->stbhxh_dv=$luongnopbaohiem*floatval($gnr['bhxh_dv'])/100;
            $cb->stbhyt_dv=$luongnopbaohiem*floatval($gnr['bhyt_dv'])/100;
            $cb->stkpcd_dv=$luongnopbaohiem*floatval($gnr['kpcd_dv'])/100;
            $cb->stbhtn_dv=$luongnopbaohiem*floatval($gnr['bhtn_dv'])/100;
            $cb->ttbh_dv=$cb->stbhxh_dv + $cb->stbhyt_dv + $cb->stkpcd_dv + $cb->stbhtn_dv;
        }

        bangluong_ct::insert($m_cb->toarray());
        $result['message'] = '/chuc_nang/bang_luong/maso='.$mabl;
        $result['status'] = 'success';
        die(json_encode($result));
        //return redirect('/chucnang/luong/bangluong/'.$mabl);

    }

    function update(Request $request){
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs=$request->all();
        $model = bangluong::find($inputs['id']);
        $model->thang=$inputs['thang'];
        $model->nam=$inputs['nam'];
        $model->noidung=$inputs['noidung'];
        $model->save();

        $result['message'] = 'Cập nhật thành công.';
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function show($mabl){
        if (Session::has('admin')) {
            $model=DB::table('bangluong_ct')
                ->join('dmchucvucq', 'bangluong_ct.macvcq', '=', 'dmchucvucq.macvcq')
                ->select('bangluong_ct.*', 'dmchucvucq.sapxep')
                ->where('bangluong_ct.mabl',$mabl)
                ->orderby('dmchucvucq.sapxep')
                ->get();
            //$model=$model->orderby('dmchucvucq.sapxep');

            $m_bl=bangluong::select('thang','nam')->where('mabl',$mabl)->first();
            $dmchucvucq=dmchucvucq::all('tencv', 'macvcq')->toArray();

            foreach($model as $hs){
                $hs->tencv=getInfoChucVuCQ($hs,$dmchucvucq);
            }
            return view('manage.bangluong.bangluong')
                ->with('furl','/chuc_nang/bang_luong/')
                ->with('model',$model)

                ->with('m_bl',$m_bl)
                ->with('pageTitle','Bảng lương chi tiết');
        } else
            return view('errors.notlogin');
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = bangluong::find($id);
            $model->delete();
            return redirect('/chuc_nang/bang_luong/danh_sach');
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
        $model = bangluong::find($inputs['id']);
        die($model);
    }

    function detail($mabl){
        if (Session::has('admin')) {
            $model = bangluong_ct::where('mabl',$mabl)->first();

            $m_nb = ngachbac::all('msngbac','plnb','tennb')->toArray();
            $model->plnb = getInfoPLNB($model,$m_nb);
            $model->tennb = getInfoTenNB($model,$m_nb);
            $model->tencanbo = Str::upper($model->tencanbo);

            $model_phucap=bangluongphucap::join('dmphucap','bangluongphucap.mapc','dmphucap.mapc')
                    ->select('bangluongphucap.*','dmphucap.tenpc')
                    ->where('bangluongphucap.macanbo',$model->macanbo)
                    ->where('bangluongphucap.mabl',$model->mabl)
                    ->get();

            $m_plnb = ngachbac::select('plnb')->distinct()->get();
            $m_tennb = ngachbac::select('tennb')->where('plnb', '=', $model->plnb)->distinct()->get();
            $m_bac = ngachbac::select('bac')->where('msngbac', '=', $model->msngbac)->get();
            $m_pc=dmphucap::all('mapc','tenpc','hesopc')->toArray();

            return view('manage.bangluong.chitiet')
                ->with('furl','/chuc_nang/bang_luong/')
                ->with('model',$model)
                ->with('m_plnb',$m_plnb)
                ->with('m_tennb',$m_tennb)
                ->with('model_phucap',$model_phucap)
                ->with('m_bac',$m_bac)
                ->with('m_pc',$m_pc)
                ->with('pageTitle','Chi tiết bảng lương');
        } else
            return view('errors.notlogin');
    }

    function updatect(Request $request, $id){
        if (Session::has('admin')) {
            $inputs=$request->all();
            $inputs['ttl']=getDbl($inputs['ttl']);
            $inputs['giaml']=getDbl($inputs['giaml']);
            $inputs['bhct']=getDbl($inputs['bhct']);
            $inputs['stbhxh']=getDbl($inputs['stbhxh']);
            $inputs['stbhyt']=getDbl($inputs['stbhyt']);
            $inputs['stkpcd']=getDbl($inputs['stkpcd']);
            $inputs['stbhtn']=getDbl($inputs['stbhtn']);
            $inputs['ttbh']=getDbl($inputs['ttbh']);
            $inputs['stbhxh_dv']=getDbl($inputs['stbhxh_dv']);
            $inputs['stbhyt_dv']=getDbl($inputs['stbhyt_dv']);
            $inputs['stkpcd_dv']=getDbl($inputs['stkpcd_dv']);
            $inputs['stbhtn_dv']=getDbl($inputs['stbhtn_dv']);
            $inputs['ttbh_dv']=getDbl($inputs['ttbh_dv']);
            $inputs['luongtn']=getDbl($inputs['luongtn']);
            $model=bangluong_ct::findorfail($id);
            $model->update($inputs);

            /*Trường hợp tách phụ cấp
            $model=bangluong_ct::where('macanbo',$inputs['macanbo'])
                ->where('mabl',$inputs['mabl'])
                ->first();
            $m_pc=bangluongphucap::where('macanbo',$inputs['macanbo'])
                ->where('mabl',$inputs['mabl'])
                ->get();

            $pc_bh=$m_pc->where('macanbo',$model->macanbo)->where('baohiem',1)->sum('hesopc');
            $pc_kbh=$m_pc->where('macanbo',$model->macanbo)->where('baohiem',0)->sum('hesopc');
            $tonghs=$model->heso+$pc_bh+$pc_kbh;

            $model->tonghs=$tonghs;


            $nopbaohiem=($pc_kbh+$model->heso)*$gnr['luongcb'];

            $model->stbhxh=$nopbaohiem*floatval($gnr['bhxh'])/100;
            $model->stbhyt=$nopbaohiem*floatval($gnr['bhyt'])/100;
            $model->stkpcd=$nopbaohiem*floatval($gnr['kpcd'])/100;
            $model->stbhtn=$nopbaohiem*floatval($gnr['bhtn'])/100;

            $model->ttbh=$model->stbhxh+$model->stbhyt+$model->stkpcd + $model->stbhtn;
            $model->luongtn=$model->ttl - $model->ttbh;

            $model->stbhxh_dv=$nopbaohiem*floatval($gnr['bhxh_dv'])/100;
            $model->stbhyt_dv=$nopbaohiem*floatval($gnr['bhyt_dv'])/100;
            $model->stkpcd_dv=$nopbaohiem*floatval($gnr['kpcd_dv'])/100;
            $model->stbhtn_dv=$nopbaohiem*floatval($gnr['bhtn_dv'])/100;
            $model->ttbh_dv=$model->stbhxh_dv + $model->stbhyt_dv + $model->stkpcd_dv + $model->stbhtn_dv;

            $model->heso=$inputs['heso'];
            $model->vuotkhung=$inputs['vuotkhung'];

            $model->giaml=getDbl($inputs['giaml']);
            $model->bhct=getDbl($inputs['bhct']);
            $model->ttl=$tonghs * $gnr['luongcb'];
            $model->luongtn=$tonghs * $gnr['luongcb'] + $model->bhct - $model->giaml - $model->ttbh;

            $model->save();
            */
            return redirect('/chuc_nang/bang_luong/maso='.$model->mabl);


        } else
            return view('errors.notlogin');
    }

    function inbangluong($mabl){
        if (Session::has('admin')) {
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();

            $model=DB::table('bangluong_ct')
                ->join('dmchucvucq', 'bangluong_ct.macvcq', '=', 'dmchucvucq.macvcq')
                ->select('bangluong_ct.*', 'dmchucvucq.sapxep')
                ->where('bangluong_ct.mabl',$mabl)
                ->orderby('dmchucvucq.sapxep')
                ->get();

            $m_bl=bangluong::select('thang','nam')->where('mabl',$mabl)->first();
            $dmchucvucq=dmchucvucq::all('tencv', 'macvcq')->toArray();
            foreach($model as $hs){
                $hs->tencv=getInfoChucVuCQ($hs,$dmchucvucq);
            }
            $thongtin=array('nguoilap'=>session('admin')->name,
                'thang'=>$m_bl->thang,
                'nam'=>$m_bl->nam);
            return view('reports.bangluong.maubangluong')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Bảng lương chi tiết');
        } else
            return view('errors.notlogin');
    }

    function inbaohiem($mabl){
        if (Session::has('admin')) {
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();

            $model=DB::table('bangluong_ct')
                ->join('dmchucvucq', 'bangluong_ct.macvcq', '=', 'dmchucvucq.macvcq')
                ->select('bangluong_ct.*', 'dmchucvucq.sapxep')
                ->where('bangluong_ct.mabl',$mabl)
                ->orderby('dmchucvucq.sapxep')
                ->get();

            $m_bl=bangluong::select('thang','nam')->where('mabl',$mabl)->first();
            $dmchucvucq=dmchucvucq::all('tencv', 'macvcq')->toArray();
            foreach($model as $hs){
                $hs->tencv=getInfoChucVuCQ($hs,$dmchucvucq);
            }
            $thongtin=array('nguoilap'=>session('admin')->name,
                'thang'=>$m_bl->thang,
                'nam'=>$m_bl->nam);
            return view('reports.bangluong.maubaohiem')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Bảng trích nộp bảo hiểm chi tiết');
        } else
            return view('errors.notlogin');
    }

    function phucap(Request $request){
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
        $model=bangluongphucap::where('macanbo',$inputs['macanbo'])
            ->where('mapc',$inputs['mapc'])
            ->where('mabl',$inputs['mabl'])->first();

        if(count($model)>0){
            $model->hesopc = $inputs['hesopc'];
            $model->baohiem =$inputs['baohiem'];
            $model->save();
        }else {
            $model = new bangluongphucap();
            $model->macanbo = $inputs['macanbo'];
            $model->mapc = $inputs['mapc'];
            $model->mabl = $inputs['mabl'];
            $model->hesopc = $inputs['hesopc'];
            $model->baohiem =$inputs['baohiem'];
            $model->save();
        }

        $model =bangluongphucap::join('dmphucap','bangluongphucap.mapc','dmphucap.mapc')
            ->select('bangluongphucap.*','dmphucap.tenpc')
            ->where('bangluongphucap.macanbo',$inputs['macanbo'])
            ->where('bangluongphucap.mabl',$inputs['mabl'])
            ->get();

        $result = $this->return_html($result, $model);

        die(json_encode($result));
    }

    function detroys_phucap(Request $request){
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
        $model = bangluongphucap::findOrFail($inputs['id']);
        $model->delete();
        $model =bangluongphucap::join('dmphucap','bangluongphucap.mapc','dmphucap.mapc')
            ->select('bangluongphucap.*','dmphucap.tenpc')
            ->where('bangluongphucap.macanbo',$inputs['macanbo'])
            ->where('bangluongphucap.mabl',$inputs['mabl'])
            ->get();
        $result = $this->return_html($result, $model);

        die(json_encode($result));
    }

    function get_phucap(Request $request){
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs = $request->all();
        $model = bangluongphucap::find($inputs['id']);
        die($model);
    }

    public function return_html($result, $model)
    {
        $result['message'] = '<div class="col-md-12" id="thongtinphucap">';
        $result['message'] .= '<table class="table table-striped table-bordered table-hover" id="sample_3">';
        $result['message'] .= '<thead>';
        $result['message'] .= '<tr>';
        $result['message'] .= '<th width="5%" style="text-align: center">STT</th>';
        $result['message'] .= '<th class="text-center">Mã số</th>';
        $result['message'] .= '<th class="text-center">Tên phụ cấp</th>';
        $result['message'] .= '<th class="text-center">Hệ số</th>';
        $result['message'] .= '<th class="text-center">Nộp bảo hiểm</th>';
        $result['message'] .= '<th class="text-center">Thao tác</th>';
        $result['message'] .= '</tr>';
        $result['message'] .= '</thead>';

        $stt=1;
        $result['message'] .= '<tbody>';
        if (count($model) > 0) {
            foreach ($model as $key => $ct) {
                $result['message'] .= '<tr>';
                $result['message'] .= '<td style="text-align: center">' . $stt++ . '</td>';
                $result['message'] .= '<td style="text-align: right">' . $ct->mapc . '</td>';
                $result['message'] .= '<td style="text-align: right">' . $ct->tenpc . '</td>';
                $result['message'] .= '<td style="text-align: right">' . $ct->hesopc . '</td>';
                $result['message'] .= '<td style="text-align: right">' . ($ct->baohiem==1?'Có nộp bảo hiểm':'Không nộp bảo hiểm') . '</td>';
                $result['message'] .= '<td>
                                    <button type="button" onclick="edit_phucap('.$ct->id.')" class="btn btn-info btn-xs mbs">
                                        <i class="fa fa-edit"></i>&nbsp;Chỉnh sửa</button>
                                    <button type="button" onclick="del_phucap('.$ct->id.')" class="btn btn-danger btn-xs mbs" data-target="#modal-delete" data-toggle="modal">
                                        <i class="fa fa-trash-o"></i>&nbsp;Xóa</button>
                </td>';
                $result['message'] .= '</tr>';
            }
            $result['message'] .= '</tbody>';
            $result['message'] .= '</table>';
            $result['message'] .= '</div>';
            $result['message'] .= '</div>';
            $result['status'] = 'success';
            return $result;
        }
        return $result;
    }
}
