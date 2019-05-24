window.$ = require('jquery');
require('slick-carousel');
import 'slick-carousel/slick/slick.scss'; // switch this out for custom stylesheet imports
import 'slick-carousel/slick/slick-theme.scss';


$(".center").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    speed: 600,
    infinite: true,
    mobileFirst: true,
    centerMode: true,
    variableWidth: true,
    variableHeight: true,
    focusOnSelect: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
$("#gallery-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    rows: 3,
    autoplay: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
