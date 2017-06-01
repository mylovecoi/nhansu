<!--form1 thông tin cơ bản -->
<div id="tab4" class="tab-pane" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label" for="plnb">Mã ngạch <span class="require">*</span></label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('msngbac', null, array('id' => 'msngbac','class' => 'form-control','autofocus'=>'autofocus','readonly'=>'true'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Ngạch bậc </label>
                    <div class="col-sm-9">
                        <select class="form-control select2me" name="tennb" id="tennb" required="required" onchange="setMSNGBAC()">
                            @foreach($m_plnb as $plnb)
                                <optgroup label="{{$plnb->plnb}}">
                                    <?php
                                    $mode_ct=$m_pln->where('plnb',$plnb->plnb);
                                    ?>
                                    @foreach($mode_ct as $ct)
                                        <option value="{{$ct->msngbac}}">{{$ct->tennb}}</option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Bậc lương </label>

                    <div class="col-sm-6 controls">
                        <select class="form-control select2me" name="bac" id="bac" onchange="getHS()">
                            @foreach($m_bac as $nb)
                                <option value="{{$nb->bac}}">{{$nb->bac}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Hệ số lương </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('heso', 0, array('id' => 'heso','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Hệ số vượt khung </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('vuotkhung', 0, array('id' => 'vuotkhung','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Phần trăm hưởng </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pthuong', '100', array('id' => 'pthuong','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Từ ngày <span class="require">*</span></label>

                    <div class="col-sm-6 controls">
                        {!! Form::input('date','ngaytu',null,array('id' => 'ngaytu', 'class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Đến ngày <span class="require">*</span></label>

                    <div class="col-sm-6 controls">
                        {!! Form::input('date','ngayden',null,array('id' => 'ngayden', 'class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Phụ cấp chức vụ </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pccv', null, array('id' => 'pccv','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">PC thâm niên nghề </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pctnn', null, array('id' => 'pctnn','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">PC thâm niên VK </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pcvk', null, array('id' => 'pcvk','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Phụ cấp kiêm nhiệm </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pckn', null, array('id' => 'pckn','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Phụ cấp trách nhiệm </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pctn', null, array('id' => 'pctn','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Phụ cấp khu vực </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pckv', null, array('id' => 'pckv','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Phụ cấp thu hút </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pcth', null, array('id' => 'pcth','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Phụ cấp ưu đãi </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pcudn', null, array('id' => 'pcudn','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Phụ cấp đặc biệt </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pcdbn', null, array('id' => 'pcdbn','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Phụ cấp lưu động </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pcld', null, array('id' => 'pcld','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Phụ cấp độc hại </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pcdh', null, array('id' => 'pcdh','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Phụ cấp khác </label>

                    <div class="col-sm-6 controls">
                        {!!Form::text('pck', null, array('id' => 'pck','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.script.func_msnb')
<!--end form4 -->