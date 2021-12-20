<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 04/07/2016
 * Time: 3:50 CH
 */
?>
@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/global/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
@stop

@section('custom-script')
    <script type="text/javascript" src="{{url('assets/plugins/global/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/global/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/global/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>

    <script src="{{url('assets/js/table-managed.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            TableManaged.init();
        });
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="text-uppercase">DANH SÁCH HỒ SƠ CÁN BỘ - {{$tendv}}</span>
                    </div>

                    <div class="card-toolbar">
                        <a class="btn btn-light-dark font-weight-bold mr-2" href="{{url($url.'create')}}"><i class="flaticon-user-add"></i>&nbsp;Thêm mới</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="sample_4" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-center font-weight-bold">
                                <th style="font-weight: bold;" class="font-weight-bold">STT</th>
                                <th width="96">Ảnh</th>
                                <th>Họ tên</th>
                                <th>Ngày sinh</th>
                                <th>Giới tính</th>
                                <th>Phân loại<br>công tác</th>
                                <th width="20%">Thao tác</th>
                            </tr>
                        </thead>
                        <?php $stt =0;?>
                        <tbody>
                        @foreach($model as $hs)
                            <tr>
                                <td class="text-center">{{++$stt}}</td>
                                <td name="anh">
                                    <a href="{{url($url.'chi_tiet?id='.$hs->id.'')}}">
                                        @if($hs->anh != '')
                                            <img src="{{ url($hs->anh)}}" width="96">
                                        @else
                                            <img src="{{ url('images/avatar/no-image.png')}}" width="96">
                                        @endif
                                    </a>
                                </td>
                                <td>
                                    <span><a href="{{url($url.'chi_tiet?id='.$hs->id.'')}}"><b>{{$hs->tencanbo}}</b></a></span>
                                    <span><br>Phòng ban: {{$hs->tenpb}}</span>
                                    <span><br>Chức vụ: {{$hs->tencvcq}}</span>
                                </td>
                                <td class="text-center">{{getDayVn($hs->ngaysinh)}}</td>
                                <td class="text-center">{{$hs->gioitinh}}</td>
                                <td class="text-center">{{$hs->tenct}}</td>
                                <td>
                                    <a href="{{url($url.'chi_tiet?id='.$hs->id)}}" class="btn btn-light text-uppercase btn-shadow btn-sm">
                                        <i class="flaticon-edit-1"></i>&nbsp;Sửa</a>

                                <!--button type="button" onclick="cfChiTiet('{{$url.'bsll/'.$hs->id}}','{{$hs->id}}')" class="btn btn-default btn-xs mbs" data-target="#chitiet-modal" data-toggle="modal">
                                        <i class="fa fa-navicon"></i>&nbsp; Bổ sung lý lịch</button-->
                                    <button type="button" onclick="cfDel('{{$url.'del/maso='.$hs->id}}')" class="btn btn-danger text-uppercase btn-shadow btn-sm" data-target="#delete-modal-confirm" data-toggle="modal">
                                        <i class="flaticon2-delete"></i>&nbsp;Xóa</button>

                                    <div class="btn-group" role="group">
                                        <button id="btnIn" type="button" class="btn btn-light btn-shadow btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="flaticon-technology"></i>&nbsp;IN
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnIn">
                                            <a class="dropdown-item" href="{{url($url.'syll/'.$hs->id)}}" target="_blank">Sơ yếu lý lịch</a>
                                            <a class="dropdown-item" href="{{url($url.'ttts/'.$hs->id)}}" target="_blank">Tóm tắt tiểu sử</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Modal thông tin thoại báo cáo -->
    <div id="chitiet-modal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
        {!! Form::open(['url'=>'','method'=>'POST','id' => 'frmThoaiBC','class'=>'horizontal-form','target'=>'_blank']) !!}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin kết xuất</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        @include('includes.crumbs.tudenngay')
                    </div>
                    <input type="hidden" id="idct" name="idct">
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                    <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Đồng ý</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

    @include('includes.modal.delete')
@stop
