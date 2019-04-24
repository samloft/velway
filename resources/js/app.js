require('./bootstrap');

$('.contact--floated').on('mouseover', function () {
    $(this).hide('slide', {
        direction: 'left',
        distance: '20px'
    }, 300);

    $('.contact--floated--expanded').show('slide', {
        direction: 'right'
    }, 300);
});

$('.contact--floated--expanded').on('mouseleave', function () {
    $(this).hide();
    $('.contact--floated').show();
});
