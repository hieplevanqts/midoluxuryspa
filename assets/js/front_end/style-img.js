
$( window ).load(function() {
    render_size();
    var url = window.location.href;
    $('.menu-item  a[href="' + url + '"]').parent().addClass('active');
});

$( window ).resize(function() {
    render_size();
});



function render_size(){

    var h_692 = $('.h_692 img').width();
    $('.h_692 img').height( 0.692 * parseInt(h_692));

    var h_1_prod = $('.h_1_prod img').width();
    $('.h_1_prod img').height( 1 * parseInt(h_1_prod));

    var h_1_news_lq = $('.h_1_news_lq img').width();
    $('.h_1_news_lq img').height( 1 * parseInt(h_1_news_lq));

    var h_7342 = $('.h_7342 img').width();
    $('.h_7342 img').height( 0.7342 * parseInt(h_7342));

}


if (window.innerWidth > 768) {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 30) {
            $('.sticky-header').addClass('fixed');
        } else {
            $('.sticky-header').removeClass('fixed');
        }
    });
}
if (window.innerWidth > 320) {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 30) {
            $('.sticky-header').addClass('clearfix');
        } else {
            $('.sticky-header').removeClass('clearfix');
        }
    });
}