<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dmchucvud;
use App\dmdantoc;
use App\dmdonvi;
use App\dmphanloaict;
use App\dmphongban;
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
            //xem có nên làm giao diện cấp tỉnh, huyện
            if(session('admin')->level=="T" || session('admin')->level=="H"){
                $m_hs=hosocanbo::all();
                //Có thể thêm combo chọn đơn vị
            }else{
                //$m_hs=hosocanbo::where('madv',session('admin')->maxa)->get();
                $m_hs=DB::table('hosocanbo')
                    ->join('dmchucvucq', 'hosocanbo.macvcq', '=', 'dmchucvucq.macvcq')
                    ->join('hosotinhtrangct', 'hosocanbo.macanbo', '=', 'hosotinhtrangct.macanbo')
                    ->select('hosocanbo.*', 'dmchucvucq.sapxep')
                    ->where('hosotinhtrangct.hientai','1')
                    ->where('hosotinhtrangct.phanloaict','Đang công tác')
                    ->orderby('dmchucvucq.sapxep')
                    ->get();
            }

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
                ->with('pageTitle','Danh sách cán bộ');
        } else
            return view('errors.notlogin');
    }

    function create(){
        if (Session::has('admin')) {
            $m_dt= dmdantoc::all();
            $m_pb= dmphongban::all();
            $m_cvcq= dmchucvucq::all();
            $m_cvd= dmchucvud::all();
            $m_phanloai=dmphanloaict::select('phanloaict')->get();
            $m_plnb=ngachbac::select('plnb')->distinct()->get();
            return view('manage.hosocanbo.create')
                ->with('type','create')
                ->with('m_dt',$m_dt)
                ->with('m_pb',$m_pb)
                ->with('m_cvcq',$m_cvcq)
                ->with('m_cvd',$m_cvd)
                ->with('m_phanloai',$m_phanloai)
                ->with('m_plnb',$m_plnb)
                ->with('pageTitle','Tạo hồ sơ cán bộ');
        } else
            return view('errors.notlogin');
    }

    function store(Request $request){
        if (Session::has('admin')) {
            $madv=session('admin')->maxa;
            $macanbo=session('admin')->maxa . '.' . getdate()[0];

            //Xử lý file ảnh
            //dd($request->file('anh'));
            $img=$request->file('anh');
            $filename='';
            if(isset($img)) {
                $filename = $macanbo . '.' . $img->getClientOriginalExtension();
                $img->move(public_path() . '/data/uploads/anh/', $filename);
            }

            $insert = $request->all();
            $model = new hosocanbo();
            $model->anh = $filename==''?'':'/data/uploads/anh/'. $filename;
            $model->macanbo = $macanbo;
            $model->madv = $madv;
            $model->mapb = $insert['mapb'];
            $model->macvcq = $insert['macvcq'];
            $model->tencanbo = $insert['tencanbo'];
            $model->tenkhac = $insert['tenkhac'];
            $model->macongchuc = $insert['macongchuc'];
            $model->ngaysinh = $insert['ngaysinh'];
            $model->gioitinh = $insert['gioitinh'];
            $model->dantoc = $insert['dantoc'];
            $model->tongiao = $insert['tongiao'];
            $model->sodt = $insert['sodt'];
            $model->email = $insert['email'];
            $model->socmnd = $insert['socmnd'];
            $model->ngaycap = $insert['ngaycap'];
            $model->noicap = $insert['noicap'];
            $model->nsxa = $insert['nsxa'];
            $model->nshuyen = $insert['nshuyen'];
            $model->nstinh = $insert['nstinh'];
            $model->qqxa = $insert['qqxa'];
            $model->qqhuyen = $insert['qqhuyen'];
            $model->qqtinh = $insert['qqtinh'];
            $model->noio = $insert['noio'];
            $model->hktt = $insert['hktt'];
            $model->ngaytd = $insert['ngaytd'];
            $model->cqtd = $insert['cqtd'];
            $model->httd = $insert['httd'];
            $model->lvtd = $insert['lvtd'];
            $model->cvcn = $insert['cvcn'];
            $model->stct = $insert['stct'];
            $model->ngaybc = $insert['ngaybc'];
            $model->ngayvao = $insert['ngayvao'];
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
            $model->msngbac = $insert['msngbac'];
            $model->bac = $insert['bac'];
            $model->pthuong = $insert['pthuong'];
            $model->heso = $insert['heso'];
            $model->vuotkhung = $insert['vuotkhung'];
            $model->ngaytu = $insert['ngaytu'];
            $model->ngayden = $insert['ngayden'];
            $model->pccv = $insert['pccv'];
            $model->pctnn = $insert['pctnn'];
            $model->pcvk = $insert['pcvk'];
            $model->pckn = $insert['pckn'];
            $model->pctn = $insert['pctn'];
            $model->pckv = $insert['pckv'];
            $model->pcth = $insert['pcth'];
            $model->pcudn = $insert['pcudn'];
            $model->pcdbn = $insert['pcdbn'];
            $model->pcld = $insert['pcld'];
            $model->pcdh = $insert['pcdh'];
            $model->pck = $insert['pck'];
            $model->tthn = $insert['tthn'];
            $model->soBHXH = $insert['soBHXH'];
            $model->sotk = $insert['sotk'];
            $model->tennganhang = $insert['tennganhang'];
            $model->ngayctctxh = $insert['ngayctctxh'];
            $model->cvtcxh = $insert['cvtcxh'];
            $model->ngayvd = $insert['ngayvd'];
            $model->ngayvdct = $insert['ngayvdct'];
            $model->noikn = $insert['noikn'];
            if($insert['macvd'] != 'all'){
                $model->macvd = $insert['macvd'];
            }
            $model->qhcn = $insert['qhcn'];
            $model->dhpt = $insert['dhpt'];
            $model->ttsk = $insert['ttsk'];
            $model->chieucao = $insert['chieucao'];
            $model->cannang = $insert['cannang'];
            $model->nhommau = $insert['nhommau'];

           if($model->save()){
               $m_hsct=new hosotinhtrangct();
               $m_hsct->macanbo = $macanbo;
               $m_hsct->phanloaict = $insert['phanloaict'];
               $m_hsct->kieuct = $insert['kieuct'];
               $m_hsct->tenct = $insert['tenct'];
               $m_hsct->hientai = 1;
               $m_hsct->save();
           }

            return redirect('/nghiepvu/hoso');
        }else
            return view('errors.notlogin');
    }

    function show($id){
        if (Session::has('admin')) {
            $model = hosocanbo::find($id);
            $m_hosoct = hosotinhtrangct::where('macanbo',$model->macanbo)->where('hientai','1')->first();
            $m_dt= dmdantoc::all();
            $m_pb= dmphongban::all();
            $m_cvcq= dmchucvucq::all();
            $m_cvd= dmchucvud::all();
            $m_phanloai=dmphanloaict::select('phanloaict')->get();
            $m_kieuct=dmphanloaict::where('phanloaict',$m_hosoct->phanloaict)->select('kieuct')->get();
            $m_tenct=dmphanloaict::where('phanloaict',$m_hosoct->phanloaict)->where('kieuct',$m_hosoct->kieuct)->select('tenct')->get();

            $m_msnb=ngachbac::select('tennb','plnb')->where('msngbac',$model->msngbac)->first();

            $m_plnb=ngachbac::select('plnb')->distinct()->get();
            $m_pln=ngachbac::where('msngbac',$model->msngbac)->select('tennb')->distinct()->get();
            $m_bac=ngachbac::where('msngbac',$model->msngbac)->select('bac')->distinct()->get();

            //dd($m_hosoct);
            return view('quanly.hosocanbo.edit')
                ->with(compact('model',$model))
                ->with(compact('m_hosoct',$m_hosoct))
                ->with('type','edit')
                ->with('m_dt',$m_dt)
                ->with('m_pb',$m_pb)
                ->with('m_cvcq',$m_cvcq)
                ->with('m_cvd',$m_cvd)
                ->with('m_phanloai',$m_phanloai)
                ->with('m_kieuct',$m_kieuct)
                ->with('m_tenct',$m_tenct)
                ->with('m_plnb',$m_plnb)
                ->with('m_pln',$m_pln)
                ->with('m_msnb',$m_msnb)
                ->with('m_bac',$m_bac)
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
            $model->tencanbo = $update['tencanbo'];
            $model->tenkhac = $update['tenkhac'];
            $model->macongchuc = $update['macongchuc'];
            $model->ngaysinh = $update['ngaysinh'];
            $model->gioitinh = $update['gioitinh'];
            $model->dantoc = $update['dantoc'];
            $model->tongiao = $update['tongiao'];
            $model->sodt = $update['sodt'];
            $model->email = $update['email'];
            $model->socmnd = $update['socmnd'];
            $model->ngaycap = $update['ngaycap'];
            $model->noicap = $update['noicap'];
            $model->nsxa = $update['nsxa'];
            $model->nshuyen = $update['nshuyen'];
            $model->nstinh = $update['nstinh'];
            $model->qqxa = $update['qqxa'];
            $model->qqhuyen = $update['qqhuyen'];
            $model->qqtinh = $update['qqtinh'];
            $model->noio = $update['noio'];
            $model->hktt = $update['hktt'];
            $model->ngaytd = $update['ngaytd'];
            $model->cqtd = $update['cqtd'];
            $model->httd = $update['httd'];
            $model->lvtd = $update['lvtd'];
            $model->cvcn = $update['cvcn'];
            $model->stct = $update['stct'];
            $model->ngaybc = $update['ngaybc'];
            $model->ngayvao = $update['ngayvao'];
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
            $model->msngbac = $update['msngbac'];
            $model->bac = $update['bac'];
            $model->pthuong = $update['pthuong'];
            $model->heso = $update['heso'];
            $model->vuotkhung = $update['vuotkhung'];
            $model->ngaytu = $update['ngaytu'];
            $model->ngayden = $update['ngayden'];
            $model->pccv = $update['pccv'];
            $model->pctnn = $update['pctnn'];
            $model->pcvk = $update['pcvk'];
            $model->pckn = $update['pckn'];
            $model->pctn = $update['pctn'];
            $model->pckv = $update['pckv'];
            $model->pcth = $update['pcth'];
            $model->pcudn = $update['pcudn'];
            $model->pcdbn = $update['pcdbn'];
            $model->pcld = $update['pcld'];
            $model->pcdh = $update['pcdh'];
            $model->pck = $update['pck'];
            $model->tthn = $update['tthn'];
            $model->soBHXH = $update['soBHXH'];
            $model->sotk = $update['sotk'];
            $model->tennganhang = $update['tennganhang'];
            $model->ngayctctxh = $update['ngayctctxh'];
            $model->cvtcxh = $update['cvtcxh'];
            $model->ngayvd = $update['ngayvd'];
            $model->ngayvdct = $update['ngayvdct'];
            $model->noikn = $update['noikn'];
            if($update['macvd']!='all'){
                $model->macvd = $update['macvd'];
            }
            $model->qhcn = $update['qhcn'];
            $model->dhpt = $update['dhpt'];
            $model->ttsk = $update['ttsk'];
            $model->chieucao = $update['chieucao'];
            $model->cannang = $update['cannang'];
            $model->nhommau = $update['nhommau'];

            if($model->save()){
                $m_hsct= hosotinhtrangct::where('macanbo',$model->macanbo)->first();
                    $m_hsct->phanloaict = $update['phanloaict'];
                    $m_hsct->kieuct = $update['kieuct'];
                    $m_hsct->tenct = $update['tenct'];
                $m_hsct->save();
            }

            return redirect('/nghiepvu/hoso');
        }else
            return view('errors.notlogin');
    }

    //<editor-fold desc="Tra cứu">
    function search(){
        if (Session::has('admin')) {

            $m_pb=dmphongban::all('mapb','tenpb');
            $m_dt=dmdantoc::all('dantoc');
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq');

            //dd($m_hs);

            return view('tracuu.hosocanbo.index')
                ->with('m_pb',$m_pb)
                ->with('m_cvcq',$m_cvcq)
                ->with('m_dt',$m_dt)
                ->with('pageTitle','Tra cứu hồ sơ cán bộ');
        } else
            return view('errors.notlogin');
    }

    function result(Request $request){
        if (Session::has('admin')) {
            $_sql="select hosocanbo.id,hosocanbo.macanbo,hosocanbo.tencanbo,hosocanbo.anh,hosocanbo.macvcq,hosocanbo.mapb,hosocanbo.gioitinh,dmchucvucq.sapxep
                   from hosocanbo, dmchucvucq, hosotinhtrangct
                   Where hosocanbo.macanbo=hosotinhtrangct.macanbo and hosocanbo.macvcq=dmchucvucq.macvcq and
                      hosotinhtrangct.hientai='1' and hosotinhtrangct.phanloaict='Đang công tác'";

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

            return view('tracuu.hosocanbo.result')
                ->with('model',$model)
                ->with('pageTitle','Két quả tra cứu hồ sơ cán bộ');
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

            $m_donvi=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);
            return view('baocao.QD02.soyeulylich')
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

            $m_donvi=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($m_congtac);
            return view('baocao.QD02.tomtattieusu')
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

            $m_donvi=dmdonvi::where('madv',session('admin')->maxa)->first();
            $m_donvi->ngaytu=$ngaytu;
            $m_donvi->ngayden=$ngayden;
            //dd($model);
            return view('baocao.QD02.bosunglylich')
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

}
