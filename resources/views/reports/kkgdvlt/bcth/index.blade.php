@extends('main')

@section('custom-style')

@stop


@section('custom-script')

@stop

@section('content')


    <h3 class="page-title">
        Báo cáo tổng hợp <small>dịch vụ lưu trú</small>
    </h3>
    <!-- END PAGE HEADER-->

    <!-- BEGIN DASHBOARD STATS -->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <ol>
                                <li><a data-target="#BC1-thoai-confirm" data-toggle="modal">Báo cáo thống kê các đơn vị kê khai giá trong khoảng thời gian</a></li>
                                <li><a data-target="#BC2-thoai-confirm" data-toggle="modal">Báo cáo thống kê chi tiết đơn vị kê khai giá trong khoảng thời gian</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('reports.kkgdvlt.bcth.modal-thoai')
@stop