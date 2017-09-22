<!--form4 thông tin luong va phu cap -->
<div id="tab4" class="tab-pane" >
    <div class="form-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Mã ngạch <span class="require">*</span></label>
                    {!!Form::text('msngbac', null, array('id' => 'msngbac','class' => 'form-control','autofocus'=>'autofocus','readonly'=>'true'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Ngạch bậc </label>
                    <select class="form-control select2me" name="tennb" id="tennb" onchange="setMSNGBAC()">
                        @foreach($m_plnb as $plnb)
                            <?php $mode_ct=$m_pln->where('plnb',$plnb->plnb); ?>
                            <optgroup label="{{$plnb->plnb}}">
                                @foreach($mode_ct as $ct)
                                    <option value="{{$ct->msngbac}}">{{$ct->tennb}}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Bậc lương </label>
                    <select class="form-control select2me" name="bac" id="bac" onchange="getHS()">
                        @foreach($m_bac as $nb)
                            <option value="{{$nb->bac}}">{{$nb->bac}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Hệ số lương </label>
                    {!!Form::text('heso', 0, array('id' => 'heso','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>
    </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Hệ số vượt khung </label>
                    {!!Form::text('vuotkhung', 0, array('id' => 'vuotkhung','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phần trăm hưởng </label>
                    {!!Form::text('pthuong', '100', array('id' => 'pthuong','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Từ ngày <span class="require">*</span></label>
                    {!! Form::input('date','ngaytu',null,array('id' => 'ngaytu', 'class' => 'form-control'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Đến ngày <span class="require">*</span></label>
                    {!! Form::input('date','ngayden',null,array('id' => 'ngayden', 'class' => 'form-control'))!!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp chức vụ </label>
                    {!!Form::text('pccv', null, array('id' => 'pccv','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp kiêm nhiệm </label>
                    {!!Form::text('pckn', null, array('id' => 'pckn','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp khu vực </label>
                    {!!Form::text('pckv', null, array('id' => 'pckv','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp công vụ </label>
                    {!!Form::text('pccovu', null, array('id' => 'pccovu','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp trách nhiệm </label>
                    {!!Form::text('pctn', null, array('id' => 'pctn','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class=" control-label">Phụ cấp thâm niên nghề </label>
                    {!!Form::text('pctnn', null, array('id' => 'pctnn','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp thâm niên VK </label>
                    {!!Form::text('pcvk', null, array('id' => 'pcvk','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp đại biểu HĐND </label>
                    {!!Form::text('pcdbqh', null, array('id' => 'pcdbqh','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp thu hút </label>
                    {!!Form::text('pcth', null, array('id' => 'pcth','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp ưu đãi </label>
                    {!!Form::text('pcudn', null, array('id' => 'pcudn','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp đặc biệt </label>
                    {!!Form::text('pcdbn', null, array('id' => 'pcdbn','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp lưu động </label>
                    {!!Form::text('pcld', null, array('id' => 'pcld','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp độc hại </label>
                    {!!Form::text('pcdh', null, array('id' => 'pcdh','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp lưu động </label>
                    {!!Form::text('pcld', null, array('id' => 'pcld','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Phụ cấp khác </label>
                    {!!Form::text('pck', null, array('id' => 'pck','class' => 'form-control', 'data-mask'=>'fdecimal'))!!}
                </div>
            </div>

        </div>
    </div>
</div>
@include('includes.script.func_msnb')
<!--end form4 -->