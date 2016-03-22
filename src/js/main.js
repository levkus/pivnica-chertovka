$('#menu-mobile-toggle').on('touchstart', function() {
  $('#menu-mobile').slideToggle();
});

$('#kitchen-button').on('click', function(){
  $(this).addClass('active');
  $('#bar-button').removeClass('active');
  $('#bar').hide();
  $('#kitchen').show();
});

$('#bar-button').on('click', function(){
  $(this).addClass('active');
  $('#kitchen-button').removeClass('active');
  $('#kitchen').hide();
  $('#bar').show();
});

$(function(){

  $(window).scroll(function() {
    if ($(this).scrollTop() > 0 && window.matchMedia('(min-width: 900px)').matches) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });

  $('#back-to-top').on('click', function(){
    $('body,html').animate({
      scrollTop: 0
    }, 400);
  });

});