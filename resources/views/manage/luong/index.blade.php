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
                                <b>DANH SÁCH QUÁ TRÌNH HƯỞNG LƯƠNG CỦA CÁN BỘ</b>
                            </div>
                            <div class="actions">
                                @include('includes.crumbs.bt_add')
                            </div>
                        </div>
                        <div class="portlet-body">
                            @include('includes.crumbs.cb_canbo')
                            <div class="dataTables_wrapper">
                                <table id="table_id" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 5%">STT</th>
                                        <th class="text-center" style="width: 15%">Từ ngày</th>
                                        <th class="text-center" style="width: 15%">Đến ngày</th>
                                        <th class="text-center" style="width: 15%">Mã ngạch</th>
                                        <th class="text-center" style="width: 10%">Bậc</th>
                                        <th class="text-center" style="width: 10%">Hệ số</th>
                                        <th class="text-center" style="width: 10%">Vượt khung</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <?php $stt =0;?>
                                    <tbody>
                                    @if(isset($model))
                                        @foreach($model as $ct)
                                            <tr>
                                                <td class="text-center">{{++$stt}}</td>
                                                <td name="ngaytu">{{getDayVn($ct->ngaytu)}}</td>
                                                <td name="ngayden">{{getDayVn($ct->ngayden)}}</td>
                                                <td name="msngbac">{{$ct->msngbac}}</td>
                                                <td name="bac">{{$ct->bac}}</td>
                                                <td name="heso">{{$ct->heso}}</td>
                                                <td name="vuotkhung">{{$ct->vuotkhung}}</td>
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
    @include('includes.modal.luong_chitiet')

    <script>
        function add(){            
            var macb=$('#cbmacb').val();
            if(macb=='all'){
                alert('Bạn cần chọn cán bộ để nhập thông tin.');
                $('#cbmacb').focus();
            }else{
                $('#msngbac').val('');
                $('#ngaytu').val('');
                $('#ngayden').val('');
                $('#bac').val('');
                $('#heso').val('');
                $('#vuotkhung').val('');
                $('#pthuong').val(100);
              
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
            var kq = $.ajax({
                url: '/ajax/getluong',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                dataType: 'JSON',
                success: function (data) {
                    $('#chitiet').replaceWith(data.message);
                    $('#chitiet-modal').modal('show');
                },
                error: function (message) {
                    alert('Lỗi: '+ message);
                }
            });

        }

        function confirm(){
            var valid=true;
            var message='';

            var macanbo = $('#cbmacb').val();

            var msngbac=$('#msngbac').val();
            var ngaytu=$('#ngaytu').val();
            var ngayden=$('#ngayden').val();
            var bac=$('#bac').val();
            var heso=$('#heso').val();
            var vuotkhung=$('#vuotkhung').val();
            var pthuong=$('#pthuong').val();

            var id=$('#id_ct').val();

            if(ngaytu==''){
                valid=false;
                message +='Ngày hưởng lương không được bỏ trống \n';
            }
            if(msngbac==''){
                valid=false;
                message +='Mã ngạch lương không được bỏ trống \n';
            }
            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if(id==0){//Thêm mới
                    $.ajax({
                        url: '/ajax/addluong',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            macanbo: macanbo,
                            ngaytu: ngaytu,
                            ngayden: ngayden,
                            msngbac: msngbac,
                            bac: bac,
                            heso: heso,
                            vuotkhung: vuotkhung,
                            pthuong: pthuong
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
                        url: '/ajax/updateluong',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            ngaytu: ngaytu,
                            ngayden: ngayden,
                            msngbac: msngbac,
                            bac: bac,
                            heso: heso,
                            vuotkhung: vuotkhung,
                            pthuong: pthuong,
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

    @include('includes.script.func_msnb')
    @include('includes.modal.delete')
    @include('includes.script.scripts')
@stop