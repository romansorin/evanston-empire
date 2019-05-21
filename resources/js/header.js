$(document).ready(function () {
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        document.querySelector('.navbar-toggler').classList.toggle('is-active');
    });
});


$(document).ready(function () {
    const logo_state = $('.header-logo').attr('src');
    $('#menu-toggle').click(function () {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            if (logo_state.includes('white'))
                $('.header-logo').attr('src', logo_state);
            $('nav.mobile').removeClass('mobile--open');
            $('.header-wrapper').css('background-color', 'transparent');
            $('.mobile-nav').removeClass('hamburger-black');
        } else {
            $(this).addClass('open');
            if (logo_state.includes('white'))
                $('.header-logo').attr('src', "/images/black-evanston-logo.png");
            $('nav.mobile').addClass('mobile--open');
            $('.header-wrapper').css('background-color', 'white');
            $('.mobile-nav').addClass('hamburger-black');
        }
    });
});
