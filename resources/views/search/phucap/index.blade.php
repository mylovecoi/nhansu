<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 24/06/2016
 * Time: 4:00 PM
 */
        ?>
@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
@stop

@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>

    <script src="{{url('assets/admin/pages/scripts/table-managed.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            TableManaged.init();
        });
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">TIÊU CHUẨN TÌM KIẾM THÔNG TIN HỒ SƠ QUÁ TRÌNH PHỤ CẤP CÁN BỘ</div>
                    <div class="actions"></div>
                </div>
                    <div class="portlet-body" style="min-height: 380px">
                        {!! Form::open(['url'=>'/tra_cuu/phu_cap/ket_qua','method'=>'POST','id' => 'create-hscb','class'=>'horizontal-form']) !!}
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Họ tên</label>

                                        <div class="col-sm-8 controls">
                                            {!!Form::text('tencanbo', null, array('id' => 'tencanbo','class' => 'form-control'))!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Phòng ban</label>

                                        <div class="col-sm-8 controls">
                                            <select name="mapb" id="mapb" class="form-control" autofocus="autofocus">
                                                <option value="">-- Chọn phòng ban ---</option>
                                                @foreach($m_pb as $pb)
                                                    <option value="{{$pb->mapb}}">{{$pb->tenpb}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Chức vụ</label>

                                        <div class="col-sm-8">
                                            <select name="macvcq" id="macvcq" class="form-control">
                                                <option value="">-- Chọn chức vụ ---</option>
                                                @foreach($m_cvcq as $cv)
                                                    <option value="{{$cv->macvcq}}">{{$cv->tencv}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Giới tính</label>

                                        <div class="col-sm-8">
                                            {!! Form::select(
                                            'gioitinh',
                                            array(
                                            'Nam' => 'Nam',
                                            'Nữ' => 'Nữ'
                                            ),null,
                                            array('id' => 'gioitinh', 'class' => 'form-control'))
                                            !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Từ ngày</label>

                                        <div class="col-sm-8">
                                            {!!Form::input('date','ngaytu', null, array('id' => 'ngaytu','class' => 'form-control'))!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Đến ngày</label>

                                        <div class="col-sm-8">
                                            {!!Form::input('date','ngayden', null, array('id' => 'ngayden','class' => 'form-control'))!!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Phụ cấp </label>

                                        <div class="col-sm-8">
                                            <select name="mapc" id="mapc" class="form-control">
                                                <option value="">--Chọn phụ cấp--</option>
                                                @if(isset($m_pc))
                                                    @foreach($m_pc as $pc)
                                                        <option data-number="{{$pc['hesopc']}}" value="{{$pc['mapc']}}">{{$pc['tenpc']}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center" style="border-top: 1px solid #e5e5e5;padding-top: 10px">
                            <button type="reset" class="btn btn-info"><i class="fa fa-refresh"></i>&nbsp;Tạo mới</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Tra cứu</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
    @include('includes.modal.delete')
@stop