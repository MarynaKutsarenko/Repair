<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <title>Ремонт квартир</title>
  </head>

  <body>
    <nav class="navbar">
      <div class="container">
        <div class="nav">
          <div class="logo">
            <img src="img/header/logo.png" alt="логотип">
          </div>
          <div class="navbar__info">
            <div class="navbar__info__addres"> 
              <span class="addres">Калуга, Москва, МО</span>
              <a href="tel:74954225131" class="phone wow heartBeart" data-wow-delay="1s">+7 (495) 42-251-31</a>
            </div>
            <button class="btn wow shake" id="button">Перезвоните мне</button>
          </div>
        </div>
      </div>
    </nav>

    <main>
      <section class="hero hold">
        <div class="container">
          <div class="hero-block">
            <div class="hero-text">
              <h1 class="hero-text__title wow bounceInLeft">Спасибо за заявку</h1>
              <span class="hero-text__subtitle">мы перезвоним через 15 минут</span>
              <ul class="hero-list">
                <li class="hero-list__items ">
                  <div class="hero-list__image">
                    <img src="img/header/clock.png" alt="clock">
                  </div>
                  <span class="hero-list__text wow bounceInLeft" data-wow-delay="0.3s">Точно соблюдаем сроки</span>
                </li>
                <li class="hero-list__items">
                  <div class="hero-list__image">
                    <img src="img/header/calculator.png" alt="calculator">
                  </div>
                  <span class="hero-list__text wow bounceInLeft" data-wow-delay="0.4s">Рассчитаем смету на работы и материалы в день обращения</span>
                </li>
                <li class="hero-list__items">
                  <div class="hero-list__image">
                    <img src="img/header/paint-board-and-brush.png" alt="paint">
                  </div>
                  <span class="hero-list__text wow bounceInLeft" data-wow-delay="0.5s">Предложим более 100 вариантов исполнения дизайна Вашего жилья</span>
                </li>
              </ul>
            </div>
            <div class="hero-img">
              <img src="img/header/hero-image.png" alt="рмонт квартир">
            </div>
          </div>
        </div>
      </section>

    </main> 

    <footer class="footer section">
      <div class="map" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.1798862020287!2d36.229323015944516!3d50.0267250256858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a6cd428fa91b%3A0xc1eeead81d445bbe!2z0KHQsNGA0LbQuNC9INCv0YA!5e0!3m2!1sru!2sua!4v1571580874066!5m2!1sru!2sua" width="100%" height="640" frameborder="0" style="border:0;" allowfullscreen="">
        </iframe>
      </div>
      <div class="container">
        <div class="contacts-block">
          <div class="contacts">
            <h3 class="contacts__title">Приезжайте к нам в гости! Проконсультируем Вас по всем вопросам ремонта</h3>
            <ul class="contacts-list">
              <li class="contacts-list__item">
                <span class="contacts-list__icon">
                  <img src="img/footer/map-placeholder.png" alt="иконка">
                </span>
                <span class="contacts-list__text">г. Москва ул. Ленинга, д. 10, корпус 2, оф. 308</span>
              </li>
              <li class="contacts-list__item">
                <span class="contacts-list__icon">
                    <img src="img/footer/clock.png" alt="иконка">
                </span>
                <span class="contacts-list__text">Режим работы: с 9:00 до 18:00</span>
              </li>
              <li class="contacts-list__item">
                <span class="contacts-list__icon">
                    <img src="img/footer/phone.png" alt="иконка">
                </span>
                <span class="contacts-list__text">Телефон:    
                <a href="tel:74954225131">+ 7 (495) 42-251-31</a>  </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <button title="вверх" id="anchor">Вверх</button>

    <script src="js/jquery-3.4.1.min.js" ></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init()
    </script>
    <script src="js/slick.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/formsValid.js"></script>

  </body>
</html>  