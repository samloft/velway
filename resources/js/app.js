require('./bootstrap');

$('.contact--floated').on('mouseover', function () {
    // $(this).hide('slide', {
    //     direction: 'right',
    //     distance: '20px'
    // }, 300);

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

    // $('.contact--floated').show();
});
