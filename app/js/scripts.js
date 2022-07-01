$(document).ready(function () {
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