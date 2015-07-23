$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
      $('#nav').addClass('head-shrink');
    } else {
      $('#nav').removeClass('head-shrink');
    };
    
    if ($(this).scrollTop() > 100) {
      $('.addthis_toolbox').addClass('fix').fadeIn();
    } else {
      $('.addthis_toolbox').removeClass('fix').fadeOut();
    }
  });
});