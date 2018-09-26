<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dmchucvud;
use App\dmdantoc;
use App\dmdonvi;
use App\dmphanloaict;
use App\dmphongban;
use App\dmphucap;
use App\hosocanbo;
use App\hosochucvu;
use App\hosocongtac;
use App\hosodaotao;
use App\hosokhenthuong;
use App\hosokyluat;
use App\hosollvt;
use App\hosoluong;
use App\hosoquanhegd;
use App\hosotinhtrangct;
use App\ngachbac;
use App\phucapdanghuong;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class hosocanboController extends Controller
{
    function index(){
        if (Session::has('admin')) {
            //$m_hs=hosocanbo::where('madv',session('admin')->maxa)->get();
            /*
            $m_hs=hosocanbo::join('dmchucvucq', 'hosocanbo.macvcq', '=', 'dmchucvucq.macvcq')
                ->select('hosocanbo.*', 'dmchucvucq.sapxep')
                ->where('hosocanbo.theodoi','1')
                ->where('hosocanbo.madv',session('admin')->madv)
                ->orderby('dmchucvucq.sapxep')
                ->get();
            */
            $m_hs=hosocanbo::where('hosocanbo.theodoi','1')
                ->where('hosocanbo.madv',session('admin')->madv)
                ->get();

            $dmphongban=dmphongban::all('mapb','tenpb')->toArray();
            $dmchucvud=dmchucvud::all('tencv', 'macvd')->toArray();
            $dmchucvucq=dmchucvucq::all('tencv', 'macvcq')->toArray();

            foreach($m_hs as $hs){
                $hs->tenpb=getInfoPhongBan($hs,$dmphongban);
                $hs->tencvd=getInfoChucVuD($hs,$dmchucvud);
                $hs->tencvcq=getInfoChucVuCQ($hs,$dmchucvucq);
            }
            //dd($m_hs);

            return view('manage.hosocanbo.index')
                ->with('model',$m_hs)
                ->with('url','/nghiep_vu/ho_so/')
                ->with('tendv',getTenDV(session('admin')->madv))
                ->with('pageTitle','Danh sách cán bộ');
        } else
            return view('errors.notlogin');
    }

    function index_thoicongtac(){
        if (Session::has('admin')) {

            //$m_hs=hosocanbo::where('madv',session('admin')->maxa)->get();
            /*
            $m_hs=hosocanbo::join('dmchucvucq', 'hosocanbo.macvcq', '=', 'dmchucvucq.macvcq')
                ->select('hosocanbo.*', 'dmchucvucq.sapxep')
                ->where('hosocanbo.theodoi','0')
                ->where('hosocanbo.madv',session('admin')->madv)
                ->orderby('dmchucvucq.sapxep')
                ->get();
            */
            $m_hs=hosocanbo::where('hosocanbo.theodoi','0')
                ->where('hosocanbo.madv',session('admin')->madv)
                ->get();

            $dmphongban=dmphongban::all('mapb','tenpb')->toArray();
            $dmchucvud=dmchucvud::all('tencv', 'macvd')->toArray();
            $dmchucvucq=dmchucvucq::all('tencv', 'macvcq')->toArray();

            foreach($m_hs as $hs){
                $hs->tenpb=getInfoPhongBan($hs,$dmphongban);
                $hs->tencvd=getInfoChucVuD($hs,$dmchucvud);
                $hs->tencvcq=getInfoChucVuCQ($hs,$dmchucvucq);
            }
            //dd($m_hs);

            return view('manage.hosocanbo.index_thoicongtac')
                ->with('model',$m_hs)
                ->with('url','/nghiep_vu/ho_so/')
                ->with('tendv',getTenDV(session('admin')->madv))
                ->with('pageTitle','Danh sách cán bộ đã thôi công tác');
        } else
            return view('errors.notlogin');
    }

    function create(){
        if (Session::has('admin')) {
            $makhoipb=getMaKhoiPB(session('admin')->madv);
            $model_kieuct=dmphanloaict::select('kieuct')->distinct()->get();
            $model_tenct=dmphanloaict::select('tenct','kieuct')->get();
            $model_dt=array_column(dmdantoc::select(DB::raw('dantoc as maso'),'dantoc')->get()->toarray(),'dantoc','maso');
            $m_pb= dmphongban::where('madv',session('admin')->madv)->get();
            //$m_pb= dmphongban::all();
            $m_cvcq= dmchucvucq::where('makhoipb',$makhoipb)->get();
            //$m_cvcq= dmchucvucq::where('makhoipb',$makhoipb)->where('madv',session('admin')->madv)->get();
            $m_cvd= dmchucvud::all();
            $m_plnb=ngachbac::select('plnb')->distinct()->get();
            $m_pln=ngachbac::select('tennb','plnb','msngbac')->distinct()->get();
            $m_bac=ngachbac::select('bac')->distinct()->get();

            $macanbo=session('admin')->madv . '_' . getdate()[0];
            $m_pc=dmphucap::all('mapc','tenpc','hesopc')->toArray();

            return view('manage.hosocanbo.create')
                ->with('type','create')
                ->with('model_dt',$model_dt)
                ->with('m_pb',$m_pb)
                ->with('m_cvcq',$m_cvcq)
                ->with('m_cvd',$m_cvd)
                ->with('model_kieuct',$model_kieuct)
                ->with('model_tenct',$model_tenct)
                ->with('m_plnb',$m_plnb)
                ->with('m_pln',$m_pln)
                ->with('m_bac',$m_bac)
                ->with('macanbo',$macanbo)
                ->with('m_pc',$m_pc)
                ->with('pageTitle','Tạo hồ sơ cán bộ');
        } else
            return view('errors.notlogin');
    }

    function store(Request $request){
        if (Session::has('admin')) {
            $insert = $request->all();
            $madv=session('admin')->madv;
            $macanbo=$insert['macanbo'];

            //Xử lý file ảnh
            //dd($request->file('anh'));
            $img=$request->file('anh');
            $filename='';
            if(isset($img)) {
                $filename = $macanbo . '_' . $img->getClientOriginalExtension();
                $img->move(public_path() . '/data/uploads/anh/', $filename);
            }


            $model = new hosocanbo();
            $model->anh = $filename==''?'':'/data/uploads/anh/'. $filename;
            $model->macanbo = $macanbo;
            $model->madv = $madv;
            $model->mapb = $insert['mapb'];
            $model->macvcq = $insert['macvcq'];
            $model->capquanly = $insert['capquanly'];
            $model->tencanbo = $insert['tencanbo'];
            $model->tenkhac = $insert['tenkhac'];
            $model->macongchuc = $insert['macongchuc'];
            $model->ngaysinh = getDateTime($insert['ngaysinh']);
            $model->gioitinh = $insert['gioitinh'];
            $model->dantoc = $insert['dantoc'];
            $model->tongiao = $insert['tongiao'];
            $model->sodt = $insert['sodt'];
            $model->email = $insert['email'];
            $model->socmnd = $insert['socmnd'];
            $model->ngaycap = getDateTime($insert['ngaycap']);
            $model->noicap = $insert['noicap'];
            $model->nsxa = $insert['nsxa'];
            $model->nshuyen = $insert['nshuyen'];
            $model->nstinh = $insert['nstinh'];
            $model->qqxa = $insert['qqxa'];
            $model->qqhuyen = $insert['qqhuyen'];
            $model->qqtinh = $insert['qqtinh'];
            $model->noio = $insert['noio'];
            $model->hktt = $insert['hktt'];
            $model->ngaytd = getDateTime($insert['ngaytd']);
            $model->cqtd = $insert['cqtd'];
            $model->httd = $insert['httd'];
            $model->lvtd = $insert['lvtd'];
            $model->cvcn = $insert['cvcn'];
            $model->stct = $insert['stct'];
            $model->ngaybc = getDateTime($insert['ngaybc']);
            $model->ngayvao = getDateTime($insert['ngayvao']);
            $model->sunghiep = $insert['sunghiep'];
            $model->lvhd = $insert['lvhd'];

            $model->tdcm = $insert['tdcm'];
            $model->chuyennganh = $insert['chuyennganh'];
            $model->hinhthuc = $insert['hinhthuc'];
            $model->noidt = $insert['noidt'];
            $model->tdgdpt = $insert['tdgdpt'];
            $model->trinhdoth = $insert['trinhdoth'];
            $model->ngoaingu = $insert['ngoaingu'];
            $model->trinhdonn = $insert['trinhdonn'];
            $model->llct = $insert['llct'];
            $model->qlnhanuoc = $insert['qlnhanuoc'];

            $model->ngaytu =getDateTime($insert['ngaytu']);
            $model->ngayden = getDateTime($insert['ngayden']);
            $model->msngbac = $insert['msngbac'];
            $model->bac = $insert['bac'];
            $model->pthuong = $insert['pthuong'];
            $model->heso = $insert['heso'];
            $model->vuotkhung = $insert['vuotkhung'];

            $model->pccv = chkDbl($insert['pccv']);
            $model->pctnn = chkDbl($insert['pctnn']);
            $model->pcvk = chkDbl($insert['pcvk']);
            $model->pckn = chkDbl($insert['pckn']);
            $model->pctn = chkDbl($insert['pctn']);
            $model->pckv = chkDbl($insert['pckv']);
            $model->pcth = chkDbl($insert['pcth']);
            $model->pcudn = chkDbl($insert['pcudn']);
            $model->pcdbn = chkDbl($insert['pcdbn']);
            $model->pcld = chkDbl($insert['pcld']);
            $model->pcdh = chkDbl($insert['pcdh']);
            $model->pck = chkDbl($insert['pck']);
            $model->pccovu = chkDbl($insert['pccovu']);
            $model->pcdbqh = chkDbl($insert['pcdbqh']);

            $model->tthn = $insert['tthn'];
            $model->soBHXH = $insert['soBHXH'];
            $model->sotk = $insert['sotk'];
            $model->tennganhang = $insert['tennganhang'];
            $model->ngayctctxh = getDateTime($insert['ngayctctxh']);
            $model->cvtcxh = $insert['cvtcxh'];
            $model->ngayvd = getDateTime($insert['ngayvd']);
            $model->ngayvdct = getDateTime($insert['ngayvdct']);
            $model->noikn = $insert['noikn'];
            if($insert['macvd'] != ''){
                $model->macvd = $insert['macvd'];
            }
            $model->qhcn = $insert['qhcn'];
            $model->dhpt = $insert['dhpt'];
            $model->ttsk = $insert['ttsk'];
            $model->chieucao = $insert['chieucao'];
            $model->cannang = $insert['cannang'];
            $model->nhommau = $insert['nhommau'];
            $model->tenct = $insert['tenct'];

            list($theodoi, $kieuct) = getTheoDoi($insert['tenct']);
            $model->theodoi = $theodoi;
            $model->kieuct = $kieuct;
            $model->save();

            return redirect('nghiep_vu/ho_so/danh_sach');
        }else
            return view('errors.notlogin');
    }

    function show($id){
        if (Session::has('admin')) {
            $makhoipb=getMaKhoiPB(session('admin')->madv);
            $model = hosocanbo::find($id);
            //$m_hosoct = hosotinhtrangct::where('macanbo',$model->macanbo)->where('hientai','1')->first();

            $model_kieuct=dmphanloaict::select('kieuct')->distinct()->get();
            $model_tenct=dmphanloaict::select('tenct','kieuct')->get();
            $model_dt=array_column(dmdantoc::select(DB::raw('dantoc as maso'),'dantoc')->get()->toarray(),'dantoc','maso');
            //$m_pb= dmphongban::where('madv',session('admin')->madv)->get();
            $m_pb= dmphongban::all();
            $m_cvcq= dmchucvucq::where('makhoipb',$makhoipb)->get();
            $m_cvd= dmchucvud::all();
            $m_plnb=ngachbac::select('plnb')->distinct()->get();
            $m_pln=ngachbac::select('tennb','plnb','msngbac')->distinct()->get();
            $m_bac=ngachbac::select('bac')->distinct()->get();
            $m_pc=dmphucap::all('mapc','tenpc','hesopc')->toArray();

            /*
            $model_phucap= phucapdanghuong::join('dmphucap','phucapdanghuong.mapc','dmphucap.mapc')
                ->select('phucapdanghuong.*','dmphucap.tenpc')
                ->where('phucapdanghuong.macanbo',$model->macanbo)->get();
            */

            //dd($m_hosoct);
            return view('manage.hosocanbo.edit')
                ->with(compact('model',$model))
                //->with(compact('m_hosoct',$m_hosoct))
                ->with('type','edit')
                ->with('model_dt',$model_dt)
                ->with('m_pb',$m_pb)
                ->with('m_cvcq',$m_cvcq)
                ->with('m_cvd',$m_cvd)
                ->with('model_kieuct',$model_kieuct)
                ->with('model_tenct',$model_tenct)
                ->with('m_plnb',$m_plnb)
                ->with('m_pln',$m_pln)
                ->with('m_bac',$m_bac)
                ->with('m_pc',$m_pc)
                //->with('model_phucap',$model_phucap)
                ->with('pageTitle','Sửa thông tin hồ sơ cán bộ');
        } else
            return view('errors.notlogin');
    }

    public function update(Request $request, $id)
    {
        if (Session::has('admin')) {
            $update = $request->all();
            $model = hosocanbo::find($id);
            //Xử lý file ảnh
            $img=$request->file('anh');
            $filename='';
            if(isset($img)) {
                //Xóa ảnh cũ
                if(File::exists($model->anh))
                File::Delete($model->anh);

                $filename = $model->macanbo . '.' . $img->getClientOriginalExtension();
                $img->move(public_path() . '/data/uploads/anh/', $filename);
            }

            $model->anh = $filename=='' ? $model->anh : '/data/uploads/anh/'. $filename;
            $model->mapb = $update['mapb'];
            $model->macvcq = $update['macvcq'];
            $model->capquanly = $update['capquanly'];
            $model->tencanbo = $update['tencanbo'];
            $model->tenkhac = $update['tenkhac'];
            $model->macongchuc = $update['macongchuc'];
            $model->ngaysinh = getDateTime($update['ngaysinh']);
            $model->gioitinh = $update['gioitinh'];
            $model->dantoc = $update['dantoc'];
            $model->tongiao = $update['tongiao'];
            $model->sodt = $update['sodt'];
            $model->email = $update['email'];
            $model->socmnd = $update['socmnd'];
            $model->ngaycap = getDateTime($update['ngaycap']);
            $model->noicap = $update['noicap'];
            $model->nsxa = $update['nsxa'];
            $model->nshuyen = $update['nshuyen'];
            $model->nstinh = $update['nstinh'];
            $model->qqxa = $update['qqxa'];
            $model->qqhuyen = $update['qqhuyen'];
            $model->qqtinh = $update['qqtinh'];
            $model->noio = $update['noio'];
            $model->hktt = $update['hktt'];
            $model->ngaytd = getDateTime($update['ngaytd']);
            $model->cqtd = $update['cqtd'];
            $model->httd = $update['httd'];
            $model->lvtd = $update['lvtd'];
            $model->cvcn = $update['cvcn'];
            $model->stct = $update['stct'];
            $model->ngaybc = getDateTime($update['ngaybc']);
            $model->ngayvao = getDateTime($update['ngayvao']);
            $model->sunghiep = $update['sunghiep'];
            $model->lvhd = $update['lvhd'];

            $model->tdcm = $update['tdcm'];
            $model->chuyennganh = $update['chuyennganh'];
            $model->hinhthuc = $update['hinhthuc'];
            $model->noidt = $update['noidt'];
            $model->tdgdpt = $update['tdgdpt'];
            $model->trinhdoth = $update['trinhdoth'];
            $model->ngoaingu = $update['ngoaingu'];
            $model->trinhdonn = $update['trinhdonn'];
            $model->llct = $update['llct'];
            $model->qlnhanuoc = $update['qlnhanuoc'];

            $model->ngaytu = getDateTime($update['ngaytu']);
            $model->ngayden = getDateTime($update['ngayden']);
            $model->msngbac = $update['msngbac'];
            $model->bac = $update['bac'];
            $model->pthuong = $update['pthuong'];
            $model->heso = $update['heso'];
            $model->vuotkhung = $update['vuotkhung'];

            $model->pccv = chkDbl($update['pccv']);
            $model->pctnn = chkDbl($update['pctnn']);
            $model->pcvk = chkDbl($update['pcvk']);
            $model->pckn = chkDbl($update['pckn']);
            $model->pctn = chkDbl($update['pctn']);
            $model->pckv = chkDbl($update['pckv']);
            $model->pcth = chkDbl($update['pcth']);
            $model->pcudn = chkDbl($update['pcudn']);
            $model->pcdbn = chkDbl($update['pcdbn']);
            $model->pcld = chkDbl($update['pcld']);
            $model->pcdh = chkDbl($update['pcdh']);
            $model->pck = chkDbl($update['pck']);
            $model->pccovu = chkDbl($update['pccovu']);
            $model->pcdbqh = chkDbl($update['pcdbqh']);

            $model->tthn = $update['tthn'];
            $model->soBHXH = $update['soBHXH'];
            $model->sotk = $update['sotk'];
            $model->tennganhang = $update['tennganhang'];
            $model->ngayctctxh = getDateTime($update['ngayctctxh']);
            $model->cvtcxh = $update['cvtcxh'];
            $model->ngayvd = getDateTime($update['ngayvd']);
            $model->ngayvdct = getDateTime($update['ngayvdct']);
            $model->noikn = $update['noikn'];
            if($update['macvd'] != ''){
                $model->macvd = $update['macvd'];
            }
            $model->tenct = $update['tenct'];
            list($theodoi, $kieuct) = getTheoDoi($update['tenct']);
            $model->theodoi = $theodoi;
            $model->kieuct = $kieuct;

            $model->qhcn = $update['qhcn'];
            $model->dhpt = $update['dhpt'];
            $model->ttsk = $update['ttsk'];
            $model->chieucao = $update['chieucao'];
            $model->cannang = $update['cannang'];
            $model->nhommau = $update['nhommau'];

            $model->save();

            return redirect('nghiep_vu/ho_so/danh_sach');
        }else
            return view('errors.notlogin');
    }

    //<editor-fold desc="Tra cứu">
    function search(){
        if (Session::has('admin')) {
            $m_pb=dmphongban::all('mapb','tenpb');
            $m_dt=dmdantoc::all('dantoc');
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq');

            return view('search.hosocanbo.index')
                ->with('m_pb',$m_pb)
                ->with('m_cvcq',$m_cvcq)
                ->with('m_dt',$m_dt)
                ->with('pageTitle','Tra cứu hồ sơ cán bộ');
        } else
            return view('errors.notlogin');
    }

    function result(Request $request){
        if (Session::has('admin')) {
            $_sql="select hosocanbo.id,hosocanbo.macanbo,hosocanbo.tencanbo,hosocanbo.anh,hosocanbo.macvcq,hosocanbo.mapb,hosocanbo.gioitinh,dmchucvucq.sapxep,hosocanbo.ngaysinh
                   from hosocanbo, dmchucvucq
                   Where hosocanbo.macvcq=dmchucvucq.macvcq and
                      hosocanbo.theodoi ='1'";

            $inputs=$request->all();
            $s_dk = getConditions($inputs, array('_token'), 'hosocanbo');
            if($s_dk!='') {$_sql .=' and '.$s_dk;}

            $model=DB::select(DB::raw($_sql));

            $m_pb=dmphongban::all('mapb','tenpb')->toArray();
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq')->toArray();

            foreach($model as $hs){
                $hs->tenpb=getInfoPhongBan($hs,$m_pb);
                $hs->tencvcq=getInfoChucVuCQ($hs,$m_cvcq);
            }

            return view('search.hosocanbo.result')
                ->with('model',$model)
                ->with('pageTitle','Kết quả tra cứu hồ sơ cán bộ');
        } else
            return view('errors.notlogin');
    }
    //</editor-fold>

    function syll($id){
        if (Session::has('admin')) {
            $model=hosocanbo::find($id);
            $macanbo=$model->macanbo;
            $m_pb=dmphongban::all('mapb','tenpb')->toArray();
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq')->toArray();
            $m_nb=ngachbac::select('tennb', 'msngbac')->distinct()->get()->toArray();

            $model->tenpb=getInfoPhongBan($model,$m_pb);
            $model->tencvcq=getInfoChucVuCQ($model,$m_cvcq);
            $model->tenviethoa=Str::upper($model->tencanbo);
            $model->tennb=getInfoTenNB($model,$m_nb);

            $m_llvt=hosollvt::where('macanbo',$macanbo)->first();

            $m_daotao=hosodaotao::where('macanbo',$macanbo)->orderby('ngaytu')->get();
            $m_congtac=hosocongtac::where('macanbo',$macanbo)->orderby('ngaytu')->get();
            $m_qhbt=hosoquanhegd::join('dmquanhegd', 'hosoquanhegd.quanhe', '=', 'dmquanhegd.quanhe')
                ->where('hosoquanhegd.macanbo',$macanbo)
                ->where('hosoquanhegd.phanloai','Bản thân')
                ->orderby('dmquanhegd.sapxep')->get();
            $m_qhvc=hosoquanhegd::join('dmquanhegd', 'hosoquanhegd.quanhe', '=', 'dmquanhegd.quanhe')
                ->where('hosoquanhegd.macanbo',$macanbo)
                ->where('hosoquanhegd.phanloai','Vợ chồng')
                ->orderby('dmquanhegd.sapxep')->get();

            $luong=hosoluong::select('ngaytu',DB::raw('CONCAT(msngbac, "/", bac) AS ngachbac'),'heso')->where('macanbo',$macanbo)->orderby('ngaytu')->get()->toarray();

            $thang=array_column($luong,'ngaytu');
            $msngbac=array_column($luong,'ngachbac');
            $heso=array_column($luong,'heso');

            $m_luong=array();
            $m_luong[]=$thang;
            $m_luong[]=$msngbac;
            $m_luong[]=$heso;

            $m_donvi=dmdonvi::where('madv',session('admin')->madv)->first();
            //dd($model);
            return view('reports.QD02.soyeulylich')
                ->with('model',$model)
                ->with('m_llvt',$m_llvt)
                ->with('m_daotao',$m_daotao)
                ->with('m_congtac',$m_congtac)
                ->with('m_qhbt',$m_qhbt)
                ->with('m_qhvc',$m_qhvc)
                ->with('m_luong',$m_luong)
                ->with('m_donvi',$m_donvi)
                ->with('pageTitle','Sơ yếu lý lịch');
        } else
            return view('errors.notlogin');
    }

    function tomtatts($id){
        if (Session::has('admin')) {
            $model=hosocanbo::find($id);
            $macanbo=$model->macanbo;
            $m_pb=dmphongban::all('mapb','tenpb')->toArray();
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq')->toArray();
            $m_nb=ngachbac::select('tennb', 'msngbac')->distinct()->get()->toArray();

            $model->tenpb=getInfoPhongBan($model,$m_pb);
            $model->tencvcq=getInfoChucVuCQ($model,$m_cvcq);
            $model->tenviethoa=Str::upper($model->tencanbo);
            $model->tennb=getInfoTenNB($model,$m_nb);

            $m_llvt=hosollvt::where('macanbo',$macanbo)->first();
            $m_congtac=hosocongtac::where('macanbo',$macanbo)->orderby('ngaytu')->get();

            $m_donvi=dmdonvi::where('madv',session('admin')->madv)->first();
            //dd($m_congtac);
            return view('reports.QD02.tomtattieusu')
                ->with('model',$model)
                ->with('m_llvt',$m_llvt)
                ->with('m_congtac',$m_congtac)
                ->with('m_donvi',$m_donvi)
                ->with('pageTitle','Tóm tắt tiểu sử');
        } else
            return view('errors.notlogin');
    }

    function bsll(Request $request){
        if (Session::has('admin')) {
            $inputs=$request->all();
            $ngaytu=$inputs['ngaytu'];
            $ngayden=$inputs['ngayden'];

            $model=hosocanbo::find($inputs['idct']);
            $macanbo=$model->macanbo;
            $m_pb=dmphongban::all('mapb','tenpb')->toArray();
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq')->toArray();
            $m_nb=ngachbac::select('tennb', 'msngbac')->distinct()->get()->toArray();

            $model->tenpb=getInfoPhongBan($model,$m_pb);
            $model->tencvcq=getInfoChucVuCQ($model,$m_cvcq);
            $model->tenviethoa=Str::upper($model->tencanbo);
            $model->tennb=getInfoTenNB($model,$m_nb);

            $m_cv=hosochucvu::where('macanbo',$macanbo)->where('ngayden','>=',$ngaytu)->get();
            foreach($m_cv as $cv){
                $cv->tencvcq=getInfoChucVuCQ($cv,$m_cvcq);
            }
            //Chỉ lấy bằng cấp nào đã học xong trong khoảng thời gian kết xuất
            $m_daotao=hosodaotao::where('macanbo',$macanbo)->wherebetween('ngayden',array($ngaytu,$ngayden))->orderby('ngaytu')->get();
            $m_kt=hosokhenthuong::where('macanbo',$macanbo)->wherebetween('ngaythang',array($ngaytu,$ngayden))->orderby('ngaythang')->get();
            $m_kl=hosokyluat::where('macanbo',$macanbo)->wherebetween('ngaythang',array($ngaytu,$ngayden))->orderby('ngaythang')->get();

            $m_donvi=dmdonvi::where('madv',session('admin')->madv)->first();
            $m_donvi->ngaytu=$ngaytu;
            $m_donvi->ngayden=$ngayden;
            //dd($model);
            return view('reports.QD02.bosunglylich')
                ->with('model',$model)
                ->with('m_cv',$m_cv)
                ->with('m_daotao',$m_daotao)
                ->with('m_kt',$m_kt)
                ->with('m_kl',$m_kl)
                ->with('m_donvi',$m_donvi)
                ->with('pageTitle','Phiếu bổ sung lý lịch');
        } else
            return view('errors.notlogin');
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosocanbo::find($id);
            $model->delete();
            return redirect('nghiep_vu/ho_so/danh_sach');
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
        $model=phucapdanghuong::where('macanbo',$inputs['macanbo'])->where('mapc',$inputs['mapc'])->first();

        if(count($model)>0){
            $model->ngaytu = $inputs['ngaytu'];
            $model->ngayden = $inputs['ngayden'];
            $model->hesopc = $inputs['hesopc'];
            $model->baohiem =$inputs['baohiem'];
            $model->save();
        }else {
            $model = new phucapdanghuong();
            $model->macanbo = $inputs['macanbo'];
            $model->mapc = $inputs['mapc'];
            $model->ngaytu = $inputs['ngaytu'];
            $model->ngayden = $inputs['ngayden'];
            $model->hesopc = $inputs['hesopc'];
            $model->baohiem =$inputs['baohiem'];
            $model->madv = session('admin')->madv;
            $model->save();
        }
        $model = phucapdanghuong::join('dmphucap','phucapdanghuong.mapc','dmphucap.mapc')
            ->select('phucapdanghuong.*','dmphucap.tenpc')
            ->where('phucapdanghuong.macanbo',$inputs['macanbo'])->get();
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
        $model = phucapdanghuong::findOrFail($inputs['id']);
        $model->delete();
        $model = phucapdanghuong::where('macanbo',$inputs['macanbo'])->get();
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
        $model = phucapdanghuong::find($inputs['id']);
        die($model);
    }

    public function return_html($result, $model)
    {
        $result['message'] = '<div class="col-md-12" id="thongtinphucap">';
        $result['message'] .= '<table class="table table-striped table-bordered table-hover" id="sample_3">';
        $result['message'] .= '<thead>';
        $result['message'] .= '<tr>';
        $result['message'] .= '<th width="5%" style="text-align: center">STT</th>';
        $result['message'] .= '<th class="text-center">Từ ngày</th>';
        $result['message'] .= '<th class="text-center">Đến ngày</th>';
        $result['message'] .= '<th class="text-center">Tên phụ cấp</th>';
        $result['message'] .= '<th class="text-center">Hệ số</th>';
        $result['message'] .= '<th class="text-center">Thao tác</th>';
        $result['message'] .= '</tr>';
        $result['message'] .= '</thead>';

        $stt=1;
        $result['message'] .= '<tbody>';
        if (count($model) > 0) {
            foreach ($model as $key => $ct) {
                $result['message'] .= '<tr>';
                $result['message'] .= '<td style="text-align: center">' . $stt++ . '</td>';
                $result['message'] .= '<td style="text-align: right">' . getDayVn($ct->ngaytu) . '</td>';
                $result['message'] .= '<td style="text-align: right">' . getDayVn($ct->ngayden) . '</td>';
                $result['message'] .= '<td style="text-align: right">' . $ct->tenpc . '</td>';
                $result['message'] .= '<td style="text-align: right">' . $ct->hesopc . '</td>';
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
