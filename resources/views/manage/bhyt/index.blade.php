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
                    <div class="caption">
                        <i class="fa fa-list-alt"></i>DANH SÁCH HỒ SƠ BẢO HIỂM Y TẾ CỦA CÁN BỘ
                    </div>
                    @include('includes.crumbs.bt_add')
                </div>
                <div class="portlet-body form-horizontal">
                    @include('includes.crumbs.cb_canbo')
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%">STT</th>
                                <th class="text-center">Số thẻ bảo hiểm</th>
                                <th class="text-center">Từ ngày</th>
                                <th class="text-center">Đến ngày</th>
                                <th class="text-center">Nơi đăng ký khám bệnh</th>
                                <th class="text-center">Ngày lĩnh thẻ</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($model))
                                @foreach($model as $key=>$value)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td>{{$value->sothebh}}</td>
                                        <td>{{getDayVn($value->ngaytu)}}</td>
                                        <td>{{getDayVn($value->ngayden)}}</td>
                                        <td>{{$value->noidangky}}</td>
                                        <td>{{getDayVn($value->ngaylinhthe)}}</td>
                                        @include('includes.crumbs.bt_editdel')
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Modal thông tin chi tiết -->
    <div id="chitiet-modal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin hồ sơ luân chuyển, điều động cán bộ</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        @include('includes.crumbs.tudenngay')
                        <div class="form-group">
                            <label class="col-md-4 control-label">Số thẻ bảo hiểm<span class="require">*</span></label>
                            <div class="col-md-8">
                                {!!Form::text('sothebh', null, array('id' => 'sothebh','class' => 'form-control'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nơi đăng ký khám</label>
                            <div class="col-md-8">
                                {!!Form::text('noidangky', null, array('id' => 'noidangky','class' => 'form-control'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Ngày lĩnh thẻ</label>
                            <div class="col-md-8">
                                <input type="date" name="ngaylinhthe" id="ngaylinhthe" class="form-control" />
                            </div>
                        </div>
                        <input type="hidden" id="id_ct" name="id_ct"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                    <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" onclick="confirm()">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function add(){            
            var macb=$('#cbmacb').val();
            if(macb=='all'){
                alert('Bạn cần chọn cán bộ để nhập thông tin.');
                $('#cbmacb').focus();
            }else{
                $('#ngaytu').val('');
                $('#ngayden').val('');
                $('#ngaylinhthe').val('');
                $('#noidangky').val('');
                $('#sothebh').val('');
                $('#id_ct').val(0);
                $('#chitiet-modal').modal('show');
            }
        }

        function getInfo() {
            window.location.href = '{{$furl}}' + 'maso=' + $('#cbmacb').val();
        }

        function edit(id){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{$furl_ajax}}' + 'get',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                dataType: 'JSON',
                success: function (data) {
                    $('#ngaytu').val(data.ngaytu);
                    $('#ngayden').val(data.ngayden);
                    $('#ngaylinhthe').val(data.ngaylinhthe);
                    $('#noidangky').val(data.noidangky);
                    $('#sothebh').val(data.sothebh);
                },
                error: function (message) {
                    toastr.error(message, 'Lỗi!');
                }
            });
            $('#id_ct').val(id);
            $('#chitiet-modal').modal('show');
        }

        function confirm(){
            var valid=true;
            var message='';

            var macanbo = $('#cbmacb').val();

            var ngaytu=$('#ngaytu').val();
            var ngayden=$('#ngayden').val();
            var ngaylinhthe=$('#ngaylinhthe').val();
            var noidangky=$('#noidangky').val();
            var sothebh=$('#sothebh').val();

            var id=$('#id_ct').val();

            if(ngaytu==''){
                valid=false;
                message +='Ngày bắt đầu không được bỏ trống \n';
            }

            if(sothebh==''){
                valid=false;
                message +='Số thẻ bảo hiểm không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if(id==0){//Thêm mới
                    $.ajax({
                        url: '{{$furl_ajax}}' + 'add',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            macanbo: macanbo,
                            ngaytu: ngaytu,
                            ngayden: ngayden,
                            ngaylinhthe: ngaylinhthe,
                            noidangky: noidangky,
                            sothebh: sothebh
                },
                        dataType: 'JSON',
                        success: function (data) {
                            if (data.status == 'success') {
                                location.reload();
                            }
                        },
                        error: function(message){
                            toastr.error(message, 'Lỗi!');
                        }
                    });
                }else{//Cập nhật
                    $.ajax({
                        url: '{{$furl_ajax}}' + 'update',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            ngaytu: ngaytu,
                            ngayden: ngayden,
                            ngaylinhthe: ngaylinhthe,
                            noidangky: noidangky,
                            sothebh: sothebh,
                            id: id
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            if (data.status == 'success') {
                                location.reload();
                            }
                        },
                        error: function(message){
                            toastr.error(message, 'Lỗi!');
                        }
                    });
                }
                $('#chitiet-modal').modal('hide');
            }else{
                toastr.error(message, 'Lỗi!');
            }
            return valid;
        }
    </script>

    @include('includes.modal.delete')
@stop