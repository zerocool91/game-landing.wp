$(document).ready(function() {
  $('.active-language').on('click', function() {
    $('.language-list').toggleClass('show-list');
  });

  $('.menu-toggler').on('click', function() {
    $('.main-menu').toggleClass('show-menu');
  });

  $('.owl-carousel').owlCarousel({
    nav: true,
    loop: true,
    dots: true,
    margin: 0,
    items: 1,
    autoHeight: true
  });

  $('#features .acc .acc-item .circle:first').addClass('full');
  $('#features .acc .acc-item .acc-title').on('click', function() {
    $('#features .acc .acc-item .acc-content').not($(this).next()).slideUp(500);
    $(this).next().slideToggle(500);
    $('.circle').not($(this).find('.circle')).removeClass('full')
    $(this).find('.circle').toggleClass('full');
  });
})
