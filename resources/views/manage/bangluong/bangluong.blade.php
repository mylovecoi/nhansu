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
                                <b>CHI TIẾT BẢNG LƯƠNG THÁNG {{$m_bl->thang}} NĂM {{$m_bl->nam}}</b>
                            </div>
                            <div class="actions">

                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="dataTables_wrapper">
                                <table id="table_id" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 5%">STT</th>
                                        <th style="width: 15%">Mã công chức</th>
                                        <th style="width: 20%">Họ tên</th>
                                        <th style="width: 15%">Chức vụ</th>
                                        <th style="width: 15%">Mã ngạch</th>
                                        <th style="width: 15%">Thực lĩnh</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <?php $stt =0;?>
                                    <tbody>
                                        @if(isset($model))
                                            @foreach($model as $ct)
                                                <tr>
                                                    <td class="text-center">{{++$stt}}</td>
                                                    <td>{{$ct->masoms}}</td>
                                                    <td>{{$ct->tencanbo}}</td>
                                                    <td>{{$ct->tencv}}</td>
                                                    <td>{{$ct->msngbac}}</td>
                                                    <td>{{number_format($ct->luongtn)}}</td>
                                                    <td>
                                                        <a href="{{url($furl.'chitiet/'.$ct->id)}}" class="btn btn-info btn-xs mbs">
                                                            <i class="fa fa-edit"></i>&nbsp; Chi tiết</a>
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
        <form id="frmADD" method="GET" action="{{url('/chucnang/luong/create')}}" accept-charset="UTF-8">
            <div class="modal-dialog modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-header-primary-label" class="modal-title">Tạo bảng lương</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Tháng<span class="require">*</span></label>
                            <div class="col-md-8">
                                {!! Form::select(
                                'thang',
                                array(
                                '01' => '01',
                                '02' => '02',
                                '03' => '03',
                                '04' => '04',
                                '05' => '05',
                                '06' => '06',
                                '07' => '07',
                                '08' => '08',
                                '09' => '09',
                                '10' => '10',
                                '11' => '11',
                                '12' => '12',
                                ),null,
                                array('id' => 'thang', 'class' => 'form-control'))
                                !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Năm<span class="require">*</span></label>
                            <div class="col-md-8">
                                {!! Form::select(
                                'nam',
                                array(
                                '2015' => '2015',
                                '2016' => '2016',
                                '2017' => '2017'
                                ),null,
                                array('id' => 'nam', 'class' => 'form-control'))
                                !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Nội dung</label>
                            <div class="col-md-8">
                                {!! Form::textarea('noidung',null,array('id' => 'noidung', 'class' => 'form-control','rows'=>'3'))!!}
                            </div>
                        </div>

                        <input type="hidden" id="id_ct" name="id_ct"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                    <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Đồng ý</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function add(){
            $('#thang').val('');
            $('#nam').val('');
            $('#noidung').val('');
            $('#id_ct').val(0);
            $('#chitiet-modal').modal('show');
        }
    </script>

    @include('includes.modal.delete')
@stop