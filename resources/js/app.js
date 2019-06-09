require('./bootstrap');

$(function() {
    setTimeout(function(){
        $('.loader').fadeOut('slow');
    }, 1000);
});

var svgContainer = document.getElementById('home-banner');
var animItem = bodymovin.loadAnimation({
    wrapper: svgContainer,
    animType: 'svg',
    loop: true,
    path: '/images/home-animation.json'
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
