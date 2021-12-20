<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile">
    <!--begin::Logo-->
    <a href="{{url('/')}}">
        <img alt="Logo" src="{{url('images/LOGO_LIFE.png')}}" class="max-h-30px" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
            <span class="svg-icon svg-icon-xl">
                <img alt="" class="max-h-20px" src="{{url('/images/avatar/default-user.png')}}"/>
            </span>
        </button>
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->

<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Left-->
        <div class="d-none d-lg-flex align-items-center mr-3">
            <!--begin::Logo-->
            <a href="{{url('/')}}" class="mr-20">
                <img alt="Logo" src="{{url('images/LOGO_LIFE.png')}}" class="logo-default max-h-35px" />
            </a>
            <!--end::Logo-->
        </div>
        <!--end::Left-->
        <!--begin::Topbar-->
        <div class="topbar topbar-minimize">
            <!--begin::Trợ giúp-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item mr-3" data-toggle="dropdown" data-offset="0px,0px">
                    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <span class="text-dark-50 text-uppercase font-weight-bolder font-size-base d-none d-md-inline mr-3">Trợ giúp</span>
                        <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                            <span class="symbol-label font-size-h5">
                                <i class="flaticon2-group max-h-35px"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center p-5 rounded-top"></div>
                    <div class="separator separator-solid"></div>
                    <!--end::Header-->
                    <!--begin::Nav-->
                    <div class="navi navi-spacer-x-0 pt-5">
                        <a href="{{url('/DanhSachHoTro')}}" class="navi-item px-8">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-group text-success"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">Hỗ trợ</div>
                                    <div class="text-muted">Danh sách cán bộ hỗ trợ</div>
                                </div>
                            </div>
                        </a>

                        <a href="{{url('/TaiLieuHuongDan')}}" class="navi-item px-8">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon-folder-2 text-success"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">Tài liệu hướng dẫn</div>
                                    <div class="text-muted">Tải tài liệu hướng dẫn về máy</div>
                                </div>
                            </div>
                        </a>

                        <!--begin::Footer-->
                        <div class="navi-separator mt-3"></div>

                        <!--end::Footer-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Trợ giúp-->

            <!--begin::Tài khoản-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <span class="text-dark-50 text-uppercase font-weight-bolder font-size-base d-none d-md-inline mr-3">{{session('admin')->name}}</span>
                        <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                            <span class="symbol-label font-size-h5">
                                <i class="flaticon-avatar max-h-35px"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center p-5 rounded-top"></div>
                    <div class="separator separator-solid"></div>
                    <!--end::Header-->
                    <!--begin::Nav-->
                    <div class="navi navi-spacer-x-0 pt-5">
                        <a href="{{url('/ThongTinTaiKhoan')}}" class="navi-item px-8">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-calendar-3 text-success"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">Tài khoản</div>
                                    <div class="text-muted">Thông tin tài khoản</div>
                                </div>
                            </div>
                        </a>

                        <a href="{{url('/DoiMatKhau')}}" class="navi-item px-8">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon-user-settings text-success"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">Đổi mật khẩu</div>
                                </div>
                            </div>
                        </a>

                        <!--begin::Footer-->
                        <div class="navi-separator mt-3"></div>
                        <div class="navi-footer px-8 py-5">
                            <a href="{{url('/DangXuat')}}" class="btn btn-light-primary font-weight-bold">Đăng xuất</a>
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Tài khoản-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>