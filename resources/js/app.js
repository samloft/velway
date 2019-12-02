require('./bootstrap');

$(function () {
    setTimeout(function () {
        $('.loader').fadeOut('slow');
    }, 1000);

    if (isInternetExplorer()) {
        $('#home-banner svg').removeAttr('style').attr('style', 'width: 100%; transform: translate3d(0px, 0px, 0px);');
    }

    if ($('#svg-mobile-check').css('display') === 'none') {
        $("#curveDownColor path").attr("d", "M-50 -10 C -10 10 20 600 140 0 Z");
    }
});

$('.contact--floated').on('mouseover', function () {
    $('.contact--floated--expanded').show('slide', {
        direction: 'left',
        distance: '20px'
    }, 400);
});

$('.contact--floated--expanded').on('mouseleave', function () {
    $(this).hide('slide', {
        direction: 'left',
        distance: '10px'
    }, 400);
});

function isInternetExplorer() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    return msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./);
}
