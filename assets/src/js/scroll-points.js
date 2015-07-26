$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
      $('#nav').addClass('head-shrink');
      $('.socials').addClass('topper')
    } else {
      $('#nav').removeClass('head-shrink');
      $('.socials').removeClass('topper')
    };

    if ($(this).scrollTop() > 100) {
      $('.social').addClass('fix').fadeIn();
    } else {
      $('.social').removeClass('fix').hide();
    }
  });
});

$(window).bind("load", function() {
   $('.socials').delay( 400 ).fadeIn(400);
});