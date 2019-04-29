window.$ = window.jQuery = require('jquery');
require('slick-carousel');
import 'slick-carousel/slick/slick.scss'; // switch this out for custom stylesheet imports
import 'slick-carousel/slick/slick-theme.scss';


$(".center").slick({
        dots: true,
  infinite: true,
  speed: 300,
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  slidesToScroll: 1,
  focusOnSelect: true,
  responsive: [
    {
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
