<?php

namespace App\Http\Controllers;

use App\dmbaomat;
use App\dmdonvi;
use App\dmdonvibaocao;
use App\DnDvLt;
use App\DnDvLtReg;
use App\DonViDvVt;
use App\DonViDvVtReg;
use App\GeneralConfigs;
use App\Model\system\dsdonvi;
use App\Register;
use App\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function index($level){
        //nếu tài khoản ssa, sa thì ko kiểm tra
        //kiểm tra xem tài khoản có thể quản lý tài khoản của đơn vị nào
        if (Session::has('admin')) {
            if(session('admin')->level !='SA' && session('admin')->level !='SSA'){
                return view('errors.noperm');
            }
            $a_baomat=array('H'=>'Cấp huyện','T'=>'Cấp tỉnh');
            $model=dmdonvibaocao::where('level',$level)->get();
            return view('system.users.index')
                ->with('model',$model)
                ->with('level',$level)
                ->with('a_baomat',$a_baomat)
                ->with('furl','/danh_muc/tai_khoan/')
                ->with('pageTitle','Danh mục khu vực, địa bàn quản lý');
        } else
            return view('errors.notlogin');
    }

    public function list_users(Request $request){
        if (Session::has('admin')) {
            $inputs=$request->all();

            //Danh sách khu vực địa bàn
            if(isset($inputs['level'])){
                $a_baomat=array('H'=>'Cấp huyện','T'=>'Cấp tỉnh');
                $model=dmdonvibaocao::where('level',$inputs['level'])->get();
                return view('system.users.index')
                    ->with('model',$model)
                    ->with('level',$inputs['level'])
                    ->with('a_baomat',$a_baomat)
                    ->with('furl','/danh_muc/tai_khoan/')
                    ->with('pageTitle','Danh mục khu vực, địa bàn quản lý');
            }

            //Danh sách đơn vị theo địa bàn
            if(isset($inputs['madb'])) {
                $model_donvi = dmdonvi::select('madv', 'tendv')->where('madvbc', $inputs['madb'])->get();
                $madv = $model_donvi->first()->madv;
                $model = Users::where('madv', $madv)->get();

                return view('system.users.index_users')
                    ->with('model', $model)
                    ->with('madv', $madv)
                    ->with('model_donvi', array_column($model_donvi->toarray(), 'tendv', 'madv'))
                    ->with('url', '/danh_muc/tai_khoan/')
                    ->with('pageTitle', 'Danh mục tài khoản sử dụng');
            }

            //Danh sách tài khoản theo đơn vị
            if(isset($inputs['madv'])) {
                $donvi= dmdonvi::where('madv', $inputs['madv'])->first();
                $model_donvi = dmdonvi::select('madv', 'tendv')->where('madvbc', $donvi->madvbc)->get();
                $model = Users::where('madv', $inputs['madv'])->get();
                return view('system.users.index_users')
                    ->with('model', $model)
                    ->with('madv', $inputs['madv'])
                    ->with('model_donvi', array_column($model_donvi->toarray(), 'tendv', 'madv'))
                    ->with('url', '/danh_muc/tai_khoan/')
                    ->with('pageTitle', 'Danh mục tài khoản sử dụng');
            }

            //Chỉnh sửa thông tin người dùng
            if(isset($inputs['username'])) {
                $model = Users::where('username', $inputs['username'])->first();
                return view('system.users.edit')
                    ->with('model', $model)
                    ->with('url', '/danh_muc/tai_khoan/')
                    ->with('pageTitle', 'Danh mục tài khoản sử dụng');
            }

        } else
            return view('errors.notlogin');
    }

    public function create($madv)
    {
        if (Session::has('admin')) {
            return view('system.users.create')
                ->with('madv', $madv)
                ->with('url', '/danh_muc/tai_khoan/')
                ->with('pageTitle', 'Tạo mới tài khoản người dùng');
        } else
            return view('errors.notlogin');
    }

    public function update(Request $request, $id)
    {
        if (Session::has('admin')) {
            $input = $request->all();
            $model = Users::findOrFail($id);
            $model->name = $input['name'];
            $model->phone = $input['phone'];
            $model->email = $input['email'];
            $model->status = $input['status'];
            $model->username = $input['username'];
            if ($input['newpass'] != '')
                $model->password = md5($input['newpass']);
            $model->save();

            return redirect('/danh_muc/tai_khoan/list_user?&madv=' . $model->madv);

        } else {
            return redirect('');
        }
    }

    public function store(Request $request)
    {
        if (Session::has('admin')) {
            $input = $request->all();
            $donvi = dmdonvi::where('madv',$input['madv'])->first();
            $input['maxa']=$donvi->madv;
            $input['level']=$donvi->level;
            $input['password']= md5($input['password']);
            $input['permission']= getPermissionDefault($donvi->level);
            Users::create($input);

            return redirect('/danh_muc/tai_khoan/list_user?&madv=' . $input['madv']);

        } else {
            return redirect('');
        }
    }

    public function login()
    {
        if (Session::has('admin')) {
            Session::flush();
        }
        //return view('system.users.login')
        return view('login')
            ->with('pageTitle', 'Đăng nhập hệ thống');
    }

    public function signin(Request $request)
    {
        $input = $request->all();
        $ttuser = Users::where('username', $input['username'])->first();
        if ($ttuser == null) {
            return view('errors.invalid-user');
        }

        if (md5($input['password']) != $ttuser->password) {
            return view('errors.invalid-pass');
        }

        if ($ttuser->status != "Kích hoạt") {
            return view('errors.lockuser');
        }

        if ($ttuser->level != "SSA") {
            $m_donvi = dmdonvi::where('madv', $ttuser->madv)->first();
            $ttuser->madv = $m_donvi->madv;
            $ttuser->madiaban = $m_donvi->madiaban;
            $ttuser->tendv = $m_donvi->tendv;
            $ttuser->diachi = $m_donvi->diachi;
            $ttuser->lanhdao = $m_donvi->lanhdao;
            $ttuser->songuoi = $m_donvi->songuoi;
            $ttuser->macqcq = $m_donvi->macqcq;
            $ttuser->diadanh = $m_donvi->diadanh;
            $ttuser->cdlanhdao = $m_donvi->cdlanhdao;
            $ttuser->nguoilapbieu = $m_donvi->nguoilapbieu;
            $ttuser->makhoipb = $m_donvi->makhoipb;
            $ttuser->capdo = $m_donvi->capdo;
            $ttuser->madvbc = $m_donvi->madvbc;
        }
        $ttuser->phanquyen = json_decode($ttuser->permission, true);
        $m_gen = GeneralConfigs::first();
        $ttuser->ipf1 = $m_gen->ipf1;
        $ttuser->ipf2 = $m_gen->ipf2;
        $ttuser->ipf3 = $m_gen->ipf3;
        $ttuser->ipf4 = $m_gen->ipf4;
        $ttuser->ipf5 = $m_gen->ipf5;

        Session::put('admin', $ttuser);
        return redirect('')
            ->with('pageTitle', 'Tổng quan');
    }

    public function cp()
    {
        if (Session::has('admin')) {
            return view('system.users.change-pass')
                ->with('pageTitle', 'Thay đổi mật khẩu');
        } else
            return view('errors.notlogin');
    }

    public function cpw(Request $request)
    {
        $update = $request->all();
        $username = session('admin')->username;
        $password = session('admin')->password;
        $newpass2 = $update['newpassword2'];
        $currentPassword = $update['current-password'];

        if (md5($currentPassword) == $password) {
            $ttuser = Users::where('username', $username)->first();
            $ttuser->password = md5($newpass2);
            if ($ttuser->save()) {
                Session::flush();
                return view('errors.changepassword-success');
            }
        } else {
            dd('Mật khẩu cũ không đúng???');
        }
    }

    public function checkpass(Request $request)
    {
        $input = $request->all();
        $passmd5 = md5($input['pass']);

        if (session('admin')->password == $passmd5) {
            echo 'ok';
        } else {
            echo 'cancel';
        }
    }

    public function checkuser(Request $request)
    {
        $input = $request->all();
        $newusser = $input['user'];

        $model = Users::where('username', $newusser)
            ->first();
        if (isset($model)) {
            echo 'cancel';
        } else {
            echo 'ok';
        }
    }

    public function logout()
    {
        if (Session::has('admin')) {
            Session::flush();
            return redirect('/DangNhap');
        } else {
            return redirect('');
        }
    }

    public function edit($id)
    {
        if (Session::has('admin')) {
            $model = Users::findOrFail($id);
            return view('system.users.edit')
                ->with('model', $model)
                ->with('pageTitle', 'Chỉnh sửa thông tin tài khoản');

        } else {
            return redirect('');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($username)
    {//chưa làm
        if (Session::has('admin')) {
            $model = Users::where('username',$username)->first();
            $model->delete();

            return redirect('/danh_muc/tai_khoan/list_user?&madv='.$model->madv);

        } else
            return view('errors.notlogin');
    }

    public function permission($username)
    {
        if (Session::has('admin')) {
            $model = Users::where('username',$username)->first();
            $model_baomat=dmbaomat::select('macapdo','tencapdo','default_val')->where('level',$model->level)->get();
            $permission = json_decode(!empty($model->permission) ? $model->permission : getPermissionDefault($model->level));

            //không dùng trực tiếp view do trường hợp người dùng thêm danh mục bảo mật
            foreach($permission->view as $key=>$value){
                foreach($model_baomat as $baomat){
                    if($baomat->macapdo==$key){
                        $baomat->default_val=$value;
                    }
                }
            }

            return view('system.users.perms')
                ->with('permission', $permission)
                ->with('url', '/danh_muc/tai_khoan/')
                ->with('model', $model)
                ->with('model_baomat', $model_baomat)
                ->with('model', $model)
                ->with('pageTitle', 'Phân quyền cho tài khoản');
        } else
            return view('errors.notlogin');
    }

    public function uppermission(Request $request)
    {
        if (Session::has('admin')) {
            $update = $request->all();
            //dd($request);
            //$id = $request['id'];

            $model = Users::where('username',$update['username'])->first();
            //dd($model);
            if (isset($model)) {
                $update['roles'] = isset($update['roles']) ? $update['roles'] : null;
                $model->permission = json_encode($update['roles']);
                $model->save();

                return redirect('/danh_muc/tai_khoan/list_user?&madv='.$model->madv);

            } else
                dd('Tài khoản không tồn tại');

        } else
            return view('errors.notlogin');
    }

    public function lockuser($id,$pl)
    {

        $arrayid = explode('-', $id);
        foreach ($arrayid as $ids) {
            $model = Users::findOrFail($ids);
            if ($model->status != "Chưa kích hoạt") {
                $model->status = "Vô hiệu";
                $model->save();
            }
        }
        return redirect('users/pl='.$pl);

    }

    public function unlockuser($id,$pl)
    {
        $arrayid = explode('-', $id);
        foreach ($arrayid as $ids) {
            $model = Users::findOrFail($ids);

            if ($model->status != "Chưa kích hoạt") {

                $model->status = "Kích hoạt";
                $model->save();
            }
        }
        return redirect('users/pl='.$pl);

    }
}
