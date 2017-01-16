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
                                <b>DANH SÁCH HỒ SƠ THANH TRA CỦA CÁN BỘ</b>
                            </div>
                            <div class="actions">
                                <button type="button" id="_btnadd" class="btn btn-success btn-xs" onclick="add()"><i class="fa fa-plus"></i>&nbsp;Thêm mới hồ sơ</button>
                            </div>
                        </div>
                        <div class="portlet-body">
                            @include('includes.crumbs.cb_canbo')
                            <div class="dataTables_wrapper">
                                <table id="table_id" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 5%">STT</th>
                                        <th style="width: 14%">Ngày tháng</th>
                                        <th class="text-center" style="width: 17%">Thanh tra viên</th>
                                        <th class="text-center" style="width: 20%">Nội dung</th>
                                        <th class="text-center" style="width: 12%">Xếp loại</th>
                                        <th class="text-center" style="width: 13%">Kết luận</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <?php $stt =0;?>
                                    <tbody>
                                        @if(isset($model))
                                            @foreach($model as $ct)
                                                <tr>
                                                    <td class="text-center">{{++$stt}}</td>
                                                    <td>{{getDayVn($ct->ngaythang)}}</td>
                                                    <td>{{$ct->tenthanhtra}}</td>
                                                    <td>{{$ct->noidung}}</td>
                                                    <td>{{$ct->xeploai}}</td>
                                                    <td>{{$ct->ketluan}}</td>
                                                    @include('includes.crumbs.bt_editdel')
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

    <!--Modal thông tin chi tiết -->
    <div id="chitiet-modal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin hồ sơ thanh tra của cán bộ</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Ngày thanh tra<span class="require">*</span></label>
                            <div class="col-md-8">
                                <input type="date" name="ngaythang" id="ngaythang" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Thanh tra viên</label>
                            <div class="col-md-8">
                                {!!Form::text('tenthanhtra', null, array('id' => 'tenthanhtra','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Nội dung thanh tra</label>
                            <div class="col-md-8">
                                {!!Form::textarea('noidung', null, array('id' => 'noidung','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Xếp loại thanh tra</label>
                            <div class="col-md-8">
                                {!!Form::text('xeploai', null, array('id' => 'xeploai','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Kết luận thanh tra</label>
                            <div class="col-md-8">
                                {!!Form::text('ketluan', null, array('id' => 'ketluan','class' => 'form-control'))!!}
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
                $('#ngaythang').val('');
                $('#hinhthuc').val('');
                $('#noidung').val('');
                $('#capqd').val('');
                $('#id_ct').val(0);
                $('#chitiet-modal').modal('show');
            }
        }

        function getInfo(){
            window.location.href = '{{$furl}}'+$('#cbmacb').val();
        }

        function edit(e, id){
            //var tr = $(e).closest('tr');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/ajax/getthanhtra',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                dataType: 'JSON',
                success: function (data) {
                    $('#ngaythang').val(data.ngaythang);
                    $('#tenthanhtra').val(data.tenthanhtra);
                    $('#xeploai').val(data.xeploai);
                    $('#noidung').val(data.noidung);
                    $('#ketluan').val(data.ketluan);
                },
                error: function(message){
                    alert(message);
                }
            });

            $('#id_ct').val(id);
            $('#chitiet-modal').modal('show');
        }

        function confirm(){
            var valid=true;
            var message='';

            var macanbo = $('#cbmacb').val();

            var ngaythang=$('#ngaythang').val();
            var tenthanhtra=$('#tenthanhtra').val();
            var noidung=$('#noidung').val();
            var xeploai=$('#xeploai').val();
            var ketluan=$('#ketluan').val();

            var id=$('#id_ct').val();

            if(ngaythang==''){
                valid=false;
                message +='Ngày kỷ luật đổi không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if(id==0){//Thêm mới
                    $.ajax({
                        url: '/ajax/addthanhtra',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            macanbo: macanbo,
                            ngaythang: ngaythang,
                            tenthanhtra: tenthanhtra,
                            noidung: noidung,
                            xeploai: xeploai,
                            ketluan: ketluan
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            if (data.status == 'success') {
                                location.reload();
                            }
                        },
                        error: function(message){
                            alert(message);
                        }
                    });
                }else{//Cập nhật
                    $.ajax({
                        url: '/ajax/updatethanhtra',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            ngaythang: ngaythang,
                            tenthanhtra: tenthanhtra,
                            noidung: noidung,
                            xeploai: xeploai,
                            ketluan: ketluan,
                            id: id
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            if (data.status == 'success') {
                                location.reload();
                            }
                        },
                        error: function(message){
                            alert(message);
                        }
                    });
                }
                $('#chitiet-modal').modal('hide');
            }else{
                alert(message);
            }
            return valid;
        }
    </script>

    @include('includes.modal.delete')
@stop