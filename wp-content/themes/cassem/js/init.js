$(document).ready(function () {

    $('.menu li a').click(function () {
        var section = $(this).attr('href');
        $(section).animatescroll({scrollSpeed:2000,easing:'easeInOutBack',padding:0});
        return false;
    });

});
