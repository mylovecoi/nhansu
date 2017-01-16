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
                                <b>DANH SÁCH NÂNG LƯƠNG</b>
                            </div>
                            <div class="actions">
                                <button type="button" id="_btnadd" class="btn btn-success btn-xs" onclick="add()"><i class="fa fa-plus"></i>&nbsp;Tạo danh sách</button>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="dataTables_wrapper">
                                <table id="table_id" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 5%">STT</th>
                                        <th style="width: 10%">Số quyết định</th>
                                        <th style="width: 13%">Ngày quyết định</th>
                                        <th style="width: 15%">Cơ quan quyết định</th>
                                        <th style="width: 20%">Nội dung quyết định</th>
                                        <th style="width: 13%">Ngày xét duyệt</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <?php $stt =0;?>
                                    <tbody>
                                        @if(isset($model))
                                            @foreach($model as $ct)
                                                <tr>
                                                    <td class="text-center">{{++$stt}}</td>
                                                    <td>{{$ct->soqd}}</td>
                                                    <td>{{getDayVn($ct->ngayqd)}}</td>
                                                    <td>{{$ct->coquanqd}}</td>
                                                    <td>{{$ct->noidung}}</td>
                                                    <td>{{getDayVn($ct->ngayxet)}}</td>
                                                    <td>
                                                        <button type="button" onclick="edit(this, {{$ct->id}})" class="btn btn-info btn-xs mbs">
                                                            <i class="fa fa-edit"></i>&nbsp; Chỉnh sửa</button>
                                                        <a href="{{url($furl.'danhsach/'.$ct->manl)}}" class="btn btn-success btn-xs mbs">
                                                            <i class="fa fa-th-list"></i>&nbsp; Chi tiết</a>
                                                        <button type="button" onclick="cfDel('{{$furl.'del/'.$ct->id}}')" class="btn btn-danger btn-xs mbs" data-target="#delete-modal-confirm" data-toggle="modal">
                                                            <i class="fa fa-trash-o"></i>&nbsp; Xóa</button>
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

    <!--Modal thông tin chi tiết -->
    <div id="chitiet-modal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Tạo danh sách nâng lương</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    @include('includes.crumbs.quyetdinh')
                    @include('includes.crumbs.xetduyet')

                    <div class="form-group">
                        <label class="col-md-4 control-label"> Nội dung kèm theo</label>
                        <div class="col-md-8">
                            {!! Form::textarea('kemtheo',null,array('id' => 'kemtheo', 'class' => 'form-control','rows'=>'3'))!!}
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

    <script>
        function add(){
            $('#soqd').val('');
            $('#ngayqd').val('');
            $('#nguoiky').val('');
            $('#coquanqd').val('');
            $('#noidung').val('');
            $('#ngayxet').val('');
            $('#kemtheo').val('');
            $('#id_ct').val(0);
            $('#chitiet-modal').modal('show');
        }

        function edit(e, id){
            //var tr = $(e).closest('tr');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/ajax/getnangluong',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                dataType: 'JSON',
                success: function (data) {
                    $('#soqd').val(data.soqd);
                    $('#ngayqd').val(data.ngayqd);
                    $('#nguoiky').val(data.nguoiky);
                    $('#coquanqd').val(data.coquanqd);
                    $('#noidung').val(data.noidung);
                    $('#ngayxet').val(data.ngayxet);
                    $('#kemtheo').val(data.kemtheo);
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

            var soqd=$('#soqd').val();
            var ngayqd=$('#ngayqd').val();
            var nguoiky=$('#nguoiky').val();
            var coquanqd=$('#coquanqd').val();
            var noidung=$('#noidung').val();
            var ngayxet=$('#ngayxet').val();
            var kemtheo=$('#kemtheo').val();

            var id=$('#id_ct').val();

            if(ngayxet==''){
                valid=false;
                message +='Ngày xét duyệt không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if(id==0){//Thêm mới
                    $.ajax({
                        url: '/ajax/addnangluong',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            soqd:soqd,
                            ngayqd:ngayqd,
                            nguoiky:nguoiky,
                            coquanqd:coquanqd,
                            noidung:noidung,
                            ngayxet:ngayxet,
                            kemtheo:kemtheo
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            if (data.status == 'success') {
                                //alert(data.message);
                                window.location.href = data.message;
                            }
                        },
                        error: function(message){
                            alert(message);
                        }
                    });
                }else{//Cập nhật
                    $.ajax({
                        url: '/ajax/updatenangluong',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            soqd:soqd,
                            ngayqd:ngayqd,
                            nguoiky:nguoiky,
                            coquanqd:coquanqd,
                            noidung:noidung,
                            ngayxet:ngayxet,
                            kemtheo:kemtheo,
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