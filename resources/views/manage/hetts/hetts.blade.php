<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 24/06/2016
 * Time: 4:00 PM
 */
        ?>
@extends('main')

@section('custom-script')
    <link href="{{url('vendors/select2/css/select2.min.css')}}" rel="stylesheet" />
    <script src="{{url('vendors/select2/js/select2.min.js')}}"></script>
@stop

@section('script')
    <script src="{{url('bower_components/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{url('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js')}}"></script>
    <script src="{{url('bower_components/datatables-responsive/js/dataTables.responsive.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                responsive: true,
                iDisplayLength: 25
            });
        });
       $('#cbmacb').select2();
    </script>
@stop

@section('content')
    <div class="page-content">
        <div class="col-lg-12">
            <div class="row">
                <form>
                    <div class="portlet box">
                        <div class="portlet-header">
                            <div class="caption">
                                <b>CHI TIẾT DANH SÁCH XÉT HẾT TẬP SỰ</b>
                            </div>
                            <div class="actions">

                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="dataTables_wrapper">
                                <table id="table_id" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10%">STT</th>
                                        <th style="width: 30%">Họ tên</th>
                                        <th style="width: 25%">Chức vụ</th>
                                        <th style="width: 20%">Ngày sinh</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <?php $stt =0;?>
                                    <tbody>
                                        @if(isset($model))
                                            @foreach($model as $ct)
                                                <tr>
                                                    <td class="text-center">{{++$stt}}</td>
                                                    <td>{{$ct->tencanbo}}</td>
                                                    <td>{{$ct->tencv}}</td>
                                                    <td>{{getDayVn($ct->ngaysinh)}}</td>
                                                    <td>
                                                        <!--button type="button" onclick="cfDel('{{$furl.'deldt/'.$ct->id}}')" class="btn btn-danger btn-xs mbs" data-target="#delete-modal-confirm" data-toggle="modal">
                                                            <i class="fa fa-trash-o"></i>&nbsp; Xóa</button-->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop