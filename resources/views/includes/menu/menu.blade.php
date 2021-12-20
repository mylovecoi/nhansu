<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
    <div class="container">
        <!--begin::Header Menu-->
        <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">
            <!--begin::Header Nav-->
            <ul class="menu-nav">
{{--                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">--}}
                <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                    <a href="/" class="menu-link">
                        <span class="menu-text">Tổng quan</span>
                    </a>
                </li>

                <li class="menu-item menu-item-submenu menu-item-rel " data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Nghiệp vụ</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="menu-text">Danh sách cán bộ</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="{{url('/nghiep_vu/ho_so/danh_sach')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text">Cán bộ đang công tác</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="{{url('/nghiep_vu/ho_so/thoi_cong_tac')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text">Cán bộ đã thôi công tác</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="menu-text">Quản lý hồ sơ</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                    <ul class="menu-subnav">

                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/quan_ly/tai_lieu/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text">Tài liệu kèm theo</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/quan_ly/quan_he_bt/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text">Quan hệ gia đình (bản thân)</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/quan_ly/quan_he_vc/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text">Quan hệ gia đình (vợ, chồng)</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/quan_ly/dieu_dong/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text">Hồ sơ luân chuyển</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/quan_ly/chuc_vu/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text">Hồ sơ phòng ban, chức vụ</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/quan_ly/bhyt/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text">Theo dõi bảo hiểm y tế</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/quan_ly/llvt/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text">Hồ sơ lực lượng vũ trang</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="menu-text">Quản lý quá trình</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/qua_trinh/dao_tao/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Quản lý quá trình</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/qua_trinh/cong_tac/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Công tác trong nước</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/qua_trinh/cong_tac_nn/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Công tác nước ngoài</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/qua_trinh/luong/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Quá trình hưởng lương</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/qua_trinh/phu_cap/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Quá trình phụ cấp</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="menu-text">Bình bầu, đánh giá</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/danh_gia/binh_bau/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Bình bầu, phân loại</span></a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/danh_gia/khen_thuong/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Khen thưởng</span></a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/danh_gia/ky_luat/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Kỷ luật</span></a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/danh_gia/thanh_tra/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Thanh tra</span></a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('nghiep_vu/danh_gia/nhan_xet/maso=all')}}">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Đánh giá, nhận xét</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Chức năng</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a class="menu-link" href="{{url('chuc_nang/bang_luong/danh_sach')}}">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Bảng lương</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a class="menu-link" href="{{url('chuc_nang/nang_luong/danh_sach')}}">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Nâng lương</span>
                                </a>
                            </li>
                        <!--li>
                            <a href="{{url('chuc_nang/het_tap_su/danh_sach')}}">Hết tập sư</a>
                        </li>

                        <li>
                            <a href="{{url('chuc_nang/dao_tao/danh_sach')}}">Đào tạo, bồi dưỡng</a>
                        </li>
                        <li>
                            <a href="{{url('chuc_nang/thuyen_chuyen/danh_sach')}}">Thuyên chuyển, điều động</a>
                        </li>
                        <li>
                            <a href="{{url('chuc_nang/buoc_thoi_viec/danh_sach')}}">Buộc thôi việc</a>
                        </li>

                        <li>
                            <a href="{{url('chuc_nang/huu_tri/danh_sach')}}">Nghỉ hưu</a>
                        </li-->
                        </ul>
                    </div>
                </li>

                <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Tra cứu</span>
                        <span class="menu-desc"></span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a class="menu-link" href="{{url('/tra_cuu/ho_so')}}">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Hồ sơ cán bộ</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a class="menu-link" href="{{url('/tra_cuu/cong_tac')}}">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Quá trình công tác</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a class="menu-link" href="{{url('/tra_cuu/dao_tao')}}">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Quá trình đào tạo</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a class="menu-link" href="{{url('/tra_cuu/luong')}}">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Quá trình hưởng lương</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a class="menu-link" href="{{url('/tra_cuu/phu_cap')}}">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Quá trình phụ cấp</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Báo cáo</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="menu-text">Báo cáo số liệu</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">

                                    <ul class="menu-subnav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('bao_cao/don_vi')}}">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text">Báo cáo số lượng, chất lượng cán bộ</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('bao_cao/mau_chuan')}}">
                                                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                <span class="menu-text">Báo cáo theo thông tư, quyết định</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- dành cho đơn vị chủ quản -->
                            @if(in_array(session('admin')->level,['T' ,'H']))
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Báo cáo tổng hợp</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a class="menu-link" href="{{url('tong_hop_bao_cao/don_vi')}}">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                    <span class="menu-text">Báo cáo số lượng, chất lượng cán bộ</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a class="menu-link" href="{{url('tong_hop_bao_cao/mau_chuan')}}">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                                    <span class="menu-text">Báo cáo theo thông tư, quyết định</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </li>

                <li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Hệ thống</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu menu-submenu-fixed menu-submenu-center" style="width:900px">
                        <div class="menu-subnav">
                            <ul class="menu-content">
                                <li class="menu-item">
                                    <h3 class="menu-heading menu-toggle">
                                        <span class="menu-text">Danh mục</span>
                                        <i class="menu-arrow"></i>
                                    </h3>
                                    <ul class="menu-inner">
                                        @if(session('admin')->level == 'SA' || session('admin')->level == 'SSA')
                                            <li class="menu-item" aria-haspopup="true">
                                                <a class="menu-link" href="{{url('danh_muc/bao_mat/index?&level=X')}}">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Bảo mật hồ sơ</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a class="menu-link" href="{{url('danh_muc/khoi_pb/ma_so=H')}}">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Khối, phòng ban</span>
                                                </a>
                                            </li>
                                        @endif
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('danh_muc/phong_ban/index')}}">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Phòng ban</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('danh_muc/chuc_vu_cq/index')}}">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Chức vụ chính quyền</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('danh_muc/chuc_vu_d/index')}}">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Chức vụ đảng</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('danh_muc/quan_he_gd/index')}}">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Quan hệ gia đình</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('danh_muc/cong_tac/index')}}">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Phân loại công tác</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('danh_muc/phu_cap/index')}}">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Phụ cấp, trợ cấp</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('danh_muc/dan_toc/index')}}">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Dân tộc </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item">
                                    <h3 class="menu-heading menu-toggle">
                                        <span class="menu-text">Người dùng</span>
                                        <i class="menu-arrow"></i>
                                    </h3>
                                    <ul class="menu-inner">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="{{url('/ThongTinTaiKhoan')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Thông tin chung</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="{{url('/DoiMatKhau')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Đổi mật khẩu</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item">
                                    <h3 class="menu-heading menu-toggle">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Hệ thống</span>
                                        <i class="menu-arrow"></i>
                                    </h3>
                                    <ul class="menu-inner">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('he_thong/don_vi/don_vi')}}">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Thông tin đơn vị</span></a>
                                        </li>
                                        <li class="menu-item" aria-haspopup="true">
                                            <a class="menu-link" href="{{url('he_thong/don_vi/chung')}}">
                                                <i class="menu-bullet menu-bullet-line">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">Thông tin chung</span></a>
                                        </li>

                                        @if(session('admin')->level != 'X')
                                            <li class="menu-item" aria-haspopup="true">
                                                <a class="menu-link" href="{{url('danh_muc/dia_ban/danh_sach')}}">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Danh sách địa bàn</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a class="menu-link" href="{{url('danh_muc/don_vi/danh_sach')}}">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Danh sách đơn vị</span>
                                                </a>
                                            </li>
                                        @endif

                                        @if(session('admin')->level == 'SA' || session('admin')->level == 'SSA')
                                            <li class="menu-item" aria-haspopup="true">
                                                <a class="menu-link" href="{{url('danh_muc/tai_khoan/list_user?level=H')}}">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Quản lý tài khoản</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a class="menu-link" href="{{url('danh_muc/khu_vuc/ma_so=H')}}">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Danh sách khu vực, địa bàn quản lý</span>
                                                </a>
                                            </li>
                                        @endif

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            <!--end::Header Nav-->
        </div>
        <!--end::Header Menu-->
    </div>
</div>
