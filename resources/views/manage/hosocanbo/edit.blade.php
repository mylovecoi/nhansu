<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 7/7/2016
 * Time: 2:42 PM
 */
?>
@extends('main')

@section('custom-style')
    <link rel="stylesheet" href="{{ url('vendors/jquery-bootstrap-wizard/custom.css') }}">
    <script type="text/javascript" src="{{ url('vendors/jquery-steps/js/jquery.steps.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/form-wizard.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery.inputmask.bundle.min.js') }}"></script>
@stop

@section('script')
    <script type="text/javascript" src="{{ url('vendors/jquery-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/form-validation.js') }}"></script>
@stop


@section('content')
    <div class='page-content'>
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet box">
                    <div class="portlet-header">
                        <div class="caption">SỬA THÔNG TIN HỒ SƠ CÁN BỘ</div>
                    </div>
                    <div class="portlet-body">
                        <div id="rootwizard">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="">
                                        <ul>
                                            <li><a href="#tab1-wizard-custom-circle" data-toggle="tab">
                                                    <i class="glyphicon glyphicon-user"></i>

                                                    <p class="anchor">Bước 1</p>

                                                    <p class="description">Thông tin cơ bản</p></a>
                                            </li>
                                            <li><a href="#tab2-wizard-custom-circle" data-toggle="tab">
                                                    <i class="glyphicon glyphicon-list-alt"></i>

                                                    <p class="anchor">Bước 2</p>

                                                    <p class="description">Thông tin tuyển dụng</p></a>
                                            </li>
                                            <li><a href="#tab3-wizard-custom-circle" data-toggle="tab">
                                                    <i class="glyphicon glyphicon-plus-sign"></i>

                                                    <p class="anchor">Bước 3</p>

                                                    <p class="description">Trình độ cán bộ</p></a>
                                            </li>
                                            <li><a href="#tab4-wizard-custom-circle" data-toggle="tab">
                                                    <i class="glyphicon glyphicon-check"></i>

                                                    <p class="anchor">Bước 4</p>

                                                    <p class="description">Thông tin lương, phụ cấp</p></a>
                                            </li>
                                            <li><a href="#tab5-wizard-custom-circle" data-toggle="tab">
                                                    <i class="glyphicon glyphicon-paperclip"></i>

                                                    <p class="anchor">Bước 5</p>

                                                    <p class="description">Thông tin khác</p></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="bar" class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                            </div>

                            {!! Form::model($model, ['url'=>'/nghiepvu/hoso/'.$model->id, 'method' => 'PATCH', 'files'=>true, 'id' => 'create-hscb', 'class'=>'horizontal-form form-validate', 'enctype'=>'multipart/form-data']) !!}
                            <div class="tab-content">
                                @include('quanly.hosocanbo.include.coban')
                                @include('quanly.hosocanbo.include.tuyendung')
                                @include('quanly.hosocanbo.include.trinhdo')
                                @include('quanly.hosocanbo.include.luong')
                                @include('quanly.hosocanbo.include.khac')

                                <div class="action">
                                    <button type="button" name="previous" value="Previous" class="btn btn-info button-previous">
                                        <i class="fa fa-arrow-circle-o-left mrx"></i>Quay lại
                                    </button>
                                    <button id="btnnext" type="button" name="next" value="Next" class="btn btn-info button-next mlm">
                                        Tiếp theo<i class="fa fa-arrow-circle-o-right mlx"></i></button>
                                    <!-- Kiem tra co quyen moi dc sửa, ko thì chỉ là xem -->
                                    <button type="submit" class="btn btn-success pull-right">Lưu hồ sơ</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
