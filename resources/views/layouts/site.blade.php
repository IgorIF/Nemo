<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Акваклуб Немо</title>
    <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi ipsam, cum, pariatur">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css?v4') }}">
</head>

<body>

@yield('header')

<section class="offer">
    @yield('swimBeforeWalking')
</section>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 offset-lg-2">
                <h2 class="title title_center about__title">О нас</h2>
                <p>Детский акваклуб «Немо» проводит индивидуальные занятия плаванием с детьми от 1.5 месяцев до 7 лет. Занятия проходят в игровой динамике с учетом возраста ребёнка, состояния его здоровья, психологических особенностей и умения держаться на воде. </p>
                <div class="video-block">
                    <img src="images/dist/vodeo-pr.jpg" alt="Детский акваклуб «Немо»" class="video-block__img">
                    <a id="play-video" class="video-play-button video-block__btn" href="https://www.youtube.com/embed/ode_TmoV848?autoplay=1"></a>
                    <div id="video-overlay" class="video-overlay">
                        <a class="video-overlay-close">×</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <h2 class="title title_center gallery__title">Как мы плаваем</h2>
        <div class="gallery-slider slider">
            <div class="gallery__grid swiper-wrapper">
                <a href="images/dist/gl_big.jpg" class="swiper-slide gallery-item gallery-item_6x2"><img src="images/dist/gl1.jpg" alt=""></a>
                <a href="images/dist/gl2.jpg" class="swiper-slide gallery-item"><img src="images/dist/gl2.jpg" alt=""></a>
                <a href="images/dist/gl_big.jpg" class="swiper-slide gallery-item"><img src="images/dist/gl3.jpg" alt=""></a>
                <a href="images/dist/gl4.jpg" class="swiper-slide gallery-item"><img src="images/dist/gl4.jpg" alt=""></a>
                <a href="images/dist/gl4.jpg" class="swiper-slide gallery-item"><img src="images/dist/gl4.jpg" alt=""></a>
                <a href="images/dist/gl4.jpg" class="swiper-slide gallery-item"><img src="images/dist/gl4.jpg" alt=""></a>
                <a href="images/dist/gl_big.jpg" class="swiper-slide gallery-item gallery-item_4x1"><img src="images/dist/gl5.jpg" alt=""></a>
                <a href="images/dist/gl_big.jpg" class="swiper-slide gallery-item gallery-item_5x1"><img src="images/dist/gl6.jpg" alt=""></a>
            </div>
            <div class="gallery-slider-pagination slider-pagination"></div>
        </div>
    </div>
</section>

<section class="coaches">
    <div class="container">
        <h2 class="title title_center coaches__title">Наши тренеры</h2>
        <p class="coaches__subtitle">«Мы понимаем и уважаем индивидуальность личности малыша, создаем для него атмосферу доверия и уверенности!»</p>
        <div class="coaches__filter filter">
            <button type="button" class="filter__btn">ВСЕ ФИЛИАЛЫ</button>
            <ul class="filter__select">
                <li class="active" data-label="all" tabindex="0"><span>ВСЕ ФИЛИАЛЫ</span></li>
                <li data-label="1" tabindex="0"><span>ул. Кировоградская 36 (Пражская)</span></li>
                <li data-label="2" tabindex="0"><span>ул. Винокурова 24, к4 (Академическая)</span></li>
                <li data-label="3" tabindex="0"><span>Мячковский бульвар 16, к1 (Марьино)</span></li>
                <li data-label="4" tabindex="0"><span>ул. Камова 11/5 (Некрасовка)</span></li>
                <li data-label="5" tabindex="0"><span>ул. Петрозаводская 11, к2 (Ховрино)</span></li>
            </ul>
        </div>
        <div class="coaches-slider__wrapper">
            <div class="coaches-slider slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide coache btn-popup" data-filter="1" data-mfp-src="#trener1">
                        <div class="coache__img"><img src="images/dist/t1.jpg" alt=""></div>
                        <h3 class="coache__name">Яна Кокошникова</h3>
                        <div class="coache__text">51 год, 2 сына. Всю жизнь занимаюсь спортом. Летом люблю кататься на велосипеде. Зимой осваиваю горные лыжи. Имею I взрослый по плаванию и по гандболу. Имею: 20-ти летний опыт работы по обучению плавания детей в возрасте от 2-х лет и 3- х летний опыт работы с грудничками... <span>читать далее</span></div>
                        <div id="trener1" class="popup coache__popup mfp-hide" data-simplebar>
                            <div class="coache__popup-title">Яна Кокошникова</div>
                            51 год, 2 сына. Всю жизнь занимаюсь спортом. Летом люблю кататься на велосипеде. Зимой осваиваю горные лыжи. Имею I взрослый по плаванию и по гандболу. Имею: 20-ти летний опыт работы по обучению плавания детей в возрасте от 2-х лет и 3- х летний опыт работы с грудничками. Высшее образование. В 2012 году в институте восстановительной медицины прошла курс обучения грудничкового плавания и основы детского массажа. В 2018 году прошла курсы по: Watsu for newborns at home bath Watsu Sensory Introduction. Участвовала в Международной конференции в Санкт- Петербурге. Кратко о своей работе: Люблю наблюдать и участвовать в процессе, как детки получают удовольствие от занятий в воде. Приоритет-мягкий подход.</div>
                    </div>

                    <div class="swiper-slide coache btn-popup" data-filter="2" data-mfp-src="#trener2">
                        <div class="coache__img"><img src="images/dist/t2.jpg" alt=""></div>
                        <h3 class="coache__name">Евгения Русаков</h3>
                        <div class="coache__text">Меня зовут Евгения. Мне 39 лет. 12 лет я профессионально занималась плаванием, выполнила разряд мастера спорта РБ, была победителем и призером чемпионатов РБ. Закончила Минское областное училище Олимпийского резерва по специальности... <span>читать далее</span></div>
                        <div id="trener2" class="popup coache__popup mfp-hide" data-simplebar>
                            <div class="coache__popup-title">Яна Кокошникова</div>
                            Меня зовут Евгения. Мне 39 лет. 12 лет я профессионально занималась плаванием, выполнила разряд мастера спорта РБ, была победителем и призером чемпионатов РБ. Закончила Минское областное училище Олимпийского резерва по специальности «Тренер по плаванию», получила высшее педагогическое образование по специальности «Учитель-логопед». Более 10 лет работаю с детками дошкольного возраста, 3 года обучаю плаванию и тренирую юных пловцов. В работе придерживаюсь мягкого подхода к обучению, учитываю индивидуальные особенности каждого ученика. Уверена, что плавание - это прекрасный способ всестороннего развития наших деток.</div>
                    </div>

                    <div class="swiper-slide coache btn-popup" data-filter="3" data-mfp-src="#trener3">
                        <div class="coache__img"><img src="images/dist/t3.jpg" alt=""></div>
                        <h3 class="coache__name">Наталья Севрюкова</h3>
                        <div class="coache__text">КМС по водному поло. 11 лет игра за команду "Штурм 2002". 9 лет была капитаном команды. Также участие в соревнованиях в спартакиадах, чемпионатах области и первенствах РФ. Высшее образование "тренер-преподаватель", сертификат по... <span>читать далее</span></div>
                        <div id="trener3" class="popup coache__popup mfp-hide" data-simplebar>
                            <div class="coache__popup-title">Яна Кокошникова</div>
                            КМС по водному поло. 11 лет игра за команду "Штурм 2002". 9 лет была капитаном команды. Также участие в соревнованиях в спартакиадах, чемпионатах области и первенствах РФ. Высшее образование "тренер-преподаватель", сертификат по "грудничковому плаванию". 3 года работы с детьми от 3-10 лет. 2,5 года работы с грудничками. Легко и быстро нахожу общий язык с детьми.</div>
                    </div>

                    <div class="swiper-slide coache btn-popup" data-filter="4" data-mfp-src="#trener4">
                        <div class="coache__img"><img src="images/dist/t1.jpg" alt=""></div>
                        <h3 class="coache__name">Снежана Саргунас</h3>
                        <div class="coache__text">Специалист по раннему развитию, инструктор по динамической гимнастике, раннему плаванию и закаливанию с высшим физкультурным педагогическим образованием по специализации "подводное плавание и дайвинг" (РГУФКСиТ (ГЦОЛИФК)). Опыт... <span>читать далее</span></div>
                        <div id="trener4" class="popup coache__popup mfp-hide" data-simplebar>
                            <div class="coache__popup-title">Яна Кокошникова</div>
                            Специалист по раннему развитию, инструктор по динамической гимнастике, раннему плаванию и закаливанию с высшим физкультурным педагогическим образованием по специализации "подводное плавание и дайвинг" (РГУФКСиТ (ГЦОЛИФК)). Опыт работы обучению плаванию с нуля - более 10лет.Могу научить любить плавать любого!</div>
                    </div>

                    <div class="swiper-slide coache btn-popup" data-filter="5" data-mfp-src="#trener5">
                        <div class="coache__img"><img src="images/dist/t2.jpg" alt=""></div>
                        <h3 class="coache__name">Наталья Высоцкая</h3>
                        <div class="coache__text">КМС по плаванию,член сборной Удмуртской республики по плаванию, призер республиканских и зональных соревнований. Работала тренером и старшим тренером в ДЮСШ . Стаж работы тренером 15 лет. Воспитала КМС и МС по плаванию. В... <span>читать далее</span></div>
                        <div id="trener5" class="popup coache__popup mfp-hide" data-simplebar>
                            <div class="coache__popup-title">Яна Кокошникова</div>
                            КМС по плаванию,член сборной Удмуртской республики по плаванию, призер республиканских и зональных соревнований. Работала тренером и старшим тренером в ДЮСШ . Стаж работы тренером 15 лет. Воспитала КМС и МС по плаванию. В 2017 прошла курсы переквалификации по специальности тренер-преподаватель физической культуры и спорта, в 2018 курсы в повышения квалификации и переподготовке по программе " Теория и методика учебно-тренировочного процесса по плаванию", а также курсы "Грудничков он плавание" в АНО Институте восстановительной медицины. Наработанный опыт и знания применяю на занятияъ,чтобы помочь ребенку без стрессов научиться плавать и полюбить воду.</div>
                    </div>

                    <div class="swiper-slide coache btn-popup" data-filter="4" data-mfp-src="#trener6">
                        <div class="coache__img"><img src="images/dist/t3.jpg" alt=""></div>
                        <h3 class="coache__name">Снежана Саргунас</h3>
                        <div class="coache__text">Специалист по раннему развитию, инструктор по динамической гимнастике, раннему плаванию и закаливанию с высшим физкультурным педагогическим образованием по специализации "подводное плавание и дайвинг" (РГУФКСиТ (ГЦОЛИФК)). Опыт... <span>читать далее</span></div>
                        <div id="trener6" class="popup coache__popup mfp-hide" data-simplebar>
                            <div class="coache__popup-title">Яна Кокошникова</div>
                            Специалист по раннему развитию, инструктор по динамической гимнастике, раннему плаванию и закаливанию с высшим физкультурным педагогическим образованием по специализации "подводное плавание и дайвинг" (РГУФКСиТ (ГЦОЛИФК)). Опыт работы обучению плаванию с нуля - более 10лет.Могу научить любить плавать любого!</div>
                    </div>
                </div>
                <div class="coaches-slider-pagination slider-pagination"></div>
            </div>
            <button class="coaches-prev slider-prev">Назад</button>
            <button class="coaches-next slider-next">Вперед</button>
        </div>
        <button type="button" class="btn-orange coaches__btn btn-popup" data-mfp-src="#call_me">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
    </div>
