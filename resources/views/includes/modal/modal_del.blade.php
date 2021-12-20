<div id="delete-modal-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    {!! Form::open(['url'=>$furl.'delete','id' => 'frm_delete'])!!}
    <input type="hidden" name="iddelete" id="iddelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <h4 id="modal-header-primary-label" class="modal-title">Đồng ý xoá?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                <button type="submit" data-dismiss="modal" class="btn btn-primary" onclick="clickdelete()">Đồng ý</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
<script>
    function confirmDelete(id) {
        document.getElementById("iddelete").value=id;
        //$('#frm_delete').find("[name='iddelete']").val(id);
    }
    function clickdelete(){
        $('#frm_delete').submit();
    }
</script>