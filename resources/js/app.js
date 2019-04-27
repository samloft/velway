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

$('.video-container').parent().click(function () {
    var video = $('video'),
        play = $('.play');

    if (video.get(0).paused) {
        video.get(0).play();
        play.fadeOut();
    } else {
        video.get(0).pause();
        play.fadeIn();
    }
});
