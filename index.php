<!DOCTYPE html>
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
              <a href="tel:74954225131" class="phone " >+7 (495) 42-251-31</a>
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
              <h1 class="hero-text__title wow bounceInLeft" data-wow-delay="0.2s">Внутренняя отделка помещений "под ключ"</h1>
              <span class="hero-text__subtitle">с гарантией качества, прописанной в договоре</span>
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

        <section class="offer hold section">
          <div class="container">
            <div class="offer-block">          
              <h2 class="section-title offer-title">Мы бесплатно разработаем дизайн-проект Вашего жилья и реализуем его!</h2>
              <span class="section-subtitle offer-subtitle">Оставьте заявку на разработку бесплатного дизайн-проекта!</span>
              <form action="mail.php" method="POST" id="offer__form" class="form offer__form">
                <div class="hold__input">                
                  <div class="input-group">
                    <input type="text" name="username" placeholder="Ваше имя" class="input offer__input">
                  </div>
                  <div class="input-group">
                    <input type="tel" name="phone" placeholder="Ваш телефон" class="phone input offer__input">
                  </div>
                </div>
                  <button class="btn offer-button wow zoomIn">Получить бесплатный дизайн-проект</button>
              </form>
              <div class="offer-info info">
                <p class="recall">Наш менеджер перезвонит Вам в течение 60 секунд</p>
                <div class="info-callback">
                  <span class="callback__text">или перезвоните нам сами</span>
                  <a href="tel:74954225131" class="tell">+7 (495) 42-251-31</a>
                </div>
              </div>
            </div>
          </div>
        </section>    

      <section class="portfolio hold">
        <div class="container">
          <h2 class="section__title portfolio-headline">        
            <span class=" portfolio__title">Работая с 2007 года,</span>
            <span class=" portfolio__title"> мы сделали более 500 ремонтов в квартирах и домах</span>
          </h2>

          <div class="slider">
            <div class="slider__item"> <img src="img/slider/img_1.jpg" alt="проект" class="slider__image"></div>
            <div class="slider__item"><img src="img/slider/img_2.jpg" alt="проект" class="slider__image"></div>
            <div class="slider__item"><img src="img/slider/img_3.jpg" alt="проект" class="slider__image"></div>
            <div class="slider__item"> <img src="img/slider/img_1.jpg" alt="проект" class="slider__image"></div>
            <div class="slider__item"> <img src="img/slider/img_2.jpg" alt="проект" class="slider__image"></div>
            <div class="slider__item"> <img src="img/slider/img_3.jpg" alt="проект" class="slider__image"></div> 
          </div>

          <div class="arrows">
            <div class="arrows__left">
              <img src="img/slider/left-arrow.png" alt="стрелка">
            </div>
            <div class="arrows__right">
                <img src="img/slider/right-arrow.png" alt="стрелка">
              </div>
          </div>

        </div>
      </section>

      <section class="section hold price">
        <div class="container">
          <h2 class="section-title price__title">У нас очень гибкая система скидок на комплексные работы!</h2>
          <span class="section-title price__subtitle">Прайс на наши услуги</span>

          <div class="cards">
            <div class="card price__card wow fadeInDown"  data-wow-delay="0.1s">
              <div class="card__img"><img src="img/price/bathroom.jpg" alt="фото"></div>
              <div class="card__text">
                <h4 class="card__description">Ремонт ванных комнат и с/у</h4>
                <a href="#" class="card__link">Узнать цены</a>
              </div>
            </div>

            <div class="card price__card wow fadeInDown" data-wow-delay="0.2s">
              <div class="card__img"><img src="img/price/living-1.jpg" alt="фото"></div>
              <div class="card__text">
                <h4 class="card__description">Ремонт комнат и квартир</h4>
                <a href="#" class="card__link">Узнать цены</a>
              </div>
            </div>

            <div class="card price__card wow fadeInDown" data-wow-delay="0.3s">
              <div class="card__img"><img src="img/price/office.jpg" alt="фото"></div>
              <div class="card__text">
                <h4 class="card__description">Отделка офисных помещений</h4>
                <a href="#" class="card__link">Узнать цены</a>
              </div>
            </div>

            <div class="card price__card wow fadeInUp" data-wow-delay="0.1s">
              <div class="card__img"><img src="img/price/newbuilding.jpg" alt="фото"></div>
              <div class="card__text">
                <h4 class="card__description">Ремонт в новостройках</h4>
                <a href="#" class="card__link">Узнать цены</a>
              </div>
            </div>

            <div class="card price__card wow fadeInUp" data-wow-delay="0.2s">
              <div class="card__img"><img src="img/price/kitchen.jpg" alt="фото"></div>
              <div class="card__text">
                <h4 class="card__description">Ремонт кухонь</h4>
                <a href="#" class="card__link">Узнать цены</a>
              </div>
            </div>

            <div class="card price__card wow fadeInUp" data-wow-delay="0.3s">
              <div class="card__img"><img src="img/price/lounge.jpg" alt="фото"></div>
              <div class="card__text">
                <h4 class="card__description">Ремонт дач и коттеджей</h4>
                <a href="#" class="card__link">Узнать цены</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section hold steps">
        <div class="container">
          <h2 class="section-title steps__title">Наши специалисты готовы выехать на замер в любое удобное для Вас время</h2>
          <span class="section-subtitle steps__subtitle">5 шагов до ремонта</span>
        
          <div class="steps-block">
            <div class="step">
              <div class="step__image"> <img src="img/steps/woman.png" alt="иконка"></div>
              <p class="step__text">Вы звоните нам или оставляете заявку</p>
            </div>
            <div class="step">
              <div class="step__image"> <img src="img/steps/clock.png" alt="иконка"></div>
              <p class="step__text">Согласуем удобное для Вас время выезда специалиста на замер</p>
            </div>
            <div class="step">
              <div class="step__image"> <img src="img/steps/ddollar.png" alt="иконка"></div>
              <p class="step__text">Рассчитываем смету согласовываем с Вами</p>
            </div>
            <div class="step">
              <div class="step__image"> <img src="img/steps/document-icon.png" alt="иконка"></div>
              <p class="step__text">Подписываем договор закупаем материал по оптовым ценам</p>
            </div>
            <div class="step">
              <div class="step__image"> <img src="img/steps/calendar.png" alt="иконка"></div>
              <p class="step__text">Выполняем ремонт в указанные сроки</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section hold brif">
        <div class="container">
          <div class="brif-block">

            <div class="interview brif-interview">             
              <h3 class="interview__title">Мы можем озвучить Вам примерную стоимость работы и материалов по телефону</h3>
              <span class="interview__subtitle">Для этого нужно ответить на 4 вопроса:</span>
              <ul class="interview-list">
                <li class="interview-list__item">
                  <span class="interview-list__counter">1.</span>
                  <span class="interview-list__text">Какова площадь помещения?</span>
                </li>
                <li class="interview-list__item">
                  <span class="interview-list__counter">2.</span>
                  <span class="interview-list__text">У Вас новостройка или вторичное жилье?</span>
                </li>
                <li class="interview-list__item">
                  <span class="interview-list__counter">3.</span>
                   <span class="interview-list__text">Где находится помещение, в котором будет производиться ремонт? </span>
                </li>
                <li class="interview-list__item">
                  <span class="interview-list__counter">4.</span>
                  <span class="interview-list__text">Назначение помещения?</span>
                </li>
              </ul>
            </div>  

            <div class="form brif-form">
              <h3 class="form__title">Оставьте заявку на бесплатный расчет ремонта по телефону</h3>
              <span class="form__subtitle">Для этого заполните форму ниже</span>
              <form action="mail.php" method="POST" id="brif-form">
                <div class="input-group"> 
                  <input type="text" autocomplete="off" name="username"  class="input brif__input" placeholder="Ваше имя">
                </div>
                <div class="input-group">  
                  <input type="tel" autocomplete="off" name="phone"  class="phone input brif__input" placeholder="Ваш телефон">
                </div>
                <div class="input-group">              
                   <input type="text" autocomplete="off" name="email" class="input brif__input" placeholder="Ваш email">
                </div>
 
                <button class="btn brif__button">Рассчитать стоимость</button>
                <span class="form__description">Мы перезвоним Вам в течение 60 секунд</span>
              </form>
            </div>
          </div>
        </div>

      </section>

    </main> 

    <footer class="footer section">
      <div class="map" id="map">
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

    <div class="modal" id="modal">
      <div class="modal-wrap">
        <button class="modal-wrap__close" id="close">&times;</button> 
        <h4 class="modal-wrap__title">Узнайте точную стоимость ремонта по телефону!</h4>
        <span class="modal-wrap__subtitle">Заполните поля ниже - мы свяжемся с Вами</span>
        <form action="mail.php" method="POST" id="modal-wrap" class="modal-wrap__form">
          <div class="input-group">
            <input type="text" name="username" autocomplete="off" class="input modal-input" placeholder="Ваше имя">
          </div>
          <div class="input-group">
            <input type="tel" name="phone" autocomplete="off" class="phone input modal-input" placeholder="Ваш телефон">
          </div>
          <button class="btn modal-button">Узнать стоимость</button>
        </form>
        <span class="modal-wrap__info">Или Вы можете перезвонить нам сами по телефону:</span>
        <a href="tel:74954225131" class="phone modal-wrap__tell">+7 (495) 42-251-31</a>
      </div>
    </div>

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