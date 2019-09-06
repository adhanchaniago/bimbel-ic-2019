jQuery(document).ready(function($) {
  $('.m-list-alumni').slick({
    appendArrows: '.o-home-alumni > .container',
    prevArrow: '<a class="slick-arrow slick-prev"><i class="fa fa-chevron-left"></i></a>',
    nextArrow: '<a class="slick-arrow slick-next"><i class="fa fa-chevron-right"></i></a>',
    autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1169,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 959,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.m-video-player > .video-wrap > .placeholder').on('click', function(event) {
    event.preventDefault();
    var player = $(this).parent().find('.player'),
        frame = player.find('iframe');

    player.show();
    frame.attr('src', frame.attr('src') + '&autoplay=1');
  });
});

jQuery(window).load(function() {
  // http://codepen.io/micahgodbolt/pen/FgqLc
  equalheight = function(container) {
  var currentTallest = 0,
       currentRowStart = 0,
       rowDivs = new Array(),
       $el,
       topPosition = 0;
   jQuery(container).each(function() {

     $el = jQuery(this);
     jQuery($el).height('auto')
     topPostion = $el.position().top;

     if (currentRowStart != topPostion) {
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }
       rowDivs.length = 0; // empty the array
       currentRowStart = topPostion;
       currentTallest = $el.height();
       rowDivs.push($el);
     } else {
       rowDivs.push($el);
       currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
    }
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
   });
  }

  equalheight('.m-keunggulan');
  equalheight('.m-testimoni');
});