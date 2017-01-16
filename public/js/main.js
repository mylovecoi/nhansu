$(function () {
    //còn pải tính toán

    var url = window.location.href;
    var i = url.indexOf('maso');

    if (i > 0) {
        url = url.substring(0, i);
    }
    if (url != 'http://nhansu.dev/') {
        var element = $('ul.sub-menu a').filter(function () {
            return this.href == url || this.href.indexOf(url) == 0;
        }).parent().addClass('active').parent().parent().addClass('active').addClass('open');
        if (element.is('li')) {
            element.parent().parent().addClass('active').addClass('open');
        }
    }
});