</section>

<section class="payment">
    <div class="container">
        <h2 class="title title_center payment__title">Стоимость и оплата занятий</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="payment__item">
                    <div class="payment__label">Выберите филиал:</div>
                    <select name="filial" class="select">
                        <option disabled value="1" >ул. Кировоградская 36 (Пражская)</option>
                        <option selected value="1" >ул. Кировоградская 36 (Пражская)</option>
                        <option value="2">ул. Винокурова 24, к4 (Академическая)</option>
                        <option value="3">Мячковский бульвар 16, к1 (Марьино)</option>
                        <option value="4">ул. Камова 11/5 (Некрасовка)</option>
                        <option value="5">ул. Петрозаводская 11, к2 (Ховрино)</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="payment__item">
                    <div class="payment__label">
                        Бассейн:
                        <div class="payment__i info">
                            <div class="info__i">i</div>
                            <div class="info__text">
                                <div class="info__title">Бассейны</div>
                                <b>Малая чаша:</b>
                                <div class="info__item">
                                    <span>3х3м</span>
                                    Круглый каркасный бассейн, диаметром - 3м, глубиной - 1,2м
                                </div>
                                <b>Большая чаша:</b>
                                <div class="info__item">
                                    <span>6х3х1,2м</span>
                                    Прямоугольный бассейн, размерами: длина и ширина - 6х3м, глубина - 1,2м.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-group">
                        <label>
                            <input type="radio" name="basin"><span>Малая чаша</span>
                        </label>
                        <label>
                            <input type="radio" name="basin" checked><span>Большая чаша</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="payment__item">
                    <div class="payment__label">
                        Вид абонемента:
                        <div class="payment__i info">
                            <div class="info__i">i</div>
                            <div class="info__text">
                                <div class="info__title">Виды абонементов</div>
                                <b>Абонемент «Стандарт»</b>
                                <ul class="info__list">
                                    <li>Предусматривает отмену занятия до 18.00 предыдущего дня;</li>
                                    <li>Срок действия абонемента: 4 недели + 2 недели заморозки;</li>
                                    <li>Уведомление о смене тренера не предусмотрено;</li>
                                </ul>
                                <b>Абонемент «Лояльный»</b>
                                <ul class="info__list">
                                    <li>Возможность отменять занятие день в день без потери занятия</li>
                                    <li>Позволяет получать уведомление о смене тренера</li>
                                    <li>Срок действия абонемента: 4 недели + 2 недели заморозки.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="payment-group">
                        <label>
                            <input type="radio" name="subscription"><span>Малая чаша</span>
                        </label>
                        <label>
                            <input type="radio" name="subscription" checked><span>Лояльный</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="payment__item">
                    <div class="payment__label">Разовые занятия:</div>
                    <label class="payment-option">
                        <input type="radio" name="one-time" checked>
                        <div class="payment-option__info">
                            <header class="payment-option__header">
                                Пробное занятие
                                <span class="payment-option__sale">СКИДКА -30%</span>
                            </header>
                            <div class="payment-option__price">
                                <div class="payment-option__pr">980 <i>₽</i></div>
                                <del>1 500 ₽</del>
                            </div>
                            <footer class="payment-option__footer">
                                <div class="payment-option__day">1 день</div>
                                <div class="payment-option__time">30 мин</div>
                            </footer>
                        </div>
                    </label>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <label class="payment-option">
                    <input type="radio" name="one-time">
                    <div class="payment-option__info">
                        <header class="payment-option__header">
                            Разовое занятие
                        </header>
                        <div class="payment-option__price">
                            <div class="payment-option__pr">1 500 <i>₽</i></div>
                        </div>
                        <footer class="payment-option__footer">
                            <div class="payment-option__day">1 день</div>
                            <div class="payment-option__time">30 мин</div>
                        </footer>
                    </div>
                </label>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="payment__item">
                    <div class="payment__label">Абонементы:</div>
                    <label class="payment-option">
                        <input type="radio" name="one-time">
                        <div class="payment-option__info">
                            <header class="payment-option__header">
                                Стандарт на <span class="orange" style="color: #FF1F0D;">4</span> занятий
                            </header>
                            <div class="payment-option__price">
                                <div class="payment-option__pr">9 900 <i>₽</i></div>
                                <del>1 100 ₽/занятие</del>
                            </div>
                            <footer class="payment-option__footer">
                                <div class="payment-option__day">1 месяц 14 дней</div>
                                <div class="payment-option__time">30 мин</div>
                            </footer>
                        </div>
                    </label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="payment__item">
                    <label class="payment-option">
                        <input type="radio" name="one-time">
                        <div class="payment-option__info">
                            <header class="payment-option__header">
                                Стандарт на <span class="orange" style="color: #FF1F0D;">8</span> занятия
                            </header>
                            <div class="payment-option__price">
                                <div class="payment-option__pr">9 900 <i>₽</i></div>
                                <del>1 100 ₽/занятие</del>
                            </div>
                            <footer class="payment-option__footer">
                                <div class="payment-option__day">1 месяц 14 дней</div>
                                <div class="payment-option__time">30 мин</div>
                            </footer>
                        </div>
                    </label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="payment__item">
                    <label class="payment-option">
                        <input type="radio" name="one-time">
                        <div class="payment-option__info">
                            <header class="payment-option__header">
                                Стандарт на <span class="orange" style="color: #FF1F0D;">12</span> занятия
                            </header>
                            <div class="payment-option__price">
                                <div class="payment-option__pr">9 900 <i>₽</i></div>
                                <del>1 100 ₽/занятие</del>
                            </div>
                            <footer class="payment-option__footer">
                                <div class="payment-option__day">1 месяц 14 дней</div>
                                <div class="payment-option__time">30 мин</div>
                            </footer>
                        </div>
                    </label>
                </div>
            </div>
        </div>

        <div class="row payment__bottom">
            <div class="col-md-6">
                <div class="all-price">Стоимость: <span>980 <i>₽</i></span></div>
            </div>
            <div class="col-md-6">
                <a href="#" class="btn-orange payment__btn">ОПЛАТИТЬ И ЗАПИСАТЬСЯ</a>
                <a href="#pay-popup" class="btn-popup">Процесс оплаты и возврата по картам</a>
            </div>
        </div>
    </div>
