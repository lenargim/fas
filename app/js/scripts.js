$(document).ready(function () {
  $('.tel').mask('+7(Z00)000-00-00', {translation: {'Z': {pattern: /[0-79]/}}});  // length === 16


  const form = $('.callback__form');

  form.find('input').on('input change', function () {
    form.find('input[name=name]').val().length >= 2 && form.find('input[name=tel]').val().length === 16
      ? form.find('.callback__button').prop( "disabled", false )
      : form.find('.callback__button').prop( "disabled", true )
  });

  $('.callback__button').on('click', function (e) {
    e.preventDefault();
    form[0].reset();
    $('.overlay').addClass('active');
    $('.modal').addClass('active');
  })

  $('.modal__close').on('click', function () {
    $('.overlay').removeClass('active');
    $('.modal').removeClass('active');
  })

  const mainSlider = new Swiper('.main__slider', {
    spaceBetween: 30,
    loop: true,
    watchSlidesProgress: true,
    slideVisibleClass: 'visible',
    longSwipes: false,

    pagination: {
      el: '.pagination',
      clickable: true,
      currentClass: 'active',
      bulletClass: 'bullet',
      bulletActiveClass: 'bullet-active',
    },

    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      1280: {
        slidesPerView: 2,
      }
    }
  });

  const rentSlider = new Swiper('.rent__slider', {
    spaceBetween: 30,
    loop: true,
    watchSlidesProgress: true,
    slideVisibleClass: 'visible',
    pagination: {
      el: '.pagination',
      clickable: true,
      currentClass: 'active',
      bulletClass: 'bullet',
      bulletActiveClass: 'bullet-active',
    },

    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      1280: {
        slidesPerView: 2,
      }
    }
  });


  $(window).on('scroll', function (event) {
    let block = $('.side');
    if (block.length > 0) {
      let parent = block.parent();
      let initialTop = parent.offset().top;
      let top = $(window).scrollTop() - initialTop;
      checkViewport(block, parent) ? block.css('top', top) : block.css('top', 0)
    }
  });

  function checkViewport(el, box) {
    let viewportTop = $(window).scrollTop();
    let boxTop = box.offset().top;
    let boxBottom = boxTop + box.outerHeight();
    return boxTop < viewportTop && viewportTop < boxBottom - el.outerHeight()
  }
});