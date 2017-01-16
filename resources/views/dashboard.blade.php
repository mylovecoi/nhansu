@extends('main')

@section('custom-style')

@stop


@section('custom-script')

@stop

@section('content')

            <!-- BEGIN CONTENT -->
            <h3 class="page-title">
                Màn hình<small> điều khiển và thống kê</small>
            </h3>
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS -->

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat red-intense">
                        <div class="visual">
                            <i class="fa fa-building"></i>
                        </div>
                        <div class="details">
                            <div class="number"></div>
                            <div class="desc">
                                Giá dịch vụ lưu trú<br>

                            </div>
                        </div>
                        <a class="more" href="
                            {{(session('admin')->level == 'T')? url('xet_duyet_ke_khai_dich_vu_luu_tru/'.'thang='.date('m').'&nam='.date('Y').'&pl=cho_nhan')
                            : url('ke_khai_dich_vu_luu_tru/co_so_kinh_doanh')}}">
                            Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat blue-madison">
                        <div class="visual">
                            <i class="fa fa-car"></i>
                        </div>
                        <div class="details">
                            <div class="number"></div>
                            <div class="desc">
                                Giá vận tải xe khách<br>

                            </div>
                        </div>
                        <a class="more" href="
                            {{(session('admin')->level == 'T')? url('/dich_vu_van_tai/dich_vu_xe_khach/xet_duyet/'.'thang='.date('m').'&nam='.date('Y').'&pl=cho_nhan')
                            : url('/dich_vu_van_tai/dich_vu_xe_khach/ke_khai')}}">
                            Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat red-intense">
                        <div class="visual">
                            <i class="fa fa-car"></i>
                        </div>
                        <div class="details">
                            <div class="number"></div>
                            <div class="desc">
                                Giá vận tải xe buýt<br>

                            </div>
                        </div>
                        <a class="more" href="
                            {{(session('admin')->level == 'T')? url('/dich_vu_van_tai/dich_vu_xe_bus/xet_duyet/'.'thang='.date('m').'&nam='.date('Y').'&pl=cho_nhan')
                            : url('/dich_vu_van_tai/dich_vu_xe_bus/ke_khai')}}">
                            Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat purple-plum">
                        <div class="visual">
                            <i class="fa fa-taxi"></i>
                        </div>
                        <div class="details">
                            <div class="number"></div>
                            <div class="desc">
                                Giá vận tải xe taxi<br>

                            </div>
                        </div>
                        <a class="more" href="
                            {{(session('admin')->level == 'T')? url('/dich_vu_van_tai/dich_vu_xe_taxi/xet_duyet/'.'thang='.date('m').'&nam='.date('Y').'&pl=cho_nhan')
                            : url('/dich_vu_van_tai/dich_vu_xe_taxi/ke_khai')}}">
                            Xem chi tiết<i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat blue-madison">
                        <div class="visual">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="details">
                            <div class="number"></div>
                            <div class="desc">
                                Giá vận tải chở hàng

                            </div>
                        </div>
                        <a class="more" href="
                            {{(session('admin')->level == 'T')? url('/dich_vu_van_tai/dich_vu_cho_hang/xet_duyet/'.'thang='.date('m').'&nam='.date('Y').'&pl=cho_nhan')
                            : url('/dich_vu_van_tai/dich_vu_cho_hang/ke_khai')}}">
                            Xem chi tiết<i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="clearfix">
            </div>
        </div>
    </div>

@stop