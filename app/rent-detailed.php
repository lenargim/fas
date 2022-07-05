<?php include 'partials/header.php' ?>

<main class="main-detailed">
  <div class="container">
    <div class="breadcrumbs__wrap">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__li"><a href="/" class="breadcrumbs__link">Главная</a></li>
        <li class="breadcrumbs__li"><a href="rent.php" class="breadcrumbs__link">Аренда залов</a></li>
        <li class="breadcrumbs__li"><span class="breadcrumbs__link">Конференц-холл</span></li>
      </ul>
      <div class="breadcrumbs__extra">
        <div class="breadcrumbs__current">
          <span>Конференц-холл</span>
          <svg>
            <use xlink:href="img/sprite.svg#section-arrow"></use>
          </svg>
        </div>
        <ul class="breadcrumbs__extra-list">
          <li class="breadcrumbs__extra-li active"><a href="rent-detailed.php" class="breadcrumbs__extra-link">Конференц-холл</a>
          </li>
          <li class="breadcrumbs__extra-li"><a href="rent-detailed.php" class="breadcrumbs__extra-link">Зал «Булгар»</a>
          </li>
          <li class="breadcrumbs__extra-li"><a href="rent-detailed.php" class="breadcrumbs__extra-link">Конференц-зал
              «Свияжск»</a></li>
          <li class="breadcrumbs__extra-li"><a href="rent-detailed.php" class="breadcrumbs__extra-link">Аудитория типа
              «Класс»</a></li>
          <li class="breadcrumbs__extra-li"><a href="rent-detailed.php" class="breadcrumbs__extra-link">Аудитория типа
              «Театр»</a></li>
          <li class="breadcrumbs__extra-li"><a href="rent-detailed.php" class="breadcrumbs__extra-link">Студия для
              вебинаров</a></li>
          <li class="breadcrumbs__extra-li"><a href="rent-detailed.php" class="breadcrumbs__extra-link">Переговорная</a>
          </li>
          <li class="breadcrumbs__extra-li"><a href="rent-detailed.php" class="breadcrumbs__extra-link">Гостевая
              комната</a></li>
          <li class="breadcrumbs__extra-li"><a href="rent-detailed.php" class="breadcrumbs__extra-link">VIP-комната
              (кафе)</a></li>
        </ul>
      </div>
    </div>
    <section class="section detailed">
      <div class="detailed__promo">
        <div class="detailed__text">
          <h1 class="detailed__title">Конференц-холл</h1>
          <div class="detailed__desc">
            <p>Идеальное место для проведения мероприятий с большим количеством участников – конференций, форумов,
              семинаров. Сцена зала может быть оформлена в формате президиума и «пленарки». </p>
            <p>Зал оснащен профессиональным свето- и звукооборудованием. Огромное фойе зала удобно для встречи и
              регистрации гостей, проведения кофе-брейков и выставок.</p>
            <p> Пять плазменных экранов отобразят сопровождающую информацию. За сценой расположена гостевая комната, в
              которой спикеры могут отдохнуть, поработать или провести встречи.</p>
          </div>
          <div class="detailed__tag-list">
            <div class="detailed__tag">
              <svg>
                <use xlink:href="img/sprite-rent.svg#dashed"></use>
              </svg>
              <span>414 кв.м</span>
            </div>
            <div class="detailed__tag">
              <svg>
                <use xlink:href="img/sprite-rent.svg#persons"></use>
              </svg>
              <span>326 чел</span>
            </div>
          </div>
        </div>
        <div class="detailed__slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img data-src="img/rent/conf-big.jpg" alt="Конференц-холл" class="swiper-lazy detailed__img">
            </div>
            <div class="swiper-slide">
              <img data-src="img/rent/class.jpg" alt="Конференц-холл" class="swiper-lazy detailed__img">
            </div>
          </div>
          <div class="detailed__arrow prev">
            <svg>
              <use xlink:href="img/sprite.svg#section-arrow"></use>
            </svg>
          </div>
          <div class="detailed__arrow next">
            <svg>
              <use xlink:href="img/sprite.svg#section-arrow"></use>
            </svg>
          </div>
        </div>
      </div>
      <div class="detailed__block-wrap">
        <div class="detailed__block detailed__price">
          <h3>Стоимость</h3>
          <div class="detailed__price-wrap">
            <div class="detailed__price-tip">
              <div>3 часа</div>
              <div class="price">18 000 ₽</div>
            </div>
            <div class="detailed__price-tip">
              <div>до 6 часов</div>
              <div class="price">30 000 ₽</div>
            </div>
            <div class="detailed__price-tip">
              <div>до 9 часов</div>
              <div class="price">48 000 ₽</div>
            </div>
          </div>
          <div class="detailed__price-includes">
            <div>В стоимость включено:</div>
            <div class="price">Аудиосистема (микшерный пульт), ноутбук, плазменные (информационные) панели (в фойе).
            </div>
          </div>
        </div>
        <div class="detailed__block detailed__position">
          <h3>Рассадка</h3>
          <div class="detailed__position-wrap">
            <div class="detailed__position-type">
              <img src="img/pos1.jpg" alt="Полный зал">
              <div class="detailed__position-text">
                <div class="detailed__position-title">Полный зал</div>
                <span>326 человек</span>
              </div>
            </div>
            <div class="detailed__position-type">
              <img src="img/pos2.jpg" alt="Полузал">
              <div class="detailed__position-text">
                <div class="detailed__position-title">Полузал</div>
                <span>180 человек</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section callback">
      <div class="callback__info">
        <h2>Хотите забронировать этот<br>зал для Вашего мероприятия?</h2>
        <div class="callback__desc">Оставьте заявку, заполнив форму. Наши менеджеры с Вами свяжутся!</div>
      </div>
      <form class="callback__form" autocomplete="off">
        <div class="input-wrap">
          <input class="input" type="text" placeholder="Имя" name="name">
        </div>
        <div class="input-wrap">
          <input class="input tel" type="text" placeholder="Номер" name="tel">
          <input type="submit" disabled value="Отправить" class="button-green callback__button">
        </div>
      </form>
    </section>
  </div>
  <section class="info section">
    <div class="container">
      <div class="info__wrap">
        <div class="info__block">
          <div class="section__title"><h2>Дополнительные услуги</h2></div>
          <div class="info__cards">
            <ul class="info__card">
              <li class="info__card-row">
                <span>Оборудование для организации видеоконференции</span>
                <span>7 500 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Флип-чарт с блоком бумаги, набор маркеров</span>
                <span>700 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Набор канцелярских товаров [1]</span>
                <span>400 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Настольный микрофон, шт.</span>
                <span>250 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Радиомикрофон, шт.</span>
                <span>500 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Услуги синхронного перевода (без учета наушников)</span>
                <span>800 ₽/час</span>
              </li>
            </ul>
            <ul class="info__card">
              <li class="info__card-row">
                <span>Проектор</span>
                <span>2 500 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Рабочее место (компьютер (ноутбук) с принтером, выходом в интернет, ксерокс, набор канцелярских товаров)(1)</span>
                <span>1000 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Раздаточный набор:<br>(пакет п/э 30*40 см, блокнот, ручка), шт.</span>
                <span>300 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Наушник для синхронного перевода (без учета синхронного перевода), шт.</span>
                <span>350 ₽/час</span>
              </li>
              <li class="info__card-row">
                <span>Лекционный набор (флипчарт с блоком бумаги, 10 ручек, 10 карандашей, 10 блокнотов, набор цветных маркеров)</span>
                <span>1200 ₽</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="info__block">
          <div class="section__title"><h2>Организация питания (без учета обслуживания)</h2></div>
          <div class="info__cards">
            <ul class="info__card">
              <li class="info__card-row">
                <span>Оборудование для организации видеоконференции</span>
                <span>7 500 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Флип-чарт с блоком бумаги, набор маркеров</span>
                <span>700 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Набор канцелярских товаров [1]</span>
                <span>400 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Настольный микрофон, шт.</span>
                <span>250 ₽</span>
              </li>
            </ul>
            <ul class="info__card">
              <li class="info__card-row">
                <span>Проектор</span>
                <span>2 500 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Рабочее место (компьютер (ноутбук) с принтером, выходом в интернет, ксерокс, набор канцелярских товаров)(1)</span>
                <span>1000 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Раздаточный набор:<br>(пакет п/э 30*40 см, блокнот, ручка), шт.</span>
                <span>300 ₽</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="info__block">
          <div class="section__title"><h2>Транспортные услуги (заказ не&nbsp;менее, чем на&nbsp;3&nbsp;часа)</h2></div>
          <div class="info__cards">
            <ul class="info__card">
              <li class="info__card-row">
                <span>Проектор</span>
                <span>2 500 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Рабочее место (компьютер (ноутбук) с принтером, выходом в интернет, ксерокс, набор канцелярских товаров)(1)</span>
                <span>1000 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Раздаточный набор:<br>(пакет п/э 30*40 см, блокнот, ручка), шт.</span>
                <span>300 ₽</span>
              </li>
            </ul>
            <ul class="info__card">
              <li class="info__card-row">
                <span>Оборудование для организации видеоконференции</span>
                <span>7 500 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Флип-чарт с блоком бумаги, набор маркеров</span>
                <span>700 ₽</span>
              </li>
              <li class="info__card-row">
                <span>Набор канцелярских товаров [1]</span>
                <span>400 ₽</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="info__note">
          <div class="info__note-text">
            <p>[1] В набор канцелярских товаров входят: пачка бумаги, 3 ручки, 3 карандаша, 3 блокнота, ножницы, клей,
              скотч, степлер, антистеплер, линейка, 3 цветных маркера. Вся продукция брендирована символикой
              Учебно-методического центра ФАС России.</p>
            <p>[2] В зависимости от выбранного меню</p>
          </div>
          <a download href="#" class="info__note-button button-green">Скачать PDF</a>
        </div>
      </div>
  </section>
</main>

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