</section>

<section class="sale">
    <div class="container">
        <h2 class="title title_center sale__title">Скидки и Акции</h2>
        <div class="slider-3col__wrapper">
            <div class="sale-slider slider slider-3col">
                <div class="swiper-wrapper">
                    <div class="swiper-slide sale-item">
                        <h3 class="sale-item__title">Для второго и последующего ребенка в семье</h3>
                        <div class="sale-item__text">
                            <b>-10%</b>
                            <span>СКИДКА</span>
                            на абонемент
                        </div>
                        <img src="images/dist/ct1.png" alt="" class="sale-item__img">
                    </div>

                    <div class="swiper-slide sale-item">
                        <h3 class="sale-item__title">В день пробного <br>занятия</h3>
                        <div class="sale-item__text">
                            <b>-10%</b>
                            <span>СКИДКА</span>
                            на абонемент
                        </div>
                        <img src="images/dist/ct2.png" alt="" class="sale-item__img">
                    </div>

                    <div class="swiper-slide sale-item">
                        <h3 class="sale-item__title">За приведенного <br>друга</h3>
                        <div class="sale-item__text">
                            <b>-10%</b>
                            <span>СКИДКА</span>
                            на абонемент
                        </div>
                        <img src="images/dist/ct3.png" alt="" class="sale-item__img">
                    </div>

                    <div class="swiper-slide sale-item">
                        <h3 class="sale-item__title">Особенным деткам</h3>
                        <div class="sale-item__text">
                            <b>-10%</b>
                            <span>СКИДКА</span>
                            на абонемент
                        </div>
                        <img src="images/dist/ct4.png" alt="" class="sale-item__img">
                    </div>

                    <div class="swiper-slide sale-item">
                        <h3 class="sale-item__title">Новым посетителям</h3>
                        <div class="sale-item__text">
                            <b>-30%</b>
                            <span>СКИДКА</span>
                            на первое занятие
                        </div>
                        <img src="images/dist/ct5.png" alt="" class="sale-item__img">
                    </div>
                </div>
                <div class="sale-slider-pagination slider-3col-pagination slider-pagination"></div>
            </div>
            <button class="sale-prev slider-prev slider-3col-prev">Назад</button>
            <button class="sale-next slider-next slider-3col-next">Вперед</button>
        </div>

    </div>
</section>

<section class="what">
    <div class="container">
        <h2 class="title title_center what__title">Что нужно для первого занятия?</h2>
        <div class="row">
            <div class="col-md-6"><img src="images/dist/what.jpg" alt="" class="what__img"></div>
            <div class="col-md-6">
                <ol>
                    <li>
                        <h3>Справки и анализы</h3>
                        <ul>
                            <li>Справка от педиатра об отсутствии противопоказаний (действительна 6 месяцев);</li>
                            <li>Результат соскоба на энтеробиоз (действительна 3 месяца);</li>
                            <li>Результат анализа на яйца глист (действительна 3 месяца).</li>
                            <li class="li-desc">Для детей <b>до 1 года</b> результаты анализа на энтеробиоз и кала на яйца глист не требуются, необходима только справка от педиатра.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Для плавания</h3>
                        <ul>
                            <li>Плавки/купальник (от 3-х лет);</li>
                            <li>Шапочка и очки для плавания (от 1 года);</li>
                            <li>пеленка, гигиченические средства,полотенце, сменная обувь.</li>
                        </ul>
                    </li>
                </ol>
                <button type="button" class="btn-orange what__btn btn-popup" data-mfp-src="#call_me">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
            </div>
        </div>
    </div>
</section>

