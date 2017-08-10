//$(document).ready(function () {
//
//    $(window).scroll(function () {
//        if ($(this).scrollTop() > 100) {
//            $('.arrow').fadeIn();
//        } else {
//            $('.arrow').fadeOut();
//        }
//    });
//
//    $('.arrow').click(function () {
//        $("html, body").animate({
//            scrollTop: 0
//        }, 600);
//        return false;
//    });
//
//});

//$(document).ready(function () {
//    function getActualWidth()
//    {
//        var actualWidth = window.innerWidth ||
//                          document.documentElement.clientWidth ||
//                          document.body.clientWidth ||
//                          document.body.offsetWidth;
//
//        return actualWidth;
//    };

function myFunction() {
    document.getElementById("myDIV").classList.add("mystyle");
}

    function responsive() {
        var classe = document.getElementsByClassName('masonry-item');
        classe.classList.remove("m1r2c");
        classe.classList.add("m2r1c");
    };

    if (window.innerWidth < 1200) {
        responsive();
    }
//});
