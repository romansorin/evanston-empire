$(document).ready(function () {
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        document.querySelector('.navbar-toggler').classList.toggle('is-active');
    });
});


$(document).ready(function () {
    $('#menu-toggle').click(function () {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $('nav.mobile').removeClass('mobile--open');
            $('.header-wrapper').css('background-color', 'transparent');
            $('.mobile-nav').removeClass('hamburger-black');
        } else {
            $(this).addClass('open');
            $('nav.mobile').addClass('mobile--open');
            $('.header-wrapper').css('background-color', 'white');
            $('.mobile-nav').addClass('hamburger-black');
        }
    });
});