<section class="water-treatment">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title water-treatment__title">Водоподготовка</h2>
                <h3>Система фильтрации и очистки воды в бассейна</h3>
                <ul>
                    <li>Многоступенчатая система очистки воды в бассейне</li>
                    <li>Температура воды в бассейне 32-34 градусов по Цельсию</li>
                    <li>Время полного водообмена составляет 30 минут</li>
                    <li>рециркуляционный тип водообмена кристально чистая вода</li>
                    <li>соответствие Санитарным правилам и нормативам СанПиН 2.1.2.Ц1188-03</li>
                </ul>
            </div>
            <div class="col-md-6 mobil-hidden">
                <img src="images/dist/wd-p.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <h2 class="title title_center reviews__title">Отзывы наших клиентов</h2>
        <div class="slider-3col__wrapper">
            <div class="reviews-slider slider slider-3col">
                <div class="swiper-wrapper">
                    <div class="swiper-slide reviews-item">
                        <header class="reviews-item__header">
                            <div class="reviews-item__ava"><img src="images/dist/ava.png" alt=""></div>
                            <div class="reviews-item__name">
                                <b>Анна</b>
                                Эмили 2,5 месяца
                            </div>
                        </header>
                        “Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очеь вниматель плавали, изучали.... <button type="button" class="reviews-item__btn btn-popup" data-mfp-src="#rev1">далее</button>

                        <div id="rev1" class="popup reviews__popup mfp-hide" data-simplebar>
                            <header class="reviews-item__header">
                                <div class="reviews-item__ava"><img src="images/dist/ava.png" alt=""></div>
                                <div class="reviews-item__name">
                                    <b>Анна</b>
                                    Эмили 2,5 месяца
                                </div>
                            </header>
                            “Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очень вниматель плавали, изучали. Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очень вниматель плавали, изучали
                        </div>
                    </div>

                    <div class="swiper-slide reviews-item">
                        <header class="reviews-item__header">
                            <div class="reviews-item__ava"><img src="images/dist/ava.png" alt=""></div>
                            <div class="reviews-item__name">
                                <b>Анна</b>
                                Эмили 2,5 месяца
                            </div>
                        </header>
                        “Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очеь вниматель плавали, изучали.... <button type="button" class="reviews-item__btn btn-popup" data-mfp-src="#rev2">далее</button>

                        <div id="rev2" class="popup reviews__popup mfp-hide" data-simplebar>
                            <header class="reviews-item__header">
                                <div class="reviews-item__ava"><img src="images/dist/ava.png" alt=""></div>
                                <div class="reviews-item__name">
                                    <b>Анна</b>
                                    Эмили 2,5 месяца
                                </div>
                            </header>
                            “Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очень вниматель плавали, изучали. Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очень вниматель плавали, изучали
                        </div>
                    </div>

                    <div class="swiper-slide reviews-item">
                        <header class="reviews-item__header">
                            <div class="reviews-item__ava"><img src="images/dist/ava.png" alt=""></div>
                            <div class="reviews-item__name">
                                <b>Анна</b>
                                Эмили 2,5 месяца
                            </div>
                        </header>
                        “Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очеь вниматель плавали, изучали.... <button type="button" class="reviews-item__btn btn-popup" data-mfp-src="#rev3">далее</button>

                        <div id="rev3" class="popup reviews__popup mfp-hide" data-simplebar>
                            <header class="reviews-item__header">
                                <div class="reviews-item__ava"><img src="images/dist/ava.png" alt=""></div>
                                <div class="reviews-item__name">
                                    <b>Анна</b>
                                    Эмили 2,5 месяца
                                </div>
                            </header>
                            “Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очень вниматель плавали, изучали. Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очень вниматель плавали, изучали
                        </div>
                    </div>

                    <div class="swiper-slide reviews-item">
                        <header class="reviews-item__header">
                            <div class="reviews-item__ava"><img src="images/dist/ava.png" alt=""></div>
                            <div class="reviews-item__name">
                                <b>Анна</b>
                                Эмили 2,5 месяца
                            </div>
                        </header>
                        “Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очеь вниматель плавали, изучали.... <button type="button" class="reviews-item__btn btn-popup" data-mfp-src="#rev4">далее</button>

                        <div id="rev4" class="popup reviews__popup mfp-hide" data-simplebar>
                            <header class="reviews-item__header">
                                <div class="reviews-item__ava"><img src="images/dist/ava.png" alt=""></div>
                                <div class="reviews-item__name">
                                    <b>Анна</b>
                                    Эмили 2,5 месяца
                                </div>
                            </header>
                            “Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очень вниматель плавали, изучали. Начинали ходить в 2,5 месяца по совету невролога. Мы очень ленивые и жутко не хотели ложиться на животик учиться держать головку. Пришли к Наталье Аркадьевне, первое занятие прошло на ура, мы даже сами удивились, 30 минут без слёз. Очень вниматель плавали, изучали
                        </div>
                    </div>

                </div>
                <div class="reviews-slider-pagination slider-3col-pagination slider-pagination"></div>
            </div>
            <button class="reviews-prev slider-prev slider-3col-prev">Назад</button>
            <button class="reviews-next slider-next slider-3col-next">Вперед</button>
        </div>

    </div>
</section>

