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
                                <b>DANH SÁCH QUÁ TRÌNH ĐÀO TẠO CỦA CÁN BỘ</b>
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
                                        <th style="width: 18%">Phân loại đào tạo</th>
                                        <th class="text-center" style="width: 12%">Từ ngày</th>
                                        <th class="text-center" style="width: 13%">Đến ngày</th>
                                        <th class="text-center" style="width: 17%">Hình thức đào tạo</th>
                                        <th class="text-center" style="width: 20%">Nơi đào tạo</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <?php $stt =0;?>
                                    <tbody>
                                    @if(isset($model))
                                        @foreach($model as $ct)
                                            <tr>
                                                <td class="text-center">{{++$stt}}</td>
                                                <td name="phanloai">{{$ct->phanloai}}</td>
                                                <td name="ngaytu">{{getDayVn($ct->ngaytu)}}</td>
                                                <td name="ngayden">{{getDayVn($ct->ngayden)}}</td>
                                                <td name="hinhthuc">{{$ct->hinhthuc}}</td>
                                                <td name="tencoso">{{$ct->tencoso}}</td>
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
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Phân loại<span class="require">*</span> </label>
                            <div class="col-md-8">
                                <select class="form-control" name="phanloai" id="phanloai" style="width: 100%">
                                    <option value="Trình độ chính trị">Trình độ chính trị</option>
                                    <option value="Trình độ chuyên môn">Trình độ chuyên môn</option>
                                    <option value="Trình độ ngoại ngữ">Trình độ ngoại ngữ</option>
                                    <option value="Trình độ quản lý nhà nước">Trình độ quản lý nhà nước</option>
                                    <option value="Trình độ tin học">Trình độ tin học</option>
                                </select>
                            </div>
                        </div>
                        @include('includes.crumbs.tudenngay')
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Hình thức đào tạo</label>
                            <div class="col-md-8">
                                <select class="form-control" name="hinhthuc" id="hinhthuc" style="width: 100%">
                                    <option value="Chính qui">Chính qui</option>
                                    <option value="Tại chức">Tại chức</option>
                                    <option value="Chuyên tu">Chuyên tu</option>
                                    <option value="Bồi dưỡng">Bồi dưỡng</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Nơi đào tạo</label>
                            <div class="col-md-8">
                                {!!Form::text('tencoso', null, array('id' => 'tencoso','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Chuyên ngành đào tạo</label>
                            <div class="col-md-8">
                                {!!Form::text('chuyennganh', null, array('id' => 'chuyennganh','class' => 'form-control'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Văn bằng tốt nghiệp</label>
                            <div class="col-md-8">
                                {!!Form::text('vanbang', null, array('id' => 'vanbang','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Ghi chú</label>
                            <div class="col-md-8">
                                {!!Form::textarea('ghichu', null, array('id' => 'ghichu','class' => 'form-control','rows'=>'3'))!!}
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
                $('#phanloai').val('');
                $('#ngaytu').val('');
                $('#ngayden').val('');
                $('#tencoso').val('');
                $('#chuyennganh').val('');
                $('#hinhthuc').val('');
                $('#vanbang').val('');
                $('#ghichu').val('');
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
                url: '/ajax/getdaotao',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                dataType: 'JSON',
                success: function (data) {
                    $('#ngaytu').val(data.ngaytu);
                    $('#ngayden').val(data.ngayden);
                    $('#phanloai').val(data.phanloai);
                    $('#tencoso').val(data.tencoso);
                    $('#chuyennganh').val(data.chuyennganh);
                    $('#hinhthuc').val(data.hinhthuc);
                    $('#vanbang').val(data.vanbang);
                    $('#ghichu').val(data.ghichu);
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

            var phanloai = $('#phanloai').val();
            var ngaytu = $('#ngaytu').val();
            var ngayden = $('#ngayden').val();
            var tencoso = $('#tencoso').val();
            var chuyennganh = $('#chuyennganh').val();
            var hinhthuc = $('#hinhthuc').val();
            var vanbang = $('#vanbang').val();
            var ghichu = $('#ghichu').val();

            var id=$('#id_ct').val();

            if(phanloai==''){
                valid=false;
                message +='Phân loại đào tạo không được bỏ trống \n';
            }

            if(ngaytu==''){
                valid=false;
                message +='Ngày đào tạo không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if(id==0){//Thêm mới
                    $.ajax({
                        url: '/ajax/adddaotao',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            macanbo: macanbo,
                            phanloai : phanloai,
                            ngaytu : ngaytu,
                            ngayden : ngayden,
                            tencoso : tencoso,
                            chuyennganh : chuyennganh,
                            hinhthuc : hinhthuc,
                            vanbang : vanbang,
                            ghichu : ghichu
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
                        url: '/ajax/updatedaotao',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            phanloai : phanloai,
                            ngaytu : ngaytu,
                            ngayden : ngayden,
                            tencoso : tencoso,
                            chuyennganh : chuyennganh,
                            hinhthuc : hinhthuc,
                            vanbang : vanbang,
                            ghichu : ghichu,
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