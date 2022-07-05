<footer class="footer">
  <div class="container">
    <div class="footer__wrap">
      <div class="footer__info">
        <h2>Контакты</h2>
        <div class="footer__rows">
          <div class="footer__row">
            <svg>
              <use xlink:href="img/sprite.svg#geo"></use>
            </svg>
            <address>420059, Российская Федерация, Республика Татарстан, Казань, Оренбургский тракт, 24</address>
          </div>
          <div class="footer__row">
            <svg>
              <use xlink:href="img/sprite.svg#envelope"></use>
            </svg>
            <a href="mailto:seminar@emc-fas.ru">seminar@emc-fas.ru</a>
          </div>
        </div>
        <div class="footer__phones">
          <div class="footer__phone">
            <svg>
              <use xlink:href="img/sprite.svg#phone"></use>
            </svg>
            <div>
              <div class="footer__phone-title">Обучение</div>
              <a href="tel:+78432071161">8(843)207-11-61</a>
            </div>
          </div>
          <div class="footer__phone">
            <svg>
              <use xlink:href="img/sprite.svg#phone"></use>
            </svg>
            <div>
              <div class="footer__phone-title">Отель</div>
              <a href="tel:+78432071161">8(843)207-11-61</a>
            </div>
          </div>
          <div class="footer__phone">
            <svg>
              <use xlink:href="img/sprite.svg#phone"></use>
            </svg>
            <div>
              <div class="footer__phone-title">Аренда залов</div>
              <a href="tel:+78432071161">8(843)207-11-61</a>
            </div>
          </div>
          <div class="footer__phone">
            <svg>
              <use xlink:href="img/sprite.svg#phone"></use>
            </svg>
            <div>
              <div class="footer__phone-title">Приемная директора</div>
              <a href="tel:+78432071161">8(843)207-11-61</a>
            </div>
          </div>
        </div>
      </div>
      <script>
        let mapInWindow = false;
        window.addEventListener('scroll', function () {
          $ = jQuery;
          let doc = $(window).scrollTop() + 500;
          let map = $("#map").offset().top;
          if (doc > map && mapInWindow !== true) {
            mapInWindow = true;
            let map_block = document.getElementById('ymaps_lazy');

            setTimeout(() => {
              map_block.setAttribute('src', map_block.getAttribute('data-src'));
              map_block.removeAttribute('data-src');
            }, 200)
          }
        });
      </script>
      <div id="map">
        <iframe
                id="ymaps_lazy"
                data-src="https://yandex.ru/map-widget/v1/?um=constructor%3A516129fdb77800fea95cf0e628781dcc26a022b33b94d71ff0346ebcf3730c01&amp;source=constructor"
                width="100%"
                height="100%"
                frameborder="0">
        </iframe>
      </div>
    </div>
  </div>
</footer>


<div class="overlay">
  <div class="modal">
    <svg class="modal__close">
      <use xlink:href="img/sprite.svg#plus"></use>
    </svg>
    <span class="modal__title">Благодарим за заявку!</span>
    <div class="modal__desc">В ближайшее время с Вами свяжется наш менеджер.</div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/scripts.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>