<section class="questions">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="title title_center questions__title">Часто задаваемые вопросы</h2>
                <div class="questions__drop drop">
                    <h3 class="questions__btn drop-btn">Как проходят занятия?</h3>
                    <div class="questions__content drop-content">
                        <h4>Правила посещения Акваклуба Немо</h4>
                        <p>Согласуйте время посещения заранее. <br>
                            2. Рекомендуем приходить в бассейн за 15 минут до начала занятия,чтобы иметь возможность подготовиться. <br>
                            3. Вход в зону бассейна осуществляется за 1-2 минуты до начала занятия, чтобы ополоснуть ребенка. <br>
                            4. Посещение бассейна возможно только при наличии справки от педиатра об отсутствии противопоказаний, а для детей от года еще и отрицательные показатели анализов на энтеробиоз и яйца глист. <br>
                            5. Приходите на занятие только тогда, когда Вы и ребенок чувствуете себя хорошо. <br>
                            6. Запись на занятия возможно расписать сразу после покупки абонемента. <br>
                            7. <b>Абонемент «Стандарт»</b> предусматривает отмену занятия до 18.00 предыдущего дня. Занятие списывается с абонемента, если отмена или перенос происходит позже этого времени. Уведомление о смене тренера не предусмотрено. <br>
                            8. <b>Абонемент «Лояльный»</b> позволяет получать уведомление о смене тренера и отменять занятие день в день без потери занятия. <br>
                            9. Срок действия абонементов «Стандарт» и «Лояльный» 1 месяц + 2 недели заморозки, «Строгий» 4 недели, без возможности переноса занятий. Если возникла необходимость перенести занятия, позаботьтесь об этом своевременно т.к. в конце месяца может быть мало свободных мест. <br>
                            10. Воздержитесь от еды и напитков в раздевалке и в зоне бассейна. <br>
                            11. Для поддержания чистоты в бассейне мы настоятельно просим посещать душ перед входом в воду. Принимать душ следует с мылом или другим средством для поддержания личной гигиены. <br>
                            12. Если во время занятия ребенок захотел в туалет, пользуйтесь горшком. В случае загрязнения воды каловыми массами Вашим малышом, будьте готовы возместить затраты на очистку воды и к отмене других сеансов. <span style="color: #FF1F0D;">Штраф за загрязнение бассейна составляет от 2000 рублей</span>. <br>
                            13. Родители обязаны соблюдать и поддерживать общественный порядок и общепринятые нормы поведения. Споры, конфликты, некорректное и неуважительное отношение родителей по отношению к другим клиентам, тренерскому составу, обслуживающему персоналу исключены.</p>
                        <h4>Техника безопасности</h4>
                        <p>1. Во время пребывания в центре, убедитесь, что ребенок все время находится рядом с Вами. <br>
                            2. Прежде чем пойти в бассейн с ребенком в первый раз, убедитесь, что у Вас есть вся необходимая информация о прививках. <br>
                            3. Для переодевания младенцев запрещается использовать лавочки. Для переодевания малышей используйте пеленальные столы. Не оставляйте детей без присмотра на пеленальном столе. <br>
                            4. Во время занятий дети не должны находиться на бортике бассейна, если это не предусмотрено программой занятий. <br>
                            5. В целях безопасности запрещается спускаться по лестнице спиной к лестнице, при необходимости попросите преподавателя помочь Вам. <br>
                            6. Вход выход в бассейн. Если Вам нужно покинуть занятие раньше времени, пожалуйста, сообщите об этом ведущему занятие преподавателю. Вход в зону бассейна разрешен только после подтверждения преподавателя, ведущего занятие. <br>
                            7. После занятия убедитесь, что не забыли в зоне бассейна личные вещи. <br>
                            8. За безопасность ребенка полную ответственность несет родитель (сопровождающее лицо). <br>
                            9. При нарушении техники безопасности, администрация не несет ответственность за полученные травмы и ущерб личному имуществу и третьим лицам.
                        </p>
                    </div>
                </div>

                <div class="questions__drop drop">
                    <h3 class="questions__btn drop-btn">Правила посещения бассейна</h3>
                    <div class="questions__content drop-content">
                        <h4>Правила посещения Акваклуба Немо</h4>
                        <p>Согласуйте время посещения заранее. <br>
                            2. Рекомендуем приходить в бассейн за 15 минут до начала занятия,чтобы иметь возможность подготовиться. <br>
                            3. Вход в зону бассейна осуществляется за 1-2 минуты до начала занятия, чтобы ополоснуть ребенка. <br>
                            4. Посещение бассейна возможно только при наличии справки от педиатра об отсутствии противопоказаний, а для детей от года еще и отрицательные показатели анализов на энтеробиоз и яйца глист. <br>
                            5. Приходите на занятие только тогда, когда Вы и ребенок чувствуете себя хорошо. <br>
                            6. Запись на занятия возможно расписать сразу после покупки абонемента. <br>
                            7. <b>Абонемент «Стандарт»</b> предусматривает отмену занятия до 18.00 предыдущего дня. Занятие списывается с абонемента, если отмена или перенос происходит позже этого времени. Уведомление о смене тренера не предусмотрено. <br>
                            8. <b>Абонемент «Лояльный»</b> позволяет получать уведомление о смене тренера и отменять занятие день в день без потери занятия. <br>
                            9. Срок действия абонементов «Стандарт» и «Лояльный» 1 месяц + 2 недели заморозки, «Строгий» 4 недели, без возможности переноса занятий. Если возникла необходимость перенести занятия, позаботьтесь об этом своевременно т.к. в конце месяца может быть мало свободных мест. <br>
                            10. Воздержитесь от еды и напитков в раздевалке и в зоне бассейна. <br>
                            11. Для поддержания чистоты в бассейне мы настоятельно просим посещать душ перед входом в воду. Принимать душ следует с мылом или другим средством для поддержания личной гигиены. <br>
                            12. Если во время занятия ребенок захотел в туалет, пользуйтесь горшком. В случае загрязнения воды каловыми массами Вашим малышом, будьте готовы возместить затраты на очистку воды и к отмене других сеансов. <span style="color: #FF1F0D;">Штраф за загрязнение бассейна составляет от 2000 рублей</span>. <br>
                            13. Родители обязаны соблюдать и поддерживать общественный порядок и общепринятые нормы поведения. Споры, конфликты, некорректное и неуважительное отношение родителей по отношению к другим клиентам, тренерскому составу, обслуживающему персоналу исключены.</p>
                        <h4>Техника безопасности</h4>
                        <p>1. Во время пребывания в центре, убедитесь, что ребенок все время находится рядом с Вами. <br>
                            2. Прежде чем пойти в бассейн с ребенком в первый раз, убедитесь, что у Вас есть вся необходимая информация о прививках. <br>
                            3. Для переодевания младенцев запрещается использовать лавочки. Для переодевания малышей используйте пеленальные столы. Не оставляйте детей без присмотра на пеленальном столе. <br>
                            4. Во время занятий дети не должны находиться на бортике бассейна, если это не предусмотрено программой занятий. <br>
                            5. В целях безопасности запрещается спускаться по лестнице спиной к лестнице, при необходимости попросите преподавателя помочь Вам. <br>
                            6. Вход выход в бассейн. Если Вам нужно покинуть занятие раньше времени, пожалуйста, сообщите об этом ведущему занятие преподавателю. Вход в зону бассейна разрешен только после подтверждения преподавателя, ведущего занятие. <br>
                            7. После занятия убедитесь, что не забыли в зоне бассейна личные вещи. <br>
                            8. За безопасность ребенка полную ответственность несет родитель (сопровождающее лицо). <br>
                            9. При нарушении техники безопасности, администрация не несет ответственность за полученные травмы и ущерб личному имуществу и третьим лицам.
                        </p>
                    </div>
                </div>

                <div class="questions__drop drop">
                    <h3 class="questions__btn drop-btn">Что нужно для первого занятия?</h3>
                    <div class="questions__content drop-content">
                        <h4>Правила посещения Акваклуба Немо</h4>
                        <p>Согласуйте время посещения заранее. <br>
                            2. Рекомендуем приходить в бассейн за 15 минут до начала занятия,чтобы иметь возможность подготовиться. <br>
                            3. Вход в зону бассейна осуществляется за 1-2 минуты до начала занятия, чтобы ополоснуть ребенка. <br>
                            4. Посещение бассейна возможно только при наличии справки от педиатра об отсутствии противопоказаний, а для детей от года еще и отрицательные показатели анализов на энтеробиоз и яйца глист. <br>
                            5. Приходите на занятие только тогда, когда Вы и ребенок чувствуете себя хорошо. <br>
                            6. Запись на занятия возможно расписать сразу после покупки абонемента. <br>
                            7. <b>Абонемент «Стандарт»</b> предусматривает отмену занятия до 18.00 предыдущего дня. Занятие списывается с абонемента, если отмена или перенос происходит позже этого времени. Уведомление о смене тренера не предусмотрено. <br>
                            8. <b>Абонемент «Лояльный»</b> позволяет получать уведомление о смене тренера и отменять занятие день в день без потери занятия. <br>
                            9. Срок действия абонементов «Стандарт» и «Лояльный» 1 месяц + 2 недели заморозки, «Строгий» 4 недели, без возможности переноса занятий. Если возникла необходимость перенести занятия, позаботьтесь об этом своевременно т.к. в конце месяца может быть мало свободных мест. <br>
                            10. Воздержитесь от еды и напитков в раздевалке и в зоне бассейна. <br>
                            11. Для поддержания чистоты в бассейне мы настоятельно просим посещать душ перед входом в воду. Принимать душ следует с мылом или другим средством для поддержания личной гигиены. <br>
                            12. Если во время занятия ребенок захотел в туалет, пользуйтесь горшком. В случае загрязнения воды каловыми массами Вашим малышом, будьте готовы возместить затраты на очистку воды и к отмене других сеансов. <span style="color: #FF1F0D;">Штраф за загрязнение бассейна составляет от 2000 рублей</span>. <br>
                            13. Родители обязаны соблюдать и поддерживать общественный порядок и общепринятые нормы поведения. Споры, конфликты, некорректное и неуважительное отношение родителей по отношению к другим клиентам, тренерскому составу, обслуживающему персоналу исключены.</p>
                        <h4>Техника безопасности</h4>
                        <p>1. Во время пребывания в центре, убедитесь, что ребенок все время находится рядом с Вами. <br>
                            2. Прежде чем пойти в бассейн с ребенком в первый раз, убедитесь, что у Вас есть вся необходимая информация о прививках. <br>
                            3. Для переодевания младенцев запрещается использовать лавочки. Для переодевания малышей используйте пеленальные столы. Не оставляйте детей без присмотра на пеленальном столе. <br>
                            4. Во время занятий дети не должны находиться на бортике бассейна, если это не предусмотрено программой занятий. <br>
                            5. В целях безопасности запрещается спускаться по лестнице спиной к лестнице, при необходимости попросите преподавателя помочь Вам. <br>
                            6. Вход выход в бассейн. Если Вам нужно покинуть занятие раньше времени, пожалуйста, сообщите об этом ведущему занятие преподавателю. Вход в зону бассейна разрешен только после подтверждения преподавателя, ведущего занятие. <br>
                            7. После занятия убедитесь, что не забыли в зоне бассейна личные вещи. <br>
                            8. За безопасность ребенка полную ответственность несет родитель (сопровождающее лицо). <br>
                            9. При нарушении техники безопасности, администрация не несет ответственность за полученные травмы и ущерб личному имуществу и третьим лицам.
                        </p>
                    </div>
                </div>

                <div class="questions__drop drop">
                    <h3 class="questions__btn drop-btn">Как происходит очистка воды в бассейне?</h3>
                    <div class="questions__content drop-content">
                        <h4>Правила посещения Акваклуба Немо</h4>
                        <p>Согласуйте время посещения заранее. <br>
                            2. Рекомендуем приходить в бассейн за 15 минут до начала занятия,чтобы иметь возможность подготовиться. <br>
                            3. Вход в зону бассейна осуществляется за 1-2 минуты до начала занятия, чтобы ополоснуть ребенка. <br>
                            4. Посещение бассейна возможно только при наличии справки от педиатра об отсутствии противопоказаний, а для детей от года еще и отрицательные показатели анализов на энтеробиоз и яйца глист. <br>
                            5. Приходите на занятие только тогда, когда Вы и ребенок чувствуете себя хорошо. <br>
                            6. Запись на занятия возможно расписать сразу после покупки абонемента. <br>
                            7. <b>Абонемент «Стандарт»</b> предусматривает отмену занятия до 18.00 предыдущего дня. Занятие списывается с абонемента, если отмена или перенос происходит позже этого времени. Уведомление о смене тренера не предусмотрено. <br>
                            8. <b>Абонемент «Лояльный»</b> позволяет получать уведомление о смене тренера и отменять занятие день в день без потери занятия. <br>
                            9. Срок действия абонементов «Стандарт» и «Лояльный» 1 месяц + 2 недели заморозки, «Строгий» 4 недели, без возможности переноса занятий. Если возникла необходимость перенести занятия, позаботьтесь об этом своевременно т.к. в конце месяца может быть мало свободных мест. <br>
                            10. Воздержитесь от еды и напитков в раздевалке и в зоне бассейна. <br>
                            11. Для поддержания чистоты в бассейне мы настоятельно просим посещать душ перед входом в воду. Принимать душ следует с мылом или другим средством для поддержания личной гигиены. <br>
                            12. Если во время занятия ребенок захотел в туалет, пользуйтесь горшком. В случае загрязнения воды каловыми массами Вашим малышом, будьте готовы возместить затраты на очистку воды и к отмене других сеансов. <span style="color: #FF1F0D;">Штраф за загрязнение бассейна составляет от 2000 рублей</span>. <br>
                            13. Родители обязаны соблюдать и поддерживать общественный порядок и общепринятые нормы поведения. Споры, конфликты, некорректное и неуважительное отношение родителей по отношению к другим клиентам, тренерскому составу, обслуживающему персоналу исключены.</p>
                        <h4>Техника безопасности</h4>
                        <p>1. Во время пребывания в центре, убедитесь, что ребенок все время находится рядом с Вами. <br>
                            2. Прежде чем пойти в бассейн с ребенком в первый раз, убедитесь, что у Вас есть вся необходимая информация о прививках. <br>
                            3. Для переодевания младенцев запрещается использовать лавочки. Для переодевания малышей используйте пеленальные столы. Не оставляйте детей без присмотра на пеленальном столе. <br>
                            4. Во время занятий дети не должны находиться на бортике бассейна, если это не предусмотрено программой занятий. <br>
                            5. В целях безопасности запрещается спускаться по лестнице спиной к лестнице, при необходимости попросите преподавателя помочь Вам. <br>
                            6. Вход выход в бассейн. Если Вам нужно покинуть занятие раньше времени, пожалуйста, сообщите об этом ведущему занятие преподавателю. Вход в зону бассейна разрешен только после подтверждения преподавателя, ведущего занятие. <br>
                            7. После занятия убедитесь, что не забыли в зоне бассейна личные вещи. <br>
                            8. За безопасность ребенка полную ответственность несет родитель (сопровождающее лицо). <br>
                            9. При нарушении техники безопасности, администрация не несет ответственность за полученные травмы и ущерб личному имуществу и третьим лицам.
                        </p>
                    </div>
                </div>

                <div class="questions__drop drop">
                    <h3 class="questions__btn drop-btn">Отличие абонементов «Стандарт» и «Лояльный» </h3>
                    <div class="questions__content drop-content">
                        <h4>Правила посещения Акваклуба Немо</h4>
                        <p>Согласуйте время посещения заранее. <br>
                            2. Рекомендуем приходить в бассейн за 15 минут до начала занятия,чтобы иметь возможность подготовиться. <br>
                            3. Вход в зону бассейна осуществляется за 1-2 минуты до начала занятия, чтобы ополоснуть ребенка. <br>
                            4. Посещение бассейна возможно только при наличии справки от педиатра об отсутствии противопоказаний, а для детей от года еще и отрицательные показатели анализов на энтеробиоз и яйца глист. <br>
                            5. Приходите на занятие только тогда, когда Вы и ребенок чувствуете себя хорошо. <br>
                            6. Запись на занятия возможно расписать сразу после покупки абонемента. <br>
                            7. <b>Абонемент «Стандарт»</b> предусматривает отмену занятия до 18.00 предыдущего дня. Занятие списывается с абонемента, если отмена или перенос происходит позже этого времени. Уведомление о смене тренера не предусмотрено. <br>
                            8. <b>Абонемент «Лояльный»</b> позволяет получать уведомление о смене тренера и отменять занятие день в день без потери занятия. <br>
                            9. Срок действия абонементов «Стандарт» и «Лояльный» 1 месяц + 2 недели заморозки, «Строгий» 4 недели, без возможности переноса занятий. Если возникла необходимость перенести занятия, позаботьтесь об этом своевременно т.к. в конце месяца может быть мало свободных мест. <br>
                            10. Воздержитесь от еды и напитков в раздевалке и в зоне бассейна. <br>
                            11. Для поддержания чистоты в бассейне мы настоятельно просим посещать душ перед входом в воду. Принимать душ следует с мылом или другим средством для поддержания личной гигиены. <br>
                            12. Если во время занятия ребенок захотел в туалет, пользуйтесь горшком. В случае загрязнения воды каловыми массами Вашим малышом, будьте готовы возместить затраты на очистку воды и к отмене других сеансов. <span style="color: #FF1F0D;">Штраф за загрязнение бассейна составляет от 2000 рублей</span>. <br>
                            13. Родители обязаны соблюдать и поддерживать общественный порядок и общепринятые нормы поведения. Споры, конфликты, некорректное и неуважительное отношение родителей по отношению к другим клиентам, тренерскому составу, обслуживающему персоналу исключены.</p>
                        <h4>Техника безопасности</h4>
                        <p>1. Во время пребывания в центре, убедитесь, что ребенок все время находится рядом с Вами. <br>
                            2. Прежде чем пойти в бассейн с ребенком в первый раз, убедитесь, что у Вас есть вся необходимая информация о прививках. <br>
                            3. Для переодевания младенцев запрещается использовать лавочки. Для переодевания малышей используйте пеленальные столы. Не оставляйте детей без присмотра на пеленальном столе. <br>
                            4. Во время занятий дети не должны находиться на бортике бассейна, если это не предусмотрено программой занятий. <br>
                            5. В целях безопасности запрещается спускаться по лестнице спиной к лестнице, при необходимости попросите преподавателя помочь Вам. <br>
                            6. Вход выход в бассейн. Если Вам нужно покинуть занятие раньше времени, пожалуйста, сообщите об этом ведущему занятие преподавателю. Вход в зону бассейна разрешен только после подтверждения преподавателя, ведущего занятие. <br>
                            7. После занятия убедитесь, что не забыли в зоне бассейна личные вещи. <br>
                            8. За безопасность ребенка полную ответственность несет родитель (сопровождающее лицо). <br>
                            9. При нарушении техники безопасности, администрация не несет ответственность за полученные травмы и ущерб личному имуществу и третьим лицам.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="addresses">
    <div class="container">
        <h2 class="title title_center addresses__title">Адреса филиалов</h2>
        <div class="tabs addresses__tabs">
            <ul class="tabs-nav">
                <li class="active li-list">Списком</li>
                <li class="li-map">На карте</li>
            </ul>
            <div class="tabs-content addresses__list active">
                <h3 class="addresses-tab__title">Наши бассейны</h3>
                <div class="addresses__item filial-link">г. Москва, ул. Кировоградская 36 <span>(Пражская)</span></div>
                <div class="addresses__item filial-link">г. Москва, ул. Винокурова 24, к4 <span>(Академическая)</span></div>
                <div class="addresses__item filial-link">г. Люберцы, ул. Камова 11/5 <span>(Некрасовка)</span></div>
                <div class="addresses__item filial-link">г. Москва, ул. Мячковский бульвар 16, к1 <span>(Марьино)</span></div>
                <div class="addresses__item addresses__item_lc filial-link">г. Москва, ул. Петразоводская 11, к2 <span>(Ховрино)</span></div>
                <button type="button" class="btn-orange addresses__btn btn-popup" data-mfp-src="#call_me">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
            </div>
            <div class="tabs-content addresses__map">
                <script>
                    setTimeout(function(){
                        var elem = document.createElement('script');
                        elem.type = 'text/javascript';
                        elem.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8fa378a25cb572e342a7898497907976aa9665b4a196a85d2358b0633385eade&amp;width=600&amp;height=450&amp;lang=ru_RU&amp;scroll=true';
                        document.getElementsByClassName('addresses__map')[0].appendChild(elem);
                    }, 5000);
                </script>
                <button type="button" class="btn-orange addresses__btn addresses__btn_mobil btn-popup" data-mfp-src="#call_me">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
            </div>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-mobil__title">Контакты</div>
                <div class="footer__logo"><img src="images/dist/logo-f.svg" alt=""></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="footer__item">
                    <div class="footer__phone">
                        <a href="tel:+74951206711" class="phone">+7(495)120-67-11</a>
                        <span>Единый номер</span>
                    </div>
                    <button type="button" class="btn-orange footer__btn btn-popup" data-mfp-src="#call_me">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
                </div>
            </div>
            <div class="col-md-5 footer__group">
                <div class="footer__item">
                    <div class="footer__title">График работы</div>
                    <div class="footer__time">09:00 - 21:00</div>
                    <span>Без выходных</span>
                </div>
                <div class="footer__item">
                    <div class="footer__title">Присоединяйтесь</div>
                    <div class="soc">
                        <a href="#" class="soc-link" target="_blank"><img src="images/dist/icon/instagram.svg" alt=""></a>
                        <a href="#" class="soc-link" target="_blank"><img src="images/dist/icon/fa.svg" alt=""></a>
                        <a href="#" class="soc-link" target="_blank"><img src="images/dist/icon/vk.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer__item">
                    <div class="footer__title">Есть что написать?</div>
                    <a href="mailto:aquanemo@yandex.ru" class="footer__email">aquanemo@yandex.ru</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 flex">
                <div class="copir">ООО "Акваклуб". ИНН: 7726432268 ОГРН: 118774650808 Юридический адрес: г. Москва, ул. Кировоградская 36 пом.XVIII тел. +7(977)680-02-61</div>
                <div class="vacans">Приглашаем на работу в наш дружный коллектив <a href="#" class="btn-white">ВАКАНСИИ</a></div>
            </div>
        </div>
    </div>
