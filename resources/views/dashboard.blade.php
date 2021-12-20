@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/global/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/global/select2/select2.css')}}"/>
@stop

@section('custom-script')
    <script type="text/javascript" src="{{url('assets/plugins/global/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/global/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/global/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>

    <script src="{{url('assets/js/table-managed-class.js')}}"></script>
    <script src="assets/plugins/custom/flot/flot.bundle.js"></script>
    <script>
        function sunghiep() {
            var data = [
                {label: "Công chức", data: '{{number_format($a_ketqua['congchuc'])}}', color:  KTApp.getSettings()['colors']['theme']['base']["success"]},
                {label: "Viên chức", data: '{{number_format($a_ketqua['vienchuc'])}}', color:  KTApp.getSettings()['colors']['theme']['base']["primary"]},
                {label: "Khác", data: '{{number_format($a_ketqua['khac'])}}', color:  KTApp.getSettings()['colors']['theme']['base']["info"]}
            ];

            $.plot($("#kt_flotcharts_1"), data, {
                series: {
                    pie: {
                        show: true
                    }
                }
            });
        }
        function phanloai() {
            var data = [
                {label: "Chính thức", data: '{{number_format($a_ketqua['chinhthuc'])}}', color:  KTApp.getSettings()['colors']['theme']['base']["success"]},
                {label: "Tập sư", data: '{{number_format($a_ketqua['tapsu'])}}', color:  KTApp.getSettings()['colors']['theme']['base']["primary"]},
            ];

            $.plot($("#kt_flotcharts_2"), data, {
                series: {
                    pie: {
                        show: true
                    }
                }
            });
        }
        function dangvien() {
            var data = [
                {label: "Nam", data: '{{number_format($a_ketqua['dv_nam'])}}', color:  KTApp.getSettings()['colors']['theme']['base']["success"]},
                {label: "Nữ", data: '{{number_format($a_ketqua['dv_nu'])}}', color:  KTApp.getSettings()['colors']['theme']['base']["primary"]},
            ];

            $.plot($("#kt_flotcharts_3"), data, {
                series: {
                    pie: {
                        show: true
                    }
                }
            });
        }
        function gioitinh() {
            var data = [
                {label: "Nam", data: '{{number_format($a_ketqua['gt_nam'])}}', color:  KTApp.getSettings()['colors']['theme']['base']["success"]},
                {label: "Nữ", data: '{{number_format($a_ketqua['gt_nu'])}}', color:  KTApp.getSettings()['colors']['theme']['base']["primary"]},
            ];

            $.plot($("#kt_flotcharts_4"), data, {
                series: {
                    pie: {
                        show: true
                    }
                }
            });
        }
        jQuery(document).ready(function() {
            TableManagedclass.init();
            sunghiep();
            phanloai();
            dangvien();
            gioitinh();
        });
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="text-uppercase">sự nghiệp</span>
                    </div>
                </div>
                <div class="card-body">
                    <div id="kt_flotcharts_1" style="height: 150px;"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="text-uppercase card-label">PHÂN LOẠI</span>
                    </div>
                </div>
                <div class="card-body">
                    <div id="kt_flotcharts_2" style="height: 150px;"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="text-uppercase card-label">Đảng viên</span>
                    </div>
                </div>
                <div class="card-body">
                    <div id="kt_flotcharts_3" style="height: 150px;"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="text-uppercase card-label">Giới tính</span>
                    </div>
                </div>
                <div class="card-body">
                    <div id="kt_flotcharts_4" style="height: 150px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="text-uppercase card-label">danh sách nâng lương trong tháng</span>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table classTable table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Họ và tên</th>
                                <th class="text-center">Mã ngạch</th>
                                <th class="text-center">Ngày nâng lương</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($m_nangluong))
                            @foreach($m_nangluong as $key=>$value)
                                <tr>
                                    <td>{{$value->tencanbo}}</td>
                                    <td>{{$value->msngbac}}</td>
                                    <td>{{getDayVn($value->ngayden)}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="text-uppercase card-label">danh sách sắp đến tuổi nghỉ hưu</span>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table tableClass table-hover table-striped table-bordered">
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
                                    <td>{{$value->tencanbo}}</td>
                                    <td>{{$value->msngbac}}</td>
                                    <td>{{''}}</td>
                                </tr>
                            @endforeach

                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="text-uppercase card-label">danh sách sinh nhật trong tháng</span>
                    </div>
                </div>
                <div class="card-body">
                    <table id="sample_5" class="table classTable table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">Họ và tên</th>
                            <th class="text-center">Ngày sinh nhật</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($m_sinhnhat))
                            @foreach($m_sinhnhat as $key=>$value)
                                <tr>
                                    <td>{{$value->tencanbo}}</td>
                                    <td>{{getDayVn($value->ngaysinh)}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="text-uppercase card-label">danh sách hết tập sự trong tháng</span>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table tableClass table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Họ và tên</th>
                            <th class="text-center">Ngày xét</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($m_hettapsu))
                            <?php $i=1;?>
                            @foreach($m_hettapsu as $key=>$value)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$value->tencanbo}}</td>
                                    <td>{{$value->msngbac}}</td>
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
        </div>
    </div>
@stop