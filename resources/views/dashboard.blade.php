@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
@stop

@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>

@stop

@section('content')
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS -->
            <div class="row margin-top-10">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <small>SỰ NGHIỆP CÁN BỘ</small>
                            </div>
                            <div class="icon">
                                <i class="icon-pie-chart"></i>
                            </div>
                        </div>
                        <div class="">
                            <li class="list-group-item">Công chức<span
                                        class="badge badge-info pull-right">{{number_format(0)}}</span></li>
                            <li class="list-group-item">Viên chức<span
                                        class="badge badge-info pull-right">{{number_format(0)}}</span></li>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <small>PHÂN LOẠI CÁN BỘ</small>
                            </div>
                            <div class="icon">
                                <i class="icon-pie-chart"></i>
                            </div>
                        </div>
                        <div class="">
                            <li class="list-group-item">Chính thức<span
                                        class="badge badge-info pull-right">{{number_format(0)}}</span></li>
                            <li class="list-group-item">Tập sự<span
                                        class="badge badge-info pull-right">{{number_format(0)}}</span></li>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <small>ĐẢNG VIÊN</small>
                            </div>
                            <div class="icon">
                                <i class="icon-pie-chart"></i>
                            </div>
                        </div>
                        <div class="">
                            <li class="list-group-item">Nam<span
                                        class="badge badge-info pull-right">{{number_format(0)}}</span></li>
                            <li class="list-group-item">Nữ<span
                                        class="badge badge-info pull-right">{{number_format(0)}}</span></li>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <small>GIỚI TÍNH</small>
                            </div>
                            <div class="icon">
                                <i class="icon-pie-chart"></i>
                            </div>
                        </div>
                        <div class="">
                            <li class="list-group-item">Nam<span
                                        class="badge badge-info pull-right">{{number_format(0)}}</span></li>
                            <li class="list-group-item">Nữ<span
                                        class="badge badge-info pull-right">{{number_format(0)}}</span></li>
                        </div>
                    </div>
                </div>

                    <!--div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
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
                    </div-->

                </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font-color hide"></i>
                                <span class="caption-subject theme-font-color bold uppercase">danh sách sắp đến kỳ nâng lương</span>
                            </div>
                            <div class="actions">

                            </div>
                        </div>
                        <div class="portlet-body">
                            <table id="sample_3" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th class="text-center">Họ và tên</th>
                                    <th class="text-center">Mã ngạch</th>
                                    <th class="text-center">Ngày nâng lương</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($m_nangluong))
                                    @foreach($m_nangluong as $key=>$value)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td>{{$value->quanhe}}</td>
                                            <td class="text-center">{{$value->nhom}}</td>
                                            <td class="text-center">{{$value->sapxep}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="odd">
                                        <td class="dataTables_empty" valign="top" colspan="4">Không có thông tin</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
                <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font-color hide"></i>
                                <span class="caption-subject theme-font-color bold uppercase">danh sách sắp đến tuổi nghỉ hưu</span>
                            </div>
                            <div class="actions">

                            </div>
                        </div>
                        <div class="portlet-body">
                            <table id="sample_4" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th class="text-center">Họ và tên</th>
                                    <th class="text-center">Ngày nghỉ hưu</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($m_nghihuu))
                                    @foreach($m_nghihuu as $key=>$value)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td class="text-center">{{$value->nhom}}</td>
                                            <td class="text-center">{{$value->sapxep}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="odd">
                                        <td class="dataTables_empty" valign="top" colspan="3">Không có thông tin</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font-color hide"></i>
                                <span class="caption-subject theme-font-color bold uppercase">danh sách sắp đến sinh nhật</span>
                            </div>
                            <div class="actions">

                            </div>
                        </div>
                        <div class="portlet-body">
                            <table id="sample_5" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th class="text-center">Họ và tên</th>
                                    <th class="text-center">Ngày sinh nhật</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($m_sinhnhat))
                                    @foreach($m_sinhnhat as $key=>$value)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td class="text-center">{{$value->nhom}}</td>
                                            <td class="text-center">{{$value->sapxep}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="odd">
                                        <td class="dataTables_empty" valign="top" colspan="3">Không có thông tin</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
                <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font-color hide"></i>
                                <span class="caption-subject theme-font-color bold uppercase">danh sách sắp đến kỳ xét hết tập sự</span>
                            </div>
                            <div class="actions">

                            </div>
                        </div>
                        <div class="portlet-body">
                            <table id="sample_6" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th class="text-center">Họ và tên</th>
                                    <th class="text-center">Ngày sinh nhật</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($m_hettapsu))
                                    @foreach($m_hettapsu as $key=>$value)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td class="text-center">{{$value->nhom}}</td>
                                            <td class="text-center">{{$value->sapxep}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="odd">
                                        <td class="dataTables_empty" valign="top" colspan="3">Không có thông tin</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
        </div>
    </div>

@stop