</footer>

<a href="https://api.whatsapp.com/send?phone=74951206711" class="whats-app" target="_blank">whats-app</a>

<div id="call_me" class="popup popup__form mfp-hide">
    <div class="popup-form__title">Запись на занятие</div>
    <form>
        <select name="filial" class="select" required>
            <option disabled value="1" >Выберите филиал</option>
            <option selected value="1" >ул. Кировоградская 36 (Пражская)</option>
            <option value="2">ул. Винокурова 24, к4 (Академическая)</option>
            <option value="3">Мячковский бульвар 16, к1 (Марьино)</option>
            <option value="4">ул. Камова 11/5 (Некрасовка)</option>
            <option value="5">ул. Петрозаводская 11, к2 (Ховрино)</option>
        </select>
        <input class="input" type="text" placeholder="Ваше имя">
        <input class="input phone-input" type="tel" placeholder="Номер телефона" required>
        <button type="submit" class="btn-orange">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
    </form>
    <div class="small">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c <a href="#politica" class="btn-popup">политикой конфиденциальности</a></div>
</div>

<div id="politica" class="popup mfp-hide politica" data-simplebar>
    <div class="politica__title">Политика конфиденциальности</div>
    <p>Я ознакомлен с тем, что в соответствии с требованиями Федерального закона от 27 июля 2006 г. №152-ФЗ «О персональных данных», включая положения пунктов 2-4 части 1 статьи 6 указанного Федерального закона, будет осуществляться обработка предоставляемых мною персональных данных, в том числе фамилии, имени, отчества; даты рождения; адреса проживания; сведений о номере основного документа, удостоверяющего личность, сведений о дате выдачи указанного документа и выдавшем его органе; номерах телефонов; адресах электронной почты (е-mail), а так же иных предоставляемых мною данных.</p>
    <p>Одновременно подтверждаю свое согласие на обработку и осуществление организацией  ООО «Акваклуб» следующих действий с моими персональными данными: сбор, запись, систематизацию, накопление, хранение, извлечение, уточнение, обновление, изменение, использование, обезличивание, распространение (в том числе передачу третьим лицам), блокирование, уничтожение. Настоящее согласие не устанавливает предельных сроков обработки персональных данных.</p>
    <p>Персональные данные предоставляются мною и обрабатываются для обеспечения моей возможности использования услуг и сервисов ООО «Акваклуб».</p>
    <p>Настоящим также подтверждаю свое согласие на получение информации о предоставлении мне информации о деятельности  компании , проводимых акциях и мероприятиях.  Указанная информация может быть предоставлена мне с применением неголосовых коммуникаций (путем рассылки по сети подвижной радиотелефонной связи коротких текстовых sms-сообщений, рассылки ussd-сообщений и др.), посредством направления мне сведений по информационно-телекоммуникационной сети «Интернет» на предоставленные мной номер телефона и (или) адрес электронной почты.</p>
