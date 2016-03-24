$(function(){

  // Мобильная навигация
  mobileNavToggle();

  function mobileNavToggle() {
    var navButton = $('#nav-mobile-toggle'),
        nav = $('#nav-mobile'),
        ignored = navButton.add(nav);

    ignored.on('touchstart', function(e) {
      nav.slideToggle();
      e.stopPropagation(); // Предотвращаем передачу клика в document
    });

    $('header, section').on('touchstart', function() {
      if (nav.is(':visible')) {
        nav.slideToggle();
      }
    });
  }

  // Табы меню
  $('#menu-wrapper .menu-button').on('click', function() {
    var $this = $(this),
        tab = $this.attr('data-tab');

    $(tab).show().siblings('table').hide();
    $this.addClass('active').siblings().removeClass('active');
  });

  // Карта
  // Ловим клик по карте чтобы включить зум
  $('#map').on('click', function(e) {
    $('#map iframe').css('pointer-events', 'auto');
    e.stopPropagation(); // Предотвращаем передачу клика в document
  });

  // Клик за пределами карты отключает зум
  $(document).on('click', function() {
    $('#map iframe').css('pointer-events', 'none');
  });

  // Кнопка "Вверх"
  // Показываем и прячем при прокрутке
  $(window).scroll(function() {
    if ($(this).scrollTop() > 0 && window.matchMedia('(min-width: 900px)').matches) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });
  // Плавно прокручиваем все вверх при нажатии
  $('#back-to-top').on('click', function(){
    $('body,html').animate({
      scrollTop: 0
    }, 400);
  });

});
