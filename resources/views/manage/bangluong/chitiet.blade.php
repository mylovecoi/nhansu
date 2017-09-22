@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        THÔNG TIN CHI TIẾT LƯƠNG CỦA CÁN BỘ {{$model->tencanbo}}
                    </div>
                    <div class="actions">

                    </div>
                </div>
                <div class="portlet-body">
                    {!! Form::model($model, ['url'=>'/chuc_nang/bang_luong/updatect/'.$model->id, 'method' => 'POST', 'files'=>true, 'id' => 'create-hscb', 'class'=>'horizontal-form form-validate', 'enctype'=>'multipart/form-data']) !!}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Mã ngạch </label>{!!Form::text('msngbac', null, array('id' => 'msngbac','class' => 'form-control','readonly'=>'true'))!!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Tên ngạch bậc </label>
                                        {!!Form::text('tennb', null, array('id' => 'tennb','class' => 'form-control','readonly'=>'true'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Hệ số lương </label>
                                        {!!Form::text('heso', null, array('id' => 'heso','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Hệ số vượt khung </label>
                                        {!!Form::text('vuotkhung', null, array('id' => 'vuotkhung','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp chức vụ </label>
                                        {!!Form::text('pccv', null, array('id' => 'pccv','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">PC thâm niên nghề </label>
                                        {!!Form::text('pctnn', null, array('id' => 'pctnn','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">PC thâm niên VK </label>
                                        {!!Form::text('pcvk', null, array('id' => 'pcvk','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp kiêm nhiệm </label>
                                        {!!Form::text('pckn', null, array('id' => 'pckn','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp trách nhiệm </label>
                                        {!!Form::text('pctn', null, array('id' => 'pctn','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp khu vực </label>
                                        {!!Form::text('pckv', null, array('id' => 'pckv','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp thu hút </label>
                                        {!!Form::text('pcth', null, array('id' => 'pcth','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp ưu đãi </label>
                                        {!!Form::text('pcudn', null, array('id' => 'pcudn','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp đặc biệt </label>
                                        {!!Form::text('pcdbn', null, array('id' => 'pcdbn','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp lưu động </label>
                                        {!!Form::text('pcld', null, array('id' => 'pcld','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp độc hại </label>
                                        {!!Form::text('pcdh', null, array('id' => 'pcdh','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp công vụ </label>
                                        {!!Form::text('pccovu', null, array('id' => 'pccovu','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp ĐBHĐND</label>
                                        {!!Form::text('pcdbqh', null, array('id' => 'pcdbqh','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Phụ cấp khác </label>
                                        {!!Form::text('pck', null, array('id' => 'pck','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Tổng hệ số </label>
                                        {!!Form::text('tonghs', null, array('id' => 'tonghs','class' => 'form-control', 'data-mask'=>'fdecimal','readonly'=>'true','style'=>'font-weight:bold'))!!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Tổng tiền lương </label>
                                        {!!Form::text('ttl', null, array('id' => 'ttl','class' => 'form-control', 'data-mask'=>'fdecimal','readonly'=>'true','style'=>'font-weight:bold'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Giảm trừ lương </label>
                                        {!!Form::text('giaml', null, array('id' => 'giaml','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Bảo hiểm chi trả </label>
                                        {!!Form::text('bhct', null, array('id' => 'bhct','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Số tiền BHXH </label>
                                        {!!Form::text('stbhxh', null, array('id' => 'stbhxh','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Số tiền BHYT </label>
                                        {!!Form::text('stbhyt', null, array('id' => 'stbhyt','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Số tiền KPCĐ </label>
                                        {!!Form::text('stkpcd', null, array('id' => 'stkpcd','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Số tiền BHTN </label>
                                        {!!Form::text('stbhtn', null, array('id' => 'stbhtn','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Tổng tiền cá nhân nộp bảo hiểm </label>
                                        {!!Form::text('ttbh', null, array('id' => 'ttbh','class' => 'form-control', 'data-mask'=>'fdecimal','readonly'=>'true','style'=>'font-weight:bold'))!!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">BHXH đơn vị nộp</label>
                                        {!!Form::text('stbhxh_dv', null, array('id' => 'stbhxh_dv','class' => 'form-control baohiem_dv', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">BHYT đơn vị nộp</label>
                                        {!!Form::text('stbhyt_dv', null, array('id' => 'stbhyt_dv','class' => 'form-control baohiem_dv', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">KPCĐ đơn vị nộp</label>
                                        {!!Form::text('stkpcd_dv', null, array('id' => 'stkpcd_dv','class' => 'form-control baohiem_dv', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">BHTN đơn vị nộp</label>
                                        {!!Form::text('stbhtn_dv', null, array('id' => 'stbhtn_dv','class' => 'form-control baohiem_dv', 'data-mask'=>'fdecimal'))!!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Tổng tiền đơn vị nộp bảo hiểm</label>
                                        {!!Form::text('ttbh_dv', null, array('id' => 'ttbh_dv','class' => 'form-control', 'data-mask'=>'fdecimal','readonly'=>'true','style'=>'font-weight:bold'))!!}
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label"><b>Lương thực nhận </b></label>
                                        {!!Form::text('luongtn', null, array('id' => 'luongtn','class' => 'form-control', 'data-mask'=>'fdecimal','readonly'=>'true','style'=>'font-weight:bold'))!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center; border-top: 1px solid #eee;">
                            <button style="margin-top: 10px" type="submit" class="btn btn-success">Hoàn thành<i class="fa fa-save mlx"></i></button>
                        </div>
                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </div>
    <script>
        function getdl(str){
            var kq=0;
            str=str.replace(',','');
            if(!isNaN(str)){
                kq=str;
            }
            return parseFloat(kq);
        }

        function tonghs() {
            var hs = 0;
            $('.heso').each(function () {
                hs += getdl($(this).val());
            });
            $('#tonghs').val(hs.toFixed(2));
        }

        function tongtl(){
            var hs=$('#tonghs').val();
            var luong = {{getGeneralConfigs()['luongcb']}};
            return (hs*luong);
        }

        function baohiem(){
            var stbhxh=getdl($('#stbhxh').val());
            var stbhyt=getdl($('#stbhyt').val());
            var stkpcd=getdl($('#stkpcd').val());
            var stbhtn=getdl($('#stbhtn').val());
            //alert(stbhxh);
            return stbhxh+stbhyt+stkpcd+stbhtn;
        }

        function giamtru(){
            var giaml=getdl($('#giaml').val());
            var bhct=getdl($('#bhct').val());
            return bhct-giaml;
        }

        function luongtn() {
            var ttl = parseFloat(tongtl().toFixed(0));
            var bh = baohiem();
            var gt =giamtru();
            $('#ttl').val(ttl);
            $('#ttbh').val(bh);
            $('#luongtn').val(ttl + gt - bh);
        }
        $('.heso').change(function(){
            tonghs();
            luongtn();
        })

        $('.tienluong').change(function(){
            luongtn();
        })

        $('.baohiem_dv').change(function(){
            var stbhxh_dv=getdl($('#stbhxh_dv').val());
            var stbhyt_dv=getdl($('#stbhyt_dv').val());
            var stkpcd_dv=getdl($('#stkpcd_dv').val());
            var stbhtn_dv=getdl($('#stbhtn_dv').val());
            $('#ttbh_dv').val(stbhxh_dv+stbhyt_dv+stkpcd_dv+stbhtn_dv);
        })

    </script>
    @include('includes.script.scripts')
@stop