</div>

<div id="pay-popup" class="popup mfp-hide pay-popup" data-simplebar>
    <div class="pay-popup__title">Процесс оплаты и возврата по картам</div>
    <h4>Оплата</h4>
    <ul>
        <li>Для выбора оплаты пакетов услуг с помощью банковской карты на соответствующей странице необходимо нажать кнопку «Оплатить» или «Оплатить онлайн».</li>
        <li>Оплата происходит через ПАО СБЕРБАНК с использованием банковских карт следующих платёжных систем:</li>
    </ul>
    <p><img src="images/dist/icon/p1.png" alt=""> МИР</p>
    <p><img src="images/dist/icon/p2.png" alt=""> VISA International</p>
    <p><img src="images/dist/icon/p3.png" alt=""> Mastercard Worldwide</p>
    <p><img src="images/dist/icon/p4.png" alt=""> JCB</p>
    <ul>
        <li>Для оплаты (ввода реквизитов Вашей карты) Вы будете перенаправлены на платёжный шлюз ПАО СБЕРБАНК.</li>
        <li>Соединение с платёжным шлюзом и передача информации осуществляется в защищённом режиме с использованием протокола шифрования SSL.</li>
        <li>В случае если Ваш банк поддерживает технологию безопасного проведения интернет-платежей Verified By Visa, MasterCard SecureCode, MIR Accept, J-Secure, для проведения платежа также может потребоваться ввод специального пароля.</li>
        <li>Настоящий сайт поддерживает 256-битное шифрование.</li>
        <li>Конфиденциальность сообщаемой персональной информации обеспечивается ПАО СБЕРБАНК.</li>
        <li>Введённая информация не будет предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ.</li>
        <li>Проведение платежей по банковским картам осуществляется в строгом соответствии с требованиями платёжных систем МИР, Visa Int., MasterCard Europe Sprl, JCB.</li>
    </ul>
    <h4>Возврат</h4>
    <ul>
        <li>Возврат средств инициируется личным обращением на e-mail: <b>aquanemo@yandex.ru</b> или по телефону: <b>+7(495)120-67-11</b>.</li>
        <li>Возврату подлежат только неактивированные абонементы. Оплатченые разовые и/или пробные занятия возврату не подлежат.</li>
        <li>При возникновении проблем по оплате заказа картой, через сайт, необходимо обратиться к нам, по номеру +7(495)120-67-11, или написать на почту: aquanemo@yandex.ru, мы постараемся решить вашу проблему.</li>
        <li>В ином случае, обратитесь в службу поддержки вашего банка (обычно данная служба является круглосуточной), номер телефона службы поддержки указан на обратной стороне вашей карты.</li>
    </ul>
    <h4>Возможные причины проблем, при оплате по карте:</h4>
    <ol>
        <li>Перед оплатой проверьте наличие денежных средств на вашей карте;</li>
        <li>Проверьте правильность ввода номера карты, срока действия, CVV/CVC кода;</li>
        <li>Ограничение банка на объем оплаты в течении дня;</li>
        <li>Ограничение банка на проведение оплаты через интернет.</li>
    </ol>
</div>


<script src="js/app.min.js?v3"></script>
<script src="js/vendor/jquery.maskedinput.js?v3"></script>

</body>
</html>











