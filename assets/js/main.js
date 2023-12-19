(function ($) {
  $(document).ready(function () {
    // START HEADER
    $('.topmenu > ul > li > a').each(function () {
      if ($(this).next('ul').length > 0) {
        $(this).after('<div class="arr-nav"></div>');
      }
    });

    $('.topmenu > ul > li').mouseenter(function () {
      if (window.innerWidth >= 1036) {
        $(this).children('ul').fadeIn();
      }
    });
    $('.topmenu > ul > li').mouseleave(function () {
      if (window.innerWidth >= 1036) {
        $(this).children('ul').fadeOut();
      }
    });

    // start mob
    $('.topmenu .arr-nav').on('click', function () {
      if (window.innerWidth <= 1036) {
        $(this).next('ul').slideToggle();
        $(this).toggleClass('active');
      }
    });

    $('.burger').on('click', function () {
      $('.header__menu').addClass('active');
    });

    $('.header__btn-close').on('click', function () {
      $('.header__menu').removeClass('active');
    });
    // end mob
    // END HEADER

    // START FAQ
    $('.faq-question .btn').on('click', function () {
      $(this).parent('.faq-question').next('.faq-answer').slideToggle();
      $(this).toggleClass('active');
    });
    // END FAQ

    // START history
    $('.histslider2__inner').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.histslider1__inner',
      infinite: false,
      arrows: false,
      focusOnSelect: true,
      draggable: false,
    });

    $('.histslider1__inner').slick({
      slidesToShow: 12,
      slidesToScroll: 1,
      asNavFor: '.histslider2__inner',
      focusOnSelect: true,
      infinite: false,
      arrows: false,
      swipe: false,
      draggable: false,
    });

    $('.next-arrow').on('click', function () {
      $('.histslider2__inner').slick('slickNext');
    });
    $('.prev-arrow').on('click', function () {
      $('.histslider2__inner').slick('slickPrev');
    });

    // END history
  });
})(jQuery);
