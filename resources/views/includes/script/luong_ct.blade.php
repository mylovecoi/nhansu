<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 8/8/2016
 * Time: 2:31 PM
 */?>
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