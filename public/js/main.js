$(function () {
    //còn pải tính toán
    var url = window.location.href;
    var i = url.indexOf('maso');
    var j = url.indexOf('create');

    if (i > 0) {
        url = url.substring(0, i-1);
    }
    if (j > 0) {
        url = url.substring(0, j-1);
    }

    if (url.split('/').length>4) {
        var element = $('ul.sub-menu a').filter(function () {
            return this.href == url || this.href.indexOf(url) == 0;
        }).parent().addClass('active').parent().parent().addClass('active').addClass('open');
        if (element.is('li')) {
            element.parent().parent().addClass('active').addClass('open');
        }
    }
});



