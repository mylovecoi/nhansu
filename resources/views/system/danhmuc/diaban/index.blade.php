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
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/global/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
{{--    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/global/select2/select2.css')}}"/>--}}
@stop

@section('custom-script')
    <script type="text/javascript" src="{{url('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
{{--    <script type="text/javascript" src="{{url('assets/plugins/global/select2/select2.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{url('assets/plugins/global/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/global/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>

    <script src="{{url('assets/js/table-managed.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            TableManaged.init();
            // $('.kt-select2-general').select2({
            //     placeholder: "Chọn giá trị"
            // });
        });
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="text-uppercase">DANH SÁCH ĐỊA BÀN</span>
                    </div>

                    <div class="card-toolbar">
                        <button type="button" class="btn btn-light-dark font-weight-bold mr-2" onclick="addPB()"><i class="fa fa-plus"></i>&nbsp;Thêm mới</button>
                    </div>
                </div>
                <div class="card-body">
{{--                    <div class="mb-12">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xl-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="control-label">Cấp độ quản lý</label>--}}
{{--                                    {!!Form::select('capdo', getCapDo(false), null, array('class' => 'form-control select2basic'))!!}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <hr />--}}
{{--                    </div>--}}

                    <div class="mb-12">
                        <table id="sample_4" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                            <thead>
                                <tr class="text-center">
                                    <th colspan="3" >STT</th>
                                    <th rowspan="2">Tên địa bàn</th>
                                    <th style="width: 20%" rowspan="2">Thông tin thêm</th>
                                    <th style="width: 20%" rowspan="2">Thao tác</th>
                                </tr>
                                <tr class="text-center">
                                    <th style="width: 1%">I</th>
                                    <th style="width: 1%">II</th>
                                    <th style="width: 1%">III</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Cấp Tỉnh -->
                                <?php $m_tinh = $model->where('capdo','T');?>
                                @foreach($m_tinh as $ct_T)
                                    <tr class="success">
                                        <td class="text-uppercase text-center">{{ toAlpha($ct_T->stt)}}</td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$ct_T->tendiaban}}</td>
                                        <td>{{$ct_T->ghichu}}</td>
                                        <td>
                                            <button type="button" onclick="editPB('{{$ct_T->madiaban}}')" class="btn btn-light text-uppercase btn-shadow btn-sm">
                                                <i class="flaticon-edit-1"></i>&nbsp;Sửa</button>

                                            <button type="button" onclick="confirmDelete('{{$ct_T->id}}')" class="btn btn-danger text-uppercase btn-shadow btn-sm" data-target="#delete-modal-confirm" data-toggle="modal">
                                                <i class="flaticon2-delete"></i>&nbsp;Xóa</button>
                                        </td>
                                    </tr>
                                    <?php
                                        $m_huyen = $model->where('capdo','H')->where('magoc',$ct_T->madiaban);
                                    ?>
                                    @foreach($m_huyen as $ct_H)
                                        <tr class="info">
                                            <td></td>
                                            <td class="text-center">{{toRoman($ct_H->stt)}}</td>
                                            <td></td>
                                            <td>{{$ct_H->tendiaban}}</td>
                                            <td>{{$ct_H->ghichu}}</td>
                                            <td>
                                                <button type="button" onclick="editPB('{{$ct_H->madiaban}}')" class="btn btn-light text-uppercase btn-shadow btn-sm">
                                                    <i class="flaticon-edit-1"></i>&nbsp;Sửa</button>
                                                <button type="button" onclick="confirmDelete('{{$ct_T->id}}')" class="btn btn-danger text-uppercase btn-shadow btn-sm" data-target="#delete-modal-confirm" data-toggle="modal">
                                                    <i class="flaticon2-delete"></i>&nbsp;Xóa</button>
                                            </td>
                                        </tr>
                                        <?php
                                            $m_xa = $model->where('capdo','X')->where('magoc',$ct_H->madiaban);
                                        ?>
                                        @foreach($m_xa as $ct_X)
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center">{{$ct_X->stt}}</td>
                                                <td>{{$ct_X->tendiaban}}</td>
                                                <td>{{$ct_X->ghichu}}</td>
                                                <td>
                                                    <button type="button" onclick="editPB('{{$ct_H->madiaban}}')" class="btn btn-light text-uppercase btn-shadow btn-sm">
                                                        <i class="flaticon-edit-1"></i>&nbsp;Sửa</button>
                                                    <button type="button" onclick="confirmDelete('{{$ct_T->id}}')" class="btn btn-danger text-uppercase btn-shadow btn-sm" data-target="#delete-modal-confirm" data-toggle="modal">
                                                        <i class="flaticon2-delete"></i>&nbsp;Xóa</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--begin::Modal-->
    <div class="modal fade" id="store_modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thông tin chi tiết</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                {!! Form::open(['url'=>$furl.'store','id' => 'frm_store','class'=>'form'])!!}
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-md-8">
                                <label>Tên địa bàn<span class="require">*</span></label>
                                {!!Form::text('tendiaban', null, array('id' => 'tendiaban','class' => 'form-control','required'=>'required'))!!}
                            </div>
                            <div class="col-md-4">
                                <label>Cấp độ quản lý</label>
                                {!!Form::select('capdo', getCapDo(false), null, array('id' => 'capdo','class' => 'form-control select2modal'))!!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <label class="control-label">Địa bàn cấp trên</label>
                                {!!Form::select('magoc', $a_magoc, null, array('id' => 'magoc','class' => 'form-control select2modal'))!!}
                                </div>

                            <div class="col-md-4">
                                <label class="control-label">Sắp xếp</label>
                                {!!Form::text('sapxep', null, array('id' => 'sapxep','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="control-label">Thông tin thêm</label>
                                {!!Form::textarea('ghichu', null, array('id' => 'ghichu','class' => 'form-control','rows'=>'2'))!!}
                            </div>
                        </div>
                        <input type="hidden" id="madiaban" name="madiaban"/>

                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                        <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" onclick="cfPB()">Đồng ý</button>
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!--end::Modal-->

        <script>
            function addPB(){
                $('#tendiaban').val('');
                $('#ghichu').val('');
                $('#sapxep').val('');
                $('#madiaban').val(null);
                $('#magoc').val(null).trigger('change');
                $('#store_modal').modal('show');
            }

            function editPB(madiaban){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '{{$furl}}' + 'chi_tiet',
                    type: 'GET',
                    data: {
                        _token: CSRF_TOKEN,
                        madiaban: madiaban
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        $('#tendiaban').val(data.tendiaban);
                        $('#ghichu').val(data.ghichu);
                        $('#sapxep').val(data.stt);
                        $('#madiaban').val(data.madiaban);
                        $('#magoc').val(data.magoc).trigger('change');
                        $('#capdo').val(data.capdo).trigger('change');
                    },
                    error: function(message){
                        toastr.error(message,'Lỗi!');
                    }
                });
                //$('#id_pb').val(id);
                $('#store_modal').modal('show');
            }
        </script>

        @include('includes.modal.modal_del')
    @stop