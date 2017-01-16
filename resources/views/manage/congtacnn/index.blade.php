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
                                <b>DANH SÁCH QUÁ TRÌNH CÔNG TÁC NƯỚC NGOÀI CỦA CÁN BỘ</b>
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
                                        <th class="text-center" style="width: 20%">Nước đến công tác</th>
                                        <th class="text-center" style="width: 25%">Nội dung công tác</th>
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
                                                <td name="nuoc">{{$ct->nuoc}}</td>
                                                <td name="noidung">{{$ct->noidung}}</td>
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
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin quá trình đào tạo</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        @include('includes.crumbs.tudenngay')

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Nội dung công tác</label>
                            <div class="col-md-8">
                                {!!Form::text('noidung', null, array('id' => 'noidung','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Nước đến công tác<span class="require">*</span></label>
                            <div class="col-md-8">
                                {!!Form::text('nuoc', null, array('id' => 'nuoc','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Đoàn đi công tác</label>
                            <div class="col-md-8">
                                {!!Form::text('doandi', null, array('id' => 'doandi','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Nguồn kinh phí</label>
                            <div class="col-md-8">
                                {!!Form::text('nguonkp', null, array('id' => 'nguonkp','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Kinh phí công tác</label>
                            <div class="col-md-8">
                                {!!Form::text('kinhphi', null, array('id' => 'kinhphi','class' => 'form-control','data-mask'=>'fdecimal'))!!}
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
                $('#nuoc').val('');
                $('#noidung').val('');
                $('#doandi').val('');
                $('#kinhphi').val(0);
                $('#nguonkp').val('');
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
                url: '/ajax/getcongtacnn',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                dataType: 'JSON',
                success: function (data) {
                    $('#ngaytu').val(data.ngaytu);
                    $('#ngayden').val(data.ngayden);
                    $('#nuoc').val(data.nuoc);
                    $('#noidung').val(data.noidung);
                    $('#doandi').val(data.doandi);
                    $('#kinhphi').val(data.kinhphi);
                    $('#nguonkp').val(data.nguonkp);
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

            var ngaytu = $('#ngaytu').val();
            var ngayden = $('#ngayden').val();
            var noidung = $('#noidung').val();
            var nuoc = $('#nuoc').val();
            var doandi = $('#doandi').val();
            var kinhphi = $('#kinhphi').val();
            var nguonkp = $('#nguonkp').val();

            var id=$('#id_ct').val();

            if(nuoc==''){
                valid=false;
                message +='Nước đến công tác không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if(id==0){//Thêm mới
                    $.ajax({
                        url: '/ajax/addcongtacnn',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            macanbo: macanbo,
                            ngaytu : ngaytu,
                            ngayden : ngayden,
                            noidung : noidung,
                            nuoc : nuoc,
                            doandi : doandi,
                            kinhphi : kinhphi,
                            nguonkp : nguonkp
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
                        url: '/ajax/updatecongtacnn',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            ngaytu : ngaytu,
                            ngayden : ngayden,
                            noidung : noidung,
                            nuoc : nuoc,
                            doandi : doandi,
                            kinhphi : kinhphi,
                            nguonkp : nguonkp,
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
    @include('includes.script.scripts')
@stop