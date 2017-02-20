<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 24/06/2016
 * Time: 4:00 PM
 */
        ?>
@extends('main')

@section('content')
    <div class="page-content">
        <div class="col-lg-12">
            <div class="row">
                <div class="portlet box">
                    <div class="portlet-header">
                        <div class="caption">
                            <b>BÁO CÁO THEO BIỂU MẪU THÔNG TƯ, QUYẾT ĐỊNH</b>
                        </div>
                        <div class="actions">
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="ul-report">
                                    <li><a href="#" data-target="#thoaibcdscb-modal" data-toggle="modal" onclick="baocao('{{$furl.'BcDSTuyenDungTT08'}}')">Báo cáo danh sách cán bộ được tuyển dụng (Mẫu 01/Thông tư 08)</a></li>
                                    <li><a href="#" data-target="#thoaibcdscb-modal" data-toggle="modal" onclick="baocao('{{$furl.'BcDSTuyenDungTT10'}}')">Báo cáo danh sách cán bộ được tuyển dụng (Mẫu 04/Thông tư 10)</a></li>

                                    <li><a href="#" data-target="#thoaibcth-modal" data-toggle="modal" onclick="baocaoth('{{$furl.'BcDSCC'}}')">Báo cáo danh sách cán bộ công chức (Mẫu 3/Thông tư 09)</a></li>
                                    <li><a href="#" data-target="#thoaibcth-modal" data-toggle="modal" onclick="baocaoth('{{$furl.'BcDSVC'}}')">Báo cáo danh sách cán bộ viên chức (Mẫu 3/Thông tư 09)</a></li>

                                    <li><a href="#" data-target="#thoaibcth-modal" data-toggle="modal" onclick="baocaoth('{{$furl.'BcSLCLCC'}}')">Báo cáo số lượng chất lượng cán bộ công chức (Mẫu 4/TT09)</a></li>
                                    <li><a href="#" data-target="#thoaibcth-modal" data-toggle="modal" onclick="baocaoth('{{$furl.'BcSLCLVC'}}')">Báo cáo số lượng chất lượng cán bộ viên chức (Mẫu 7/TT10)</a></li>

                                    <li><a href="#" data-target="#thoaibcth-modal" data-toggle="modal" onclick="baocaoth('{{$furl.'BcDSCCCVCC'}}')">Báo cáo danh sách công chức ngạch chuyên viên chính và chuyên viên cao cấp (Mẫu 6/TT10)</a></li>
                                    <li><a href="#" data-target="#thoaibcth-modal" data-toggle="modal" onclick="baocaoth('{{$furl.'BcDSVCCVCC'}}')">Báo cáo danh sách viên chức ngạch chuyên viên chính và chuyên viên cao cấp (Mẫu 6/TT10)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('reports.mauchuan.modal')

    <script>
        function baocao(url){
            $('#thoaibcdscb').attr('action',url);
        }

        function baocaoth(url){
            $('#thoaibcth').attr('action',url);
        }

        $(function(){
            $('#thoaibcdscb :submit').click(function() {
                var valid=true;
                var message='';
                var ngaytu=$('#ngaytu').val();
                var ngayden=$('#ngayden').val();

                if(ngaytu=='' || ngayden==''){
                    valid=false;
                    message='Ngày báo cáo không được bỏ trống';
                }

                if (valid == false){
                    alert(message);
                    $("form").submit(function (e) {
                        e.preventDefault();
                    });
                }
                else{
                    $("form").unbind('submit').submit();
                    //$('#chitiet-modal').modal('hiden');
                }
            });

            $('#thoaibcth :submit').click(function() {
                var valid=true;
                var message='';
                var ngaybaocao=$('#ngaybaocao').val();

                if(ngaybaocao==''){
                    valid=false;
                    message='Ngày báo cáo không được bỏ trống';
                }

                if (valid == false){
                    alert(message);
                    $("form").submit(function (e) {
                        e.preventDefault();
                    });
                }
                else{
                    //$('#thoaibcth').modal('hide');
                    $("form").unbind('submit').submit();
                }
            });
        });
    </script>
@stop