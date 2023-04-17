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
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNjcmlwdC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJidW5kbGUuanMiLCJzb3VyY2VzQ29udGVudCI6WyJqUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCQpe1xyXG5cclxuICB2YXIgaGVhZGVySGVpZ2h0ID0gJCgnaGVhZGVyJykub3V0ZXJIZWlnaHQoKTtcclxuXHJcbiAgLy8gc3RpY2t5IGhlYWRlciBzdHlsaW5nXHJcbiAgJCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpIHtcclxuICAgIGlmICgkKHRoaXMpLnNjcm9sbFRvcCgpID4gaGVhZGVySGVpZ2h0KXtcclxuICAgICAgJCgnaGVhZGVyJykuYWRkQ2xhc3MoXCJzY3JvbGxlZFwiKTtcclxuICAgIH1cclxuICAgIGVsc2V7XHJcbiAgICAgICQoJ2hlYWRlcicpLnJlbW92ZUNsYXNzKFwic2Nyb2xsZWRcIik7XHJcbiAgICB9XHJcbiAgfSk7XHJcbiAgXHJcbiAgLy8gY3JlYXRlIGFsbCBzbGlkZXJzXHJcbiAgJCgnc2VjdGlvbiAuc3dpcGVyJykuZWFjaChmdW5jdGlvbihpKSB7XHJcbiAgICB2YXIgYmxvY2tDbGFzcyA9ICcuJyArICQodGhpcykucGFyZW50KCkuYXR0cignY2xhc3MnKS5zcGxpdCgnICcpWzBdICsgJyAuc3dpcGVyJztcclxuICAgIHZhciBhX3NwZWVkID0gcGFyc2VJbnQoICQodGhpcykuYXR0cignY2xhc3MnKS5zcGxpdCgnICcpWzJdICk7XHJcbiAgICBcclxuICAgIGlmICggJCh0aGlzKS5oYXNDbGFzcygnbG9vcCcpICkge1xyXG4gICAgICB2YXIgYV9sb29wID0gdHJ1ZTtcclxuICAgIH07XHJcblxyXG4gICAgaWYgKCAkKHRoaXMpLmhhc0NsYXNzKCdhdXRvcGxheScpICkge1xyXG4gICAgICB2YXIgYV9hdXRvcGxheSA9IHsgZGVsYXk6IHBhcnNlSW50KCAkKHRoaXMpLmF0dHIoJ2NsYXNzJykuc3BsaXQoJyAnKVs1XSApLCB9O1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgdmFyIGFfYXV0b3BsYXkgPSBmYWxzZTtcclxuICAgIH07XHJcblxyXG4gICAgaWYgKCAkKGJsb2NrQ2xhc3MpLmhhc0NsYXNzKCdmYWRlJykgKSB7XHJcbiAgICAgIHZhciBlZmZlY3QgPSAnZmFkZSc7XHJcbiAgICB9IGVsc2UgaWYgKCAkKGJsb2NrQ2xhc3MpLmhhc0NsYXNzKCdjb3ZlcmZsb3cnKSApIHtcclxuICAgICAgdmFyIGVmZmVjdCA9ICdjb3ZlcmZsb3cnO1xyXG4gICAgfSBlbHNlIGlmICggJChibG9ja0NsYXNzKS5oYXNDbGFzcygnZmxpcCcpICkge1xyXG4gICAgICB2YXIgZWZmZWN0ID0gJ2ZsaXAnO1xyXG4gICAgfSBlbHNlIGlmICggJChibG9ja0NsYXNzKS5oYXNDbGFzcygnY3ViZScpICkge1xyXG4gICAgICB2YXIgZWZmZWN0ID0gJ2N1YmUnO1xyXG4gICAgfSBlbHNlIGlmICggJChibG9ja0NsYXNzKS5oYXNDbGFzcygnY3JlYXRpdmUnKSApIHtcclxuICAgICAgdmFyIGVmZmVjdCA9ICdjcmVhdGl2ZSc7XHJcbiAgICB9XHJcblxyXG4gICAgbmV3IFN3aXBlcihibG9ja0NsYXNzLCB7XHJcbiAgICAgIHNwZWVkOiBhX3NwZWVkLFxyXG4gICAgICBzcGFjZUJldHdlZW46IDAsXHJcbiAgICAgIHNsaWRlc1BlclZpZXc6IDEsXHJcbiAgICAgIGxvb3A6IGFfbG9vcCxcclxuICAgICAgYXV0b3BsYXk6IGFfYXV0b3BsYXksXHJcbiAgICAgIGVmZmVjdDogZWZmZWN0LFxyXG4gICAgfSk7XHJcbiAgfSk7XHJcblxyXG59KTsiXX0=
