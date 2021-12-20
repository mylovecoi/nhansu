
$(function () {
    //còn pải tính toán
    var url = window.location.href;
    var chk = url.split('/');

    var m = url.indexOf('?');
    if (m > 0) {
        url = url.substring(0, m-1);
    }

    var index = url.indexOf('maso');
    if (index > 0) {
        url = url.substring(0, index-1);
    }

    index = url.indexOf('ma_so');
    if (index > 0) {
        url = url.substring(0, index - 1) + '/danh_sach';
    }

    index = url.indexOf('chi_tiet');
    if (index > 0) {
        url = url.substring(0, index - 1) + '/danh_sach';
    }

    // var j = url.indexOf('create');
    // if (j > 0) {
    //     url = url.substring(0, j-1);
    // }

    index = url.indexOf('detail');
    if (index > 0) {
        url = url.substring(0, index - 1);
    }

    index = chk.indexOf('create');
    if(index > -1) {
        url = '';
        for (var i = 0; i < index; i++) {
            if(i == index - 1){
                url += chk[i];
            }else {
                url += chk[i] + "/";
            }
        }
    }

    index = chk.indexOf('edit');
    if(index > -1) {
        url = '';
        for (var i = 0; i < index; i++) {
            if(i == index - 1){
                url += chk[i];
            }else {
                url += chk[i] + "/";
            }
        }
    }

    //alert(url);
    if (url.split('/').length>4) {
        var subnav = $('ul.menu-subnav a').filter(function () {
            return this.href == url || this.href.indexOf(url) == 0;
        }).parent().addClass('menu-item-active').parent().parent().parent().addClass('menu-item-active').parent().parent().parent().addClass('menu-item-active');
        // if (element.is('li')) {
        //     element.parent().parent().addClass('active').addClass('open');
        // }
        var content = $('ul.menu-content a').filter(function () {
            return this.href == url || this.href.indexOf(url) == 0;
        }).parent().addClass('menu-item-active').parent().parent().addClass('menu-item-active').parent().parent().parent().parent().addClass('menu-item-active');


    }
});



