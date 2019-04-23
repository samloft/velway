require('./bootstrap');

$('.contact--floated').on('mouseover', function () {
    $(this).hide();
    $('.contact--floated--expanded').show('fadein');
});

$('.contact--floated--expanded').on('mouseleave', function () {
    $(this).hide();
    $('.contact--floated').show();
});