{{--
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Акваклуб Nemo">
    <meta name="description" content="Акваклуб Nemo. Индивидуальные занятия плавания для деток от 1,5 месяцев до 7 лет">
    <meta name="keywords" content="Акваклуб немо, акваклуб nemo, бассейн на пражской, грудничковое плавание, аква немо">

    <meta name="msapplication-TileColor" content="#06c5b2">
    <meta name="theme-color" content="#06c5b2">
    <!-- Animation. -->
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <!-- Animation. -->

    <title>Акваклуб Nemo</title>

    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/style.css?vr=30') }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
    <style type="text/css">
        .fancybox-container {
            width: 500px !important;
            left: 50%;
            margin-left: -250px;
            height: 300px;
            top: 50%;
            margin-top: -150px;
        }

        .fancybox-slide {
            padding: 0px !important;
        }

        @media (max-width: 768px) {
            .fancybox-container {
                width: 300px !important;
                left: 50%;
                margin-left: -150px;
            }
        }
    </style>
</head>

<body>

@yield('header')

<section class="about" id="about">
    <div class="container clearfix">

        @yield('aboutUs')

    </div>
</section>

<section class="the-advantages-of-early-development">
    <div class="container clearfix">

        @yield('theBenefitsOfEarlySwimming')

    </div>
</section>

<section class="age-of-child">
    <div class="container">

        @yield('whoSwimsWithUs')

    </div>
</section>

<section class="our-trainers" id="trainer">
    <div class="container">

        @yield('trainers')

    </div>
</section>


<section class="subscribers-for-visits" id="price">
    <div class="container">

        @yield('prices')

    </div>
</section>

<section class="akcii-new-block" id="akcii">
	<div class="container">

        @yield('promotions')

    </div>
</section>

<section class="submit-your-application">
    <div class="container clearfix">

        @yield('swimNeverNotEarly')

    </div>
</section>

<section class="how-we-swim">
    <div class="container">

        @yield('howWeSwim')

    </div>
</section>

<section class="security">
    <div class="container">

        @yield('security')

    </div>
</section>

<section class="reviews" id="reviews">
    <div class="container">

        @yield('reviews')

    </div>
</section>

<section class="swimming-pool">
    <div class="container">

        @yield('swimmingPool')

    </div>
</section>

<section class="map" id="contact1">
    <div class="map-yandex" data-aos="fade-up">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A093e661b11df50466b0ca833b22fd1a834444e50f8bca892350fad2f8da5ac37&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</section>


@yield('footer')


<!-- popups -->
<div class="popup">
    @yield('trialLesson')
</div>
<div class="popup-overlay"></div>



<div class="popup2">
    @yield('rules')
</div>
<div class="popup-overlay"></div>



<div class="popup3">
    @yield('medicalCertificates')
</div>
<div class="popup-overlay"></div>



<div class="popup4">
    @yield('contactUs')
</div>
<div class="popup-overlay"></div>



<div class="popup5">
    @yield('vacancies')
</div>
<div class="popup-overlay"></div>



<div class="popup7">
    @yield('cardPaymentProcess')
</div>
<div class="popup-overlay"></div>



<div class="popup-overlay"></div>

<div class="payment-overlay">
    <div id="payment">
        <div class="container">
            <div id="close">
                <img src="{{ asset('images/close.svg') }}">
            </div>

            <span class="title">ОНЛАЙН ОПЛАТА</span>

            <form>
                <div class="container_back filial_container">
                    <p>Выберите филиал:</p>
                    <div class="radio_box flex jcsb">
                        <div>
                            <input type="radio" name="filial" id="kirovogradskaya" value="Пражская" checked="checked" /><label for="kirovogradskaya"><strong>ул. Кировоградская 36</strong> <span>(м. Пражская )</span></label>
                        </div>
                        <div>
                            <input type="radio" name="filial" id="vinokurova" value="Винокурова" /><label for="vinokurova"><strong>ул. Винокурова 24, к4</strong><span>(м. Академическая)</span></label>
                        </div>

                    </div>
                </div>
                <div class="flex jcsb">
                    <div class="container_back vid_zanyatiy">
                        <p>Вид занятий:</p>
                        <div class="radio_container">
                            <label class="radio">
                                <input type="radio" name="vid_zanyatiy" value="Индивидуальные" checked="checked"><span>Индивидуальные</span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="vid_zanyatiy" value="Групповые"><span>Групповые</span>
                            </label>
                        </div>
                    </div>
                    <div class="container_back basseyn">
                        <p>Бассейн:</p>
                        <div class="radio_container">
                            <label class="radio">
                                <input type="radio" name="basseyn" value="Маленький" checked="checked"><span>Маленький</span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="basseyn" value="Большой"><span>Большой</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex jcsb">
                    <div class="container_back kolichestvo_zanyatiy">
                        <p>Количество занятий:</p>
                        <div class="radio_box flex">
                            <div>


                                <input type="radio" name="kolichestvo_zanyatiy" id="kolichestvo_zanyatiy_4" value="4" checked="checked" /><label for="kolichestvo_zanyatiy_4">4</label>
                            </div>
                            <div>
                                <input type="radio" name="kolichestvo_zanyatiy" id="kolichestvo_zanyatiy_8" value="8" /><label for="kolichestvo_zanyatiy_8">8</label>
                            </div>
                            <div>
                                <input type="radio" name="kolichestvo_zanyatiy" id="kolichestvo_zanyatiy_12" value="12" /><label for="kolichestvo_zanyatiy_12">12</label>
                            </div>
                        </div>
                    </div>
                    <div class="container_back vid_abonementa">
                        <div class="with_abcolute">
                            <p>Вид абонемента:</p>
                            <div id="information">
                                <img src="{{ asset('images/information.svg') }}">
                                <div class="union">
                                    <p>Абонемент «Лояльный»:</p>
                                    <span>+Отмена занятия день в день без потери занятия<br>+Заранее информируем о замене тренера</span>
                                </div>
                            </div>
                        </div>


                        <div class="radio_box flex jcsb">
                            <div>


                                <input type="radio" name="vid_abonementa" id="vid_abonementa_standard" value="Стандарт" checked="checked" /><label for="vid_abonementa_standard">Стандарт</label>
                            </div>
                            <div>
                                <input type="radio" name="vid_abonementa" id="vid_abonementa_loyalniy" value="Лояльный" /><label for="vid_abonementa_loyalniy">Лояльный</label>
                            </div>
                        </div>


                    </div>
                </div>

            </form>

            <span class="price">Стоимость: <span>0</span></span>

            <form id="payment_form" method="POST" accept-charset="UTF-8" action="https://partner.rficb.ru/alba/input/">
                <input type="hidden" name="key" value="" />
                <input type="hidden" name="cost" value="0" />
                <input type="hidden" name="name" value="" />
                <input type="hidden" name="default_email" value="" />
                <input type="hidden" name="order_id" value="0" />
                <input type="submit" id="payment_button" value="ОПЛАТИТЬ АБОНЕМЕНТ" />
            </form>
        </div>
        <!--online payment-->

    </div>
    <!--/online payment-->
</div>

<!-- scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('libs/slick/slick.min.js') }}"></script>
<script src="{{ asset('js/jquery.toshowhide.js?vr=21') }}"></script>
<script src="{{ asset('libs/jquery.custom-scroll.js') }}"></script>


<script src="{{ asset('js/index-page.js?vr=24') }}"></script>
<script src="{{ asset('js/prices.js?vr=11') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!--[if lte IE 8]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->

<!-- Yclients -->
--}}
{{--<script type="text/javascript" src="https://w76658.yclients.com/widgetJS" charset="UTF-8"></script>--}}{{--


<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '583255442199190');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=583255442199190&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->

<!-- Yclients -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45529422 = new Ya.Metrika({
                    id: 45529422,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {}
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function() {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/45529422" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- Animation. -->
<script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="{{ asset('js/app-aos.js') }}"></script>
<!-- Animation. -->

<!-- Модальное окно закрытие клуба -->
<script type="text/javascript">
    var delay_popup = 1000;
    setTimeout("document.getElementById('bg_popup').style.display='block'", delay_popup);
</script>
<!-- Модальное окно закрытие клуба -->
</body>

</html>
--}}
