jQuery(document).ready(function($){

  var headerHeight = $('header').outerHeight();

  // sticky header styling
  $(window).scroll(function() {
    if ($(this).scrollTop() > headerHeight){
      $('header').addClass("scrolled");
    }
    else{
      $('header').removeClass("scrolled");
    }
  });
  
  // create all sliders
  $('section .swiper').each(function(i) {
    var blockClass = '.' + $(this).parent().attr('class').split(' ')[0] + ' .swiper';
    var a_speed = parseInt( $(this).attr('class').split(' ')[2] );
    
    if ( $(this).hasClass('loop') ) {
      var a_loop = true;
    };

    if ( $(this).hasClass('autoplay') ) {
      var a_autoplay = { delay: parseInt( $(this).attr('class').split(' ')[5] ), };
    } else {
      var a_autoplay = false;
    };

    if ( $(blockClass).hasClass('fade') ) {
      var effect = 'fade';
    } else if ( $(blockClass).hasClass('coverflow') ) {
      var effect = 'coverflow';
    } else if ( $(blockClass).hasClass('flip') ) {
      var effect = 'flip';
    } else if ( $(blockClass).hasClass('cube') ) {
      var effect = 'cube';
    } else if ( $(blockClass).hasClass('creative') ) {
      var effect = 'creative';
    }

    new Swiper(blockClass, {
      speed: a_speed,
      spaceBetween: 0,
      slidesPerView: 1,
      loop: a_loop,
      autoplay: a_autoplay,
      effect: effect,
    });
  });

});