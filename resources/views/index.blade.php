<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <!-- Animation. -->

    <title>Акваклуб Nemo</title>

    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!-- http://phpbbex.com/oldies/ru.html -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lte IE 8]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->

    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset("css/style.css?vr=21") }}">


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
</head>

<body>

<header class="header">
    <div class="header-top clearfix">
        <div class="container">
            <div class="menu-mobile_div visible-mobile">
                <div class="menu-btn">
                    <input type="checkbox" id="menu36" />
                    <label for="menu36">
                        <div></div>
                        <div></div>
                        <div></div>
                    </label>
                </div>
                <div class="menu-mobile">
                    <ul>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#price">Стоимость занятий</a></li>
                        <li><a href="#trainer">Тренеры</a></li>
                        <li><a href="#reviews">Отзывы</a></li>
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="adcdsc">
                <div class="header-logo" id="logos">
                    <a href="/">
                        <picture>
                            <source srcset="{{ asset("images/logo.svg") }}">
                            <img src="{{ asset("images/logo.svg") }}" alt="Акваклуб Nemo" width="135" height="72">
                        </picture>
                    </a>
                </div>
            </div>



            <div class="header-phones">
                <address>
                    <div class="flex jcsb">
                        <div class="first-phone">
                            <a href="tel:+79776800261" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;">+7(977)680-02-61</a>
                            <p>ул. Кировоградская 36 </p>
                            <span>Пражская<i>800м</i></span>
                        </div>
                        <div class="second-phone">
                            <a href="tel:+79776800262" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;">+7(977)680-02-62</a>
                            <p>ул. Винокурова 24, к4</p>
                            <span>Академическая<i>1,7км</i></span>
                        </div>
                        <div class="third-phone" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;">
                            <a href="tel:+79776800263">+7(977)680-02-63</a>
                            <p>Мячковский бульвар 16, к1</p>
                            <span>Марьино<i>1,1км</i></span>
                        </div>
                        <div class="fourth-phone">
                            <a href="tel:+79776800266" onclick="yaCounter45529422.reachGoal('kamova'); return true;">+7(977)680-02-66</a>
                            <p>г.Люберцы, ул. Камова 11/5 </p>
                            <span>Некрасовка<i>2,5 км</i></span>
                        </div>

                    </div>
                </address>
                <div class="header-phone-hidden">
                    <a class="js-popup4" href="tel:+79776800261"></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="snow">
        <div class="container">
            <div class="flex jcsb">
                <div class="nav">
                    <ul class="flex">
                        <li><a href="#logos">Главная</a></li>
                        <li><a href="#price">Стоимость</a></li>
                        <li><a href="#trainer">Тренеры</a></li>
                        <li><a href="#reviews">Отзывы</a></li>

                        <li><a href="#contact1">Контакты</a></li>
                    </ul>
                </div>
                <div class="soc flex jcsb aic">
                    <a href="https://vk.com/aquaclubnemo" target="_blank"><img src="{{ asset("images/vk_red_copy.png") }}"></a>
                    <a href="https://www.facebook.com/aquaclubnemo" target="_blank"><img src="{{ asset("images/fb_red copy.svg") }}"></a>
                    <a href="https://www.instagram.com/aquaclubnemo/" target="_blank"><img src="{{ asset("images/insta_red copy.png") }}"></a>
                    <a href="" data-type="ПРОБНОЕ ЗАНЯТИЕ" class="js-popup button--border">Пробное занятие</a>
                </div>
            </div>
        </div>
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </nav>
    <div class="container">


        <div class="header-bottom">
            <h1 data-aos="fade-up">Плавать раньше, чем ходить!</h1>
            <p data-aos="fade-up">
                Индивидуальные занятия плаванием для детей
                от 1,5 месяцев до 7 лет в Люберцах, Чертаново, Марьино
                и Академическом районах
            </p>
            <p data-aos="fade-up">

                <span>Cкидка -30% на первое занятие</span>
            </p>
            <p>
                <a class="js-popup btn" data-type="ПРОБНОЕ ЗАНЯТИЕ" href="index.html" data-aos="fade-up">ПРОБНОЕ ЗАНЯТИЕ</a>
        </div>
    </div>
</header>

<section class="about" id="about">
    <div class="container clearfix">
        <div class="about-image left" data-aos="fade-up">
            <img src="{{ asset("images/about.jpg") }}" alt="Детский акваклуб «Немо»" width="507" height="475">
            <a id="play-video" class="video-play-button" href="#"> <span></span></a>

            <div id="video-overlay" class="video-overlay">
                <a class="video-overlay-close">&times;</a>
            </div>

        </div>
        <div class="about-description right">
            <h2 data-aos="fade-up">О нас</h2>
            <p data-aos="fade-up">
                Детский акваклуб «Немо» проводит индивидуальные занятия плаванием с детьми&nbsp;<span>от 1.5 месяцев до 7 лет</span>.&nbsp;Занятия проходят в игровой динамике&nbsp;с учетом возраста ребёнка, состояния его здоровья, психологических особенностей и умения держаться на воде.</p>
        </div>
    </div>
</section>

<section class="the-advantages-of-early-development">
    <div class="container clearfix">
        <h2 data-aos="fade-up">Польза раннего плавания</h2>

        <div class="early-development-left">
            <div class="top" data-aos="fade-up">
                <h3>Иммунитет</h3>
                <p>
                    Занятия плаванием закаляют
                    организм, повышают
                    иммунитет и устойчивость
                    к простудным заболеваниям
                </p>
            </div>

            <div class="middle" data-aos="fade-up">
                <h3>Самоспасение</h3>
                <p>
                    Адаптация к водной
                    среде и привитие
                    техники самоспасения
                </p>
            </div>

            <div class="bottom" data-aos="fade-up">
                <h3>Навыки</h3>
                <p>
                    Освоение техники плавания,
                    приобритение навыков правильного
                    дыхания, преодоления страха перед
                    водой
                </p>
            </div>
        </div>
        <div class="early-development-center">
            <img src="{{ asset("images/baby2.png") }}">
        </div>
        <div class="early-development-right">
            <div class="top" data-aos="fade-up">
                <h3>Здоровье</h3>
                <p>
                    Укрепляет дыхательную и
                    сердечно-сосудистую систему,
                    снимает гипертонус
                    за 10 занятий
                </p>
            </div>

            <div class="middle" data-aos="fade-up">
                <h3>Активность</h3>
                <p>
                    Развитие двигательной
                    активности и физиологических
                    рефлексов у младенцев
                </p>
            </div>

            <div class="bottom" data-aos="fade-up">
                <h3>Игра</h3>
                <p>
                    Игровой характер занятий повышает
                    заинтересованность ребёнка к воде,
                    прививая ему любовь к плаванию
                </p>
            </div>
        </div>



        <div class="early-development-left2">
            <div class="top">
                <h3>Иммунитет</h3>
                <p>
                    Занятия плаванием закаляют
                    организм, повышают
                    иммунитет и устойчивость
                    к простудным заболеваниям
                </p>
            </div>

            <div class="middle">
                <h3>Здоровье</h3>
                <p>
                    Укрепляет дыхательную и
                    сердечно-сосудистую систему,
                    снимает гипертонус
                    за 10 занятий
                </p>
            </div>

            <div class="bottom">
                <h3>Самоспасение</h3>
                <p>
                    Освоение техники плавания,
                    приобритение навыков правильного
                    дыхания, преодоления страха перед
                    водой
                </p>
            </div>
        </div>

        <div class="early-development-right2">
            <div class="top">
                <h3>Навыки</h3>
                <p>
                    Адаптация к водной
                    среде и привитие
                    техники самоспасения
                </p>
            </div>

            <div class="middle">
                <h3>Активность</h3>
                <p>
                    Развитие двигательной
                    активности и физиологических
                    рефлексов у младенцев
                </p>
            </div>

            <div class="bottom">
                <h3>Игра</h3>
                <p>
                    Игровой характер занятий повышает
                    заинтересованность ребёнка к воде,
                    прививая ему любовь к плаванию
                </p>
            </div>
        </div>



        <div class="early-development-left3">
            <div class="top">
                <h3>Иммунитет</h3>
                <p>
                    Занятия плаванием закаляют
                    организм, повышают
                    иммунитет и устойчивость
                    к простудным заболеваниям
                </p>
            </div>

            <div class="middle">
                <h3>Здоровье</h3>
                <p>
                    Укрепляет дыхательную и
                    сердечно-сосудистую систему,
                    снимает гипертонус
                    за 10 занятий
                </p>
            </div>

            <div class="bottom">
                <h3>Самоспасение</h3>
                <p>
                    Освоение техники плавания,
                    приобритение навыков правильного
                    дыхания, преодоления страха перед
                    водой
                </p>
            </div>

            <div class="top2">
                <h3>Активность</h3>
                <p>
                    Развитие двигательной
                    активности и физиологических
                    рефлексов у младенцев
                </p>
            </div>

            <div class="middle2">
                <h3>Навыки</h3>
                <p>
                    Адаптация к водной
                    среде и привитие
                    техники самоспасения
                </p>
            </div>

            <div class="bottom2">
                <h3>Игра</h3>
                <p>
                    Игровой характер занятий повышает
                    заинтересованность ребёнка к воде,
                    прививая ему любовь к плаванию
                </p>
            </div>
        </div>
    </div>
</section>

<section class="age-of-child">
    <div class="container">
        <h2 data-aos="fade-up">Кто у нас плавает</h2>

        <div class="age-of-child-items">
            <div class="tabs" data-aos="fade-up">
                <div class="tab left">
                    <picture>
                        <source srcset="{{ asset("images/age-of-child-icon1-active.svg") }}" type="image/svg+xml">
                        <img src="{{ asset("images/age-of-child-icon1-active.png") }}" alt="от 1.5 месяцев" width="53" height="49">
                    </picture>
                    <p>от 1,5 месяцев</p>
                </div>
                <div class="tab center">
                    <picture>
                        <source srcset="{{ asset("images/age-of-child-icon2.svg") }}" type="image/svg+xml">
                        <img src="{{ asset("images/age-of-child-icon2.png") }}" alt="Малыши от 2 до 4 лет" width="59" height="50">
                    </picture>
                    <p>от 2 до 4 лет</p>
                </div>
                <div class="tab right">
                    <picture>
                        <source srcset="img/age-of-child-icon3.svg" type="image/svg+xml">
                        <img src="{{ asset("images/age-of-child-icon3.png") }}" alt="Детки от 5 до 7 лет" width="42" height="49">
                    </picture>
                    <p>от 5 до 7 лет</p>
                </div>
            </div>

            <div class="tab_content" data-aos="fade-up">
                <div class="tab_item item1">
                    <h3>Груднички <span>от 1,5</span> месяцев</h3>
                    <p>
                        Наши программы разработаны с учетом возраста ребёнка от 1,5 месяцев, состояния его здоровья, психологических особенностей и умения держаться на воде. Многолетние исследования международных институтов, а также опыт преподавания этих методов в России показали, что «водные дети» более успешны в своем физическом, эмоциональном и умственном развитии.
                    </p>
                    <a class="js-popup btn" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="#" data-aos="zoom-in">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
                </div>
                <div class="tab_item item2">
                    <h3>Малыши <span>от 2 до 4</span> лет</h3>
                    <p>
                        Несмотря на игровой характер, каждое занятие – это тренировка для малыша, которая укрепляют его сердце, легкие и дыхательные пути. Постоянные занятия в теплой воде действуют на малышей расслабляющим образом, снимая гипертонус - укрепляют иммунитет, а также стимулируют аппетит и улучшают сон. Занятия ранним плаванием в нашем клубе проходят в игровой форме.
                    </p>
                    <a class="js-popup btn" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="#" data-aos="zoom-in">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
                </div>
                <div class="tab_item item3">
                    <h3>Детки <span>от 5 до 7</span> лет</h3>
                    <p>
                        Плавание с самого раннего возраста превосходно влияет на здоровье и развитие малыша, а раннее знакомство с водой в дружественной обстановке предотвращает появление боязни воды у детей в дальнейшем. Вода помогает детям развивать координацию и ориентацию в пространстве, чувство равновесия. Отсутствие гравитации в воде дает возможность упражнять мышцы малыша более эффективно, нежели на суше.
                    </p>
                    <a class="js-popup btn" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="#" data-aos="zoom-in">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-trainers" id="trainer">
    <div class="container">
        <h2 data-aos="fade-up">Наши тренеры</h2>
        <p data-aos="fade-up">
            Мы понимаем и уважаем индивидуальность личности малыша,
            создаем для него атмосферу доверия и уверенности</p>

        <div class="flexslider" id="f1" data-aos="fade-up">
            <div class="slides">
                <div>
                    <div class="flex jcsb">
                        <div class="trainer_foto"><img src="{{ asset("images/trainers/1.jpg") }}" /></div>
                        <div class="trainer_caption">
                            <h4>Яна Кокошникова</h4>

                            <p>51 год, 2 сына. Всю жизнь занимаюсь спортом. Летом люблю кататься на велосипеде. Зимой осваиваю горные лыжи. Имею I взрослый по плаванию и по гандболу. Имею: 20-ти летний опыт работы по обучению плавания детей в возрасте от 2-х лет и 3- х летний опыт работы с грудничками. Высшее образование. В 2012 году в институте восстановительной медицины прошла курс обучения грудничкового плавания и основы детского массажа. В 2018 году прошла курсы по: Watsu for newborns at home bath Watsu Sensory Introduction. Участвовала в Международной конференции в Санкт- Петербурге. Кратко о своей работе: Люблю наблюдать и участвовать в процессе, как детки получают удовольствие от занятий в воде. Приоритет-мягкий подход.

                            </p>
                            <div><a data-fancybox href="https://www.youtube.com/watch?v=V4Vha9mA1oY">Смотреть занятие с Яной</a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex jcsb">
                        <div class="trainer_foto"><img src="{{ asset("images/trainers/2.jpg") }}" /></div>
                        <div class="trainer_caption">
                            <h4>Светлана Гладилина</h4>

                            <p>Стаж работы с детьми более 30 лет. Образование Высшее Специальное. Закончила КГУ(Калининградский Государственный Университет) факультет: ФизВоспитания. Специализация плавание. Квалификация тренер - преподаватель. В Грудничковом плавании 8лет. Закончила курсы в Институте Восстановительной медицины г. Москва, имею свидетельство и сертификат по грудничковому и раннему плаванию и основы детского массажа. В наш ей семье все придерживаются здорового образа жизни лето - это море, велосипед, пешие прогулки. Зима - это коньки и лыжи. В своей работе люблю использовать классическую методику: наблюдения, игры, практики и слово (разговорный контакт).
                            </p>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex jcsb">
                        <div class="trainer_foto"><img src="{{ asset("images/trainers/3.jpg") }}" /></div>
                        <div class="trainer_caption">
                            <h4>Светлана Борисова</h4>

                            <p>Консультант по грудному вскармливанию. Член Международной Ассоциации  поддержки и развития раннего и грудничкового Плавания. Убеждена, что самым важным процессом в развитии и усвоения новых навыков для детей является игровая деятельность. Все дети разные и даже новорожденные рождаются с определенным темпераментом, поэтому все занятия проходят непринуждённо в игровой форме , учитывая возможности и потребности каждого ребенка. Нахожу подход даже к самым капризным детям , абсолютно разного возраста. На моих занятиях дети не плачут, а познают водную стихию , свои способности  и приобретают новые правильные плавательные  навыки -играя
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex jcsb">
                        <div class="trainer_foto"><img src="{{ asset("images/trainers/4.jpg") }}" /></div>
                        <div class="trainer_caption">
                            <h4>Наталья Севрюкова</h4>

                            <p>КМС по водному поло. 11 лет игра за команду "Штурм 2002". 9 лет была капитаном команды. Также участие в соревнованиях в спартакиадах, чемпионатах области и первенствах РФ.
                                Высшее образование "тренер-преподаватель", сертификат по "грудничковому плаванию"
                                3 года работы с детьми от 3-10 лет. 2,5 года работы с грудничками.
                                Легко и быстро нахожу общий язык с детьми.
                            </p>
                            <div><a data-fancybox href="https://www.youtube.com/watch?v=skQrUXswHp4">Смотреть занятие с Натальей</a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex jcsb">
                        <div class="trainer_foto"><img src="{{ asset("images/trainers/5.jpg") }}" /></div>
                        <div class="trainer_caption">
                            <h4>Снежана Саргунас</h4>

                            <p>Специалист по раннему развитию, инструктор по динамической гимнастике, раннему плаванию и закаливанию с высшим физкультурным педагогическим образованием по специализации "подводное плавание и дайвинг" (РГУФКСиТ (ГЦОЛИФК)). Опыт работы обучению плаванию с нуля - более 10лет.Могу научить любить плавать любого!</p>
                            <div><a data-fancybox href="https://www.youtube.com/watch?v=DZs2xXdY8bM">Смотреть занятие со Снежаной</a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex jcsb">
                        <div class="trainer_foto"><img src="{{ asset("images/trainers/6.jpg") }}" /></div>
                        <div class="trainer_caption">
                            <h4>Наталья Высоцкая</h4>

                            <p>КМС по плаванию,член сборной Удмуртской республики по плаванию, призер республиканских и зональных соревнований. Работала тренером и старшим тренером в ДЮСШ . Стаж работы тренером 15 лет. Воспитала КМС и МС по плаванию. В 2017 прошла курсы переквалификации по специальности тренер-преподаватель физической культуры и спорта, в 2018 курсы в повышения квалификации и переподготовке по программе " Теория и методика учебно-тренировочного процесса по плаванию", а также курсы "Грудничков он плавание" в АНО Институте восстановительной медицины
                                Наработанный опыт и знания применяю на занятияъ,чтобы помочь ребенку без стрессов научиться плавать и полюбить воду.
                            </p>
                            <div><a data-fancybox href="https://www.youtube.com/watch?v=3DqrVGOW2ow">Смотреть занятие с Натальей</a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex jcsb">
                        <div class="trainer_foto"><img src="{{ asset("images/trainers/7.jpg") }}" /></div>
                        <div class="trainer_caption">
                            <h4>Дамир Юмачиков</h4>

                            <p>30 лет, женат, воспитываю сына и дочь. Занимаюсь грудничковым плаванием с 2014 года, после рождения сына.Моя цель, как тренера по грудничковому плаванию заключается в том, чтобы научить ребёнка воспринимать воду как ещё одну жизненную среду, не бояться и любить её, свободно использовать водное пространство для своего эмоционального и физического развития, а также психологической разгрузки.При проведении занятий по грудничковому плаванию придерживаюсь определенных правил:
                                Превращаю в игру все задания и упражнения, которые выполняются детьми, ведь игровой метод позволяет изучать плавание, расширять диапазон двигательных возможностей в воде, способствовать раскрепощению и комфорту детей в водной среде;
                            </p>
                            <div><a data-fancybox href="https://www.youtube.com/watch?v=pm8Heua1Ngo">Смотреть занятие с Дамиром</a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex jcsb">
                        <div class="trainer_foto"><img src="{{ asset("images/trainers/8.jpg") }}" /></div>
                        <div class="trainer_caption">
                            <h4>Валерия Денисова</h4>

                            <p>Уверена что работа с детьми это моё призвание, стараюсь максимально вкладываться в занятие и думаю что это у меня получается! По образованию я тренер-преподаватель, закончила колледж КАМГАФКСиТ. В 2018 году прошла сертификации по нескольким направлениям в "Непоседа"- Новосибирская школа инструкторов детского плавания.
                                Сертификаты и опыт работы в гидрореабилитации детей грудного и дошкольного возраста, работаю с детками с особенностями развития. Знаю методику преподавания, в моем багаже множество различных игр на любой вкус и возраст ребёнка, так что скучно точно не будет! Занимаюсь спортом больше 9 лет, 2 года из них плаванием, и 8 лет армрестлингом имею звание мастера спорта.

                            </p>
                            <div><a data-fancybox href="https://www.youtube.com/watch?v=ntoIzG551Hw">Смотреть занятие с Валерией</a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex jcsb">
                        <div class="trainer_foto"><img src="{{ asset("images/trainers/9.jpg") }}" /></div>
                        <div class="trainer_caption">
                            <h4>Светлана Босова</h4>

                            <p>Специалист по грудничковому и раннему плаванию, аквагимнастике для беременных. Стаж работы более 12 лет. Имею сертификаты:"Адаптация детей с  РАС на занятиях по плаванию", “Здоровая спинка“, “Гидрореабилитация детей ДЦП“, а также квалификацию инструктора по аквагимнастике для беременных, грудничковому и раннем плаванию для детей. Мама 14-летнего пловца. Со своим ребёнком я прошла все этапы грудничкового, а затем раннего плавания. В плавании, как и в жизни, тоже бывают кризисные моменты, например, когда откуда-то появляется страх перед водой, которого раньше не было и т. д. И мы(малыш+ мама+папа+тренер) стараемся мягко все эти страхи преодолеть вместе.
                            </p>
                        </div>
                    </div>
                </div>


                <div>
                    <div class="flex jcsb">
                        <div class="trainer_foto"><img src="{{ asset("images/trainers/10.jpg") }}" /></div>
                        <div class="trainer_caption">
                            <h4>Аксенов Михаил</h4>

                            <p> Работа инструктором по грудничковому плаванию — лучшая профессия в мире, так как ты ежедневно открываешь перед ребенком новую реальность. Благодаря тебе, он уже в месяц - два находится в мире не только горизонтально , но и вертикально в 3D формате, а активность всех мышц его тела (которая возможна только при плавании) запускает неотвратимые механизмы его полноценного и адекватного развития. Первый грудничок, которого я научил плавать, плавает с 1987 года, моя внучка держалась на воде без поддержки уже в два месяца и сейчас, когда она стала взрослой (ей уже почти полтора года), ее невозможно оттянуть от воды.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex jcsb">
                        <div class="trainer_foto"><img src="{{ asset("images/trainers/11.jpg") }}" /></div>
                        <div class="trainer_caption">
                            <h4>Павел Мишаков</h4>

                            <p>С большим удовольствием работаю с детьми! С детства любил плавать, много времени в летний период проводил в воде. В школьное время занимался плаванием в бассейне, выступал на различных соревнованиях. В 2019 году закончил Рязанский государственный университет имени С.А. Есенина по профилю "Физическая культура". В процессе обучения занимался плаванием с детьми в летнем оздоровительном лагере. В  январе 2020 года успешно прошёл курс обучения "Грудничкового плавания " в системе клуба "Аквапузики". Считаю, что умение плавать и держать себя на воде является базовым навыком для любого человека и чем раньше начать ему обучаться, тем лучше для формирования правильных навыков и умений, которым я с удовольствием научу Ваших деток!
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <div class="flexslider" id="f2">
            <div class="slides_pagination">
                <div>
                    <img src="{{ asset("images/trainers/1.jpg") }}" />
                </div>
                <div>
                    <img src="{{ asset("images/trainers/2.jpg") }}" />
                </div>
                <div>
                    <img src="{{ asset("images/trainers/3.jpg") }}" />
                </div>
                <div>
                    <img src="{{ asset("images/trainers/4.jpg") }}" />
                </div>
                <div>
                    <img src="{{ asset("images/trainers/5.jpg") }}" />
                </div>
                <div>
                    <img src="{{ asset("images/trainers/6.jpg") }}" />
                </div>
                <div>
                    <img src="{{ asset("images/trainers/7.jpg") }}" />
                </div>
                <div>
                    <img src="{{ asset("images/trainers/8.jpg") }}" />
                </div>
                <div>
                    <img src="{{ asset("images/trainers/9.jpg") }}" />
                </div>
                <div>
                    <img src="{{ asset("images/trainers/10.jpg") }}" />
                </div>
                <div>
                    <img src="{{ asset("images/trainers/11.jpg") }}" />
                </div>



            </div>
        </div>
    </div>
</section>


<section class="subscribers-for-visits" id="price">
    <div class="container">
        <h2 data-aos="fade-up">Стоимость занятий</h2>
        <form>
            <div class="prices-block">
                <div class="prices-item prices-item-1" data-aos="fade-up">
                    <div class="top">
                        <div class="title" id="kirovograd">ул. Кировоградская 36</div>
                        <p>(метро Пражская)</p>
                    </div>

                    <div class="content">
                        <div class="content__wrapper">
                            <div class="section quantity" id="quantity">
                                <div class="subtitle">Выберите количестово занятий:</div>
                                <div class="flex-row">
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="trial" checked="checked"><span class="width-two">Пробное</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="oneoff"><span class="width-two">Разовое</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="4"><span>4</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="8"><span>8</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="12"><span>12</span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="note"></p>
                                </div>
                            </div>

                            <div class="list-hidden">
                                <div class="flex-row">

                                    <div class="section type_of_occupation" id="type_of_occupation">
                                        <div class="subtitle">Выберите вид занятий:</div>
                                        <div class="flex-row">
                                            <div class="item-radio">
                                                <input type="radio" name="type_of_occupation" value="individual" checked="checked"><span class="width-two">Инидвидуальное</span>
                                            </div>
                                            <div class="item-radio">
                                                <input type="radio" name="type_of_occupation" value="group"><span class="width-two">Групповое</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p class="note"></p>
                                        </div>
                                    </div>
                                    <div class="section swimming_pool" id="swimming_pool">
                                        <div class="subtitle">Выберите бассейн:</div>
                                        <div class="flex-row">
                                            <div class="item-radio">
                                                <input type="radio" name="swimming_pool" value="small_pool" checked="checked"><span class="width-two">Маленький</span>
                                            </div>
                                            <div class="item-radio">
                                                <input type="radio" name="swimming_pool" value="large_pool"><span class="width-two">Большой</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p class="note"></p>
                                        </div>
                                    </div>
                                    <div class="section type_of_subscription" id="type_of_subscription">
                                        <div class="subtitle">Выберите вид абонемента:</div>
                                        <div class="flex-row">
                                            <div class="item-radio">
                                                <input type="radio" name="type_of_subscription" value="strict" checked="checked"><span>Строгий</span>
                                            </div>
                                            <div class="item-radio">
                                                <input type="radio" name="type_of_subscription" value="standard"><span>Стандарт</span>
                                            </div>
                                            <div class="item-radio">
                                                <input type="radio" name="type_of_subscription" value="loyal"><span>Лояльный</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p class="note"></p>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="price-row">
                                <p>Стоимость:</p>
                                <div class="new-price"><span>0</span> ₽</div>
                            </div>

                        </div>

                        <div class="buttons-row">
                            <a href="" class="bt-1" target="_blank">Записаться</a>
                            <a href="" class="bt-2" target="_blank">Оплатить онлайн</a>
                        </div>

                    </div>

                </div>
            </div>

        </form>

        <form>

            <div class="prices-block" data-aos="fade-up">
                <div class="prices-item prices-item-2">

                    <div class="top">
                        <div class="title" id="vinokurova">ул. Винокурова 24, к4</div>
                        <p>(метро Академическая)</p>
                    </div>

                    <div class="content">
                        <div class="content__wrapper">
                            <div class="section quantity" id="quantity">
                                <div class="subtitle">Выберите количестово занятий:</div>
                                <div class="flex-row">
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="trial" checked="checked"><span class="width-two">Пробное</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="oneoff"><span class="width-two">Разовое</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="4"><span>4</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="8"><span>8</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="12"><span>12</span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="note"></p>
                                </div>
                            </div>

                            <div class="list-hidden">
                                <div class="flex-row">

                                    <div class="section type_of_occupation" id="type_of_occupation">
                                        <div class="subtitle">Вид занятий:</div>
                                        <div class="flex-row">

                                            <div class="item-radio" style="margin-left: auto;  margin-right: auto; width: 100%;">
                                                <input type="radio" name="type_of_occupation" value="individual" checked="checked" disabled><span>
			                                                        <!--class="width-two"--> Инидвидуальное
			                                                    </span>
                                            </div>
                                            <!--
                                    <div class="item-radio">
                                        <input type="radio" name="type_of_occupation" value="group"><span class="width-two">Групповое</span>
                                    </div>
                                    -->
                                        </div>
                                        <div class="description">
                                            <p class="note"></p>
                                        </div>
                                    </div>
                                    <div class="section swimming_pool" id="swimming_pool">
                                        <div class="subtitle">Выберите бассейн:</div>
                                        <div class="flex-row">
                                            <div class="item-radio">
                                                <input type="radio" name="swimming_pool" value="small_pool" checked="checked"><span class="width-two">Маленький</span>
                                            </div>
                                            <div class="item-radio">
                                                <input type="radio" name="swimming_pool" value="large_pool"><span class="width-two">Большой</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p class="note"></p>
                                        </div>
                                    </div>
                                    <div class="section type_of_subscription" id="type_of_subscription">
                                        <div class="subtitle">Выберите вид абонемента:</div>
                                        <div class="flex-row">
                                            <div class="item-radio">
                                                <input type="radio" name="type_of_subscription" value="strict" checked="checked"><span>Строгий</span>
                                            </div>
                                            <div class="item-radio">
                                                <input type="radio" name="type_of_subscription" value="standard"><span>Стандарт</span>
                                            </div>
                                            <div class="item-radio">
                                                <input type="radio" name="type_of_subscription" value="loyal"><span>Лояльный</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p class="note"></p>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="price-row">
                                <p>Стоимость:</p>
                                <div class="new-price"><span>0</span> ₽</div>
                            </div>

                        </div>

                        <div class="buttons-row">
                            <a href="" class="bt-1" target="_blank">Записаться</a>
                            <a href="" class="bt-2" target="_blank">Оплатить онлайн</a>
                        </div>

                    </div>

                </div>
            </div>

        </form>

        <form>

            <div class="prices-block" data-aos="fade-up">
                <div class="prices-item prices-item-3">

                    <div class="top">
                        <div class="title" id="myachkovsky_boulevard">Мячковский бульвар 16, к1</div>
                        <p>(метро Марьино)</p>
                    </div>

                    <div class="content">
                        <div class="content__wrapper">

                            <div class="section" id="quantity">
                                <div class="subtitle">Количестово занятий:</div>
                                <div class="flex-row quantity">
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="trial" checked="checked"><span class="width-two">Пробное</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="oneoff"><span class="width-two">Разовое</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="4"><span>4</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="8"><span>8</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="12"><span>12</span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="note"></p>
                                </div>
                            </div>


                            <div class="section type_of_subscription" id="type_of_subscription">
                                <div class="subtitle">Вид абонемента:</div>
                                <div class="flex-row">
                                    <div class="item-radio">
                                        <input type="radio" name="type_of_subscription" value="standard" checked="checked"><span class="width-two">Стандарт</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="type_of_subscription" value="loyal"><span class="width-two">Лояльный</span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="note"></p>
                                </div>
                            </div>


                            <div class="price-row">
                                <p>Стоимость:</p>
                                <div class="new-price"><span>0</span> ₽</div>
                            </div>

                        </div>

                        <div class="buttons-row">
                            <a href="" class="bt-1" target="_blank">Записаться</a>
                            <a href="" class="bt-2" target="_blank">Оплатить онлайн</a>
                        </div>

                    </div>

                </div>
            </div>

        </form>

        <form>

            <div class="prices-block" data-aos="fade-up">
                <div class="prices-item prices-item-4">

                    <div class="top">
                        <div class="title" id="lubertci">г.Люберцы, ул. Камова 11/5</div>
                        <p>(метро Некрасовка)</p>
                    </div>

                    <div class="content">
                        <div class="content__wrapper">

                            <div class="section" id="quantity">
                                <div class="subtitle">Количестово занятий:</div>
                                <div class="flex-row quantity">
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="trial" checked="checked"><span class="width-two">Пробное</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="oneoff"><span class="width-two">Разовое</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="4"><span>4</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="8"><span>8</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="quantity" value="12"><span>12</span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="note"></p>
                                </div>
                            </div>


                            <div class="section type_of_subscription" id="type_of_subscription">
                                <div class="subtitle">Вид абонемента:</div>
                                <div class="flex-row">
                                    <div class="item-radio">
                                        <input type="radio" name="type_of_subscription" value="standard" checked="checked"><span class="width-two">Стандарт</span>
                                    </div>
                                    <div class="item-radio">
                                        <input type="radio" name="type_of_subscription" value="loyal"><span class="width-two">Лояльный</span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="note"></p>
                                </div>
                            </div>


                            <div class="price-row">
                                <p>Стоимость:</p>
                                <div class="new-price"><span>0</span> ₽</div>
                            </div>

                        </div>

                        <div class="buttons-row">
                            <a href="" class="bt-1" target="_blank">Записаться</a>
                            <a href="" class="bt-2" target="_blank">Оплатить онлайн</a>
                        </div>

                    </div>

                </div>
            </div>

        </form>

    </div>
</section>

<section class="submit-your-application">
    <div class="container clearfix">
        <div class="right" data-aos="fade-up">
            <img src="{{ asset("images/submit-your-application-bg.png") }}" alt="Детский акваклуб «Немо»" width="632" height="411">
        </div>

        <div class="left">
            <h2 data-aos="fade-up">Плавать никогда<br>не рано</h2>
            <p data-aos="fade-up">Получите скидку <span class="discount">-30%</span>&nbsp на первое занятие. Стоимость пробного занятия составит 980 рублей<span class="discount-sum"></span>
            </p>
            <a class="js-popup btn" data-type="ПРОБНОЕ ЗАНЯТИЕ" href="#" data-aos="fade-up">ПРОБНОЕ ЗАНЯТИЕ</a>
        </div>
    </div>
</section>

<section class="how-we-swim">
    <div class="container">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-27a85768-9042-4df7-9257-25594652d98b"></div>
    </div>
</section>

<section class="security">
    <div class="container">
        <h2 data-aos="fade-up">Мы все предусмотрели</h2>
        <div class="right">
            <div class="tabs2" data-aos="fade-up">
			                    <span class="tab2">
			                        <picture>
			                            <source srcset="{{ asset("images/security-icon1-active.svg") }}" type="image/svg+xml">
			                            <img src="{{ asset("images/security-icon1-active.png") }}" alt="Бассейн" width="78" height="61">
			                        </picture>
			                        <p>Бассейн</p>
			                    </span>
                <span class="tab2">
			                        <picture>
			                            <source srcset="{{ asset("images/security-icon2.svg") }}" type="image/svg+xml">
			                            <img src="{{ asset("images/security-icon2.png") }}" alt="Бассейн" width="59" height="61">
			                        </picture>
			                        <p>Водоподготовка</p>
			                    </span>
                <span class="tab2">
			                        <picture>
			                            <source srcset="{{ asset("images/security-icon3.svg") }}" type="image/svg+xml">
			                            <img src="{{ asset("images/security-icon3.png") }}" alt="Бассейн" width="51" height="63">
			                        </picture>
			                        <p>Удобства</p>
			                    </span>
            </div>
            <div class="tab_content2" data-aos="fade-up">
                <div class="tab_item2 item1">
                    <ul>
                        <li>многоступенчатая система очистки воды в бассейне;</li>
                        <li>температура воды в бассейне 32-34 градусов по Цельсию;</li>
                        <li>время полного водообмена составляет 30 минут;</li>
                        <li>рециркуляционный тип водообмена;</li>
                        <li>кристально чистая вода;</li>
                        <li>
                            соответствие Санитарным правилам и нормативам
                            СанПиН 2.1.2.Ц1188-03
                        </li>
                    </ul>
                </div>
                <div class="tab_item2 item2">
                    <ul>
                        <li>фильтр грубой очистки воды;</li>
                        <li>песочный фильтр тонкой очистки воды;</li>
                        <li>электронный анализ воды корректировка до уровня 7,2 рН;</li>
                        <li>дезинфекция и обеззараживания, мягкое хлорирования воды;</li>
                    </ul>

                    <p>
                        *Регулярный лабораторный анализ воды, проводимый Центром Гигиены и Эпидемиологии , подтверждает чистоту и безопасность воды в бассейне
                    </p>
                </div>
                <div class="tab_item2 item3">
                    <ul>
                        <li>детские игрушки;</li>
                        <li>пеленальные столы;</li>
                        <li>парковочные места;</li>
                        <li>тамбур для колясок;</li>
                        <li>раздевалка с феном;</li>
                        <li>кофе брейки.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reviews" id="reviews">
    <div class="container">
        <h2 data-aos="fade-up">Отзывы родителей</h2>

        <section class="slider3" data-aos="fade-up">
            <div class="slider-slick">
                <div class="slider">
                    <div class="review_block">
                        <div class="play_block">
                            <img src="{{ asset("images/review1.jpg") }}">
                            <a id="play-video1" class="video-play-button" href="#"> <span></span></a>
                        </div>
                    </div>
                </div>

                <div class="slider">
                    <div class="review_block">
                        <div class="play_block">
                            <img src="{{ asset("images/review2.jpg") }}">
                            <a id="play-video2" class="video-play-button" href="#"> <span></span></a>
                        </div>
                    </div>
                </div>

                <div class="slider">
                    <div class="review_block">
                        <div class="play_block">
                            <img src="{{ asset("images/review3.jpg") }}">
                            <a id="play-video3" class="video-play-button" href="#"> <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="slider">
                    <div class="review_block">
                        <div class="play_block">
                            <img src="{{ asset("images/review4.jpg") }}">
                            <a id="play-video4" class="video-play-button" href="#"> <span></span></a>
                        </div>
                    </div>
                </div>

                <div class="slider">
                    <div class="review_block">
                        <div class="play_block">
                            <img src="{{ asset("images/review5.jpg") }}">
                            <a id="play-video5" class="video-play-button" href="#"> <span></span></a>
                        </div>
                    </div>
                </div>

                <div class="slider">
                    <div class="review_block">
                        <div class="play_block">
                            <img src="{{ asset("images/review6.jpg") }}">
                            <a id="play-video6" class="video-play-button" href="#"> <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="slider">
                    <div class="review_block">
                        <div class="play_block">
                            <img src="{{ asset("images/review7.jpg") }}">
                            <a id="play-video7" class="video-play-button" href="#"> <span></span></a>
                        </div>
                    </div>
                </div>

                <div class="slider">
                    <div class="review_block">
                        <div class="play_block">
                            <img src="{{ asset("images/review8.jpg") }}">
                            <a id="play-video8" class="video-play-button" href="#"> <span></span></a>
                        </div>
                    </div>
                </div>

                <div class="slider">
                    <div class="review_block">
                        <div class="play_block">
                            <img src="{{ asset("images/review9.jpg") }}">
                            <a id="play-video9" class="video-play-button" href="#"> <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="slider">
                    <div class="review_block">
                        <div class="play_block">
                            <img src="{{ asset("images/review10.jpg") }}">
                            <a id="play-video10" class="video-play-button" href="#"> <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="swimming-pool">
    <div class="container">
        <h3 data-aos="fade-up">Посещение бассейна</h3>
        <p data-aos="fade-up">Для того чтобы начать посещать бассейн с малышом вам необходимо:</p>

        <div class="swimming-pool-stages" data-aos="fade-up">
            <div class="stage1">
                <p>
                    Позвонить по телефону
                    или <a class="js-popup enroll" data-type="оставить заявку" href="#">оставить заявку</a>
                    у нас на сайте
                </p>
            </div>
            <div class="stage2">
                <p>
                    Ознакомиться с
                    <a class="visiting-rules js-popup2" href="#">правилами посещения</a> акваклуба
                </p>
            </div>
            <div class="stage3">
                <p>
                    Предоставить действующие
                    <a class="references js-popup3" href="#">справки</a>
                </p>
            </div>
            <div class="stage4">
                <p>
                    Прийти
                    с малышом
                    на занятие
                </p>
            </div>
        </div>
    </div>
</section>

<section class="map" id="contact1">
    <div class="map-yandex" data-aos="fade-up">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1eb73f371df03d148a17461897ad4dfa673f0e2bd02b182d72f76bce2b38e239&amp;width=100%25&amp;height=500&amp;lang=ru_UA&amp;scroll=true"></script>



    </div>


</section>

<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="left">
                <a href="/" data-aos="fade-up">
                    <img src="{{ asset("images/logo-footer.png") }}" alt="Акваклуб Nemo" width="222" height="117">
                </a>
                <a class="js-popup btn btn-invert" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="/" data-aos="fade-up">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
            </div>
            <div class="center1" data-aos="fade-up">
                <h3 data-aos="fade-up">Контакты</h3>
                <a href="tel:+79776800261" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;" data-aos="fade-up">+7(977)680-02-61</a>
                <address data-aos="fade-up">ул. Кировоградская 36</address>
                <a href="tel:+79776800262" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;" data-aos="fade-up">+7(977)680-02-62</a>
                <address data-aos="fade-up">
                    ул. Винокурова 24, к4</address>
                <a href="tel:+79776800263" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" data-aos="fade-up">+7(977)680-02-63</a>
                <address>
                    Мячковский бульвар 16, к1</address>
                <a href="tel:+79776800266" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" data-aos="fade-up">+7(977)680-02-66</a>
                <address>
                    г.Люберцы, ул.Камова 11/5</address>
            </div>
            <div class="center2">
                <h3>Режим работы бассейнов</h3>
                <p>
                    09:00–21:00
                </p>
                <span>без выходных</span>


            </div>
            <div class="right">
                <h3>Присоединяйтесь</h3>
                <div class="social-link">
                    <a href="https://www.instagram.com/aquaclubnemo/" target="_blank">
                        <picture>
                            <source srcset="{{ asset("images/instagramm.svg") }}">
                            <img src="{{ asset("images/instagramm.png") }}" alt="инстаграмм">
                        </picture>
                    </a>
                    <a href="https://vk.com/aquaclubnemo" target="_blank">
                        <picture>
                            <source srcset="{{ asset("images/vk.svg") }}">
                            <img src="{{ asset("images/vk.png") }}" alt="вконтакте">
                        </picture>
                    </a>
                    <a href="https://www.facebook.com/aquaclubnemo" target="_blank">
                        <picture>
                            <source srcset="{{ asset("img/fb.svg") }}">
                            <img src="{{ asset("images/fb.png") }}" alt="фейсбук">
                        </picture>
                    </a>
                </div>
                <p>Есть что написать?</p>
                <a class="mail" href="mailto:aquanemo@yandex.ru">aquanemo@yandex.ru</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>ООО "Акваклуб". ИНН: 7726432268 ОГРН: 118774650808 (ул. Кировоградская 36,ул. Винокурова 24, к4)</p>
        </div>

        <!-- fh -->
        <div class="footer-hidden" id="contact">
            <div class="footer-hidden-top">
                <div class="left">
                    <address>
                        ул. Кировоградская 36
                        <span class="metro metro1">(метро Пражская)</span>
                    </address>
                    <a href="tel:+79776800261" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;">+7(977)680-02-61</a>
                </div>

                <div class="right">
                    <address>
                        ул. Винокурова 24, к4
                        <span class="metro metro2">(метро Академическая)</span>
                    </address>
                    <a href="tel:+79776800262" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;">+7(977)680-02-62</a>

                </div>

                <div class="right">
                    <address>
                        Мячковский бульвар 16, к1
                        <span class="metro metro3">(метро Марьино)</span>
                    </address>
                    <a href="tel:+79776800263" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;">+7(977)680-02-63</a>

                </div>
                <div class="right">
                    <address>
                        г.Люберцы, ул.Камова 11/5
                        <span class="metro metro4">(метро Некрасовка)</span>

                    </address>
                    <a href="tel:+79776800266" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;">+7(977)680-02-66</a>


                </div>
            </div>

            <div class="footer-hidden-operating-mode-pool">
                <h3>Режим работы бассейнов</h3>
                <p>
                    09:00 – 21:00
                </p>
                <span>без выходных</span>
            </div>

            <div class="footer-hidden-questions">
                <div class="left">
                    <p>Есть что написать?</p>
                    <a class="mail" href="mailto:aquanemo@yandex.ru">aquanemo@yandex.ru</a>
                </div>
                <div class="right">
                    <h3>Присоединяйтесь</h3>
                    <div class="social-link">
                        <a href="https://www.instagram.com/aquaclubnemo/" target="_blank">
                            <picture>
                                <source srcset="{{ asset("images/instagramm.svg") }}">
                                <img src="{{ asset("images/instagramm.png") }}" alt="инстаграмм">
                            </picture>
                        </a>
                        <a href="https://vk.com/aquaclubnemo" target="_blank">
                            <picture>
                                <source srcset="{{ asset("images/vk.svg") }}">
                                <img src="{{ asset("images/vk.png") }}" alt="вконтакте">
                            </picture>
                        </a>
                        <a href="https://www.facebook.com/aquaclubnemo" target="_blank">
                            <picture>
                                <source srcset="{{ asset("images/fb.svg") }}">
                                <img src="{{ asset("images/fb.png") }}" alt="фейсбук">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-hidden-logo">
                <a class="footer-logo" href="/">
                    <img src="{{ asset("images/logo-footer.png") }}" alt="Акваклуб Nemo" width="222" height="117">
                </a>
                <a class="js-popup btn btn-invert" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="/">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>

                <div class="footer-hidden-bottom">
                    <p>
                        ИП Хилимендик С.М. ИНН: 910311538956 ОГРНИП: 318910200050683(ул. Кировоградская 36), ИП Духин А.С ИНН: 910212586980 ОГРНИП: 318910200029341(ул. Винокурова 24, к4)
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="block-bottom">
    <div class="container">
        <span>Приглашаем на работу в наш дружный коллектив</span>
        <a href="" class="js-popup5 button--border">вакансии</a>
    </div>
</div>



<!-- popups -->
<div class="popup">
    <h3>Запись на занятие</h3>

    <form class="main-form" action="mailer/smart.php" method="POST">
        <select name="select_pool" id="agency" required>
            <option value="0" disabled>Выберите бассейн</option>
            <option value="1" selected>ул. Кировоградская 36 (метро Пражская)</option>
            <option value="2">ул. Винокурова 24, к4 (метро - Академическая)</option>
            <option value="3">Мячковский бульвар 16, к1 (метро Марьино)</option>
            <option value="4">г. Люберцы, ул. Камова 11/5 (метро - Некрасовка)</option>
        </select>
        <input type="text" id="name1" name="user_name" placeholder="Ваше Имя" required>
        <input type="text" id="tel1" name="user_phone" placeholder="Телефон" required>

        <input class="hidden-form" type="hidden" name="user_type_btn" value="Аноним"><br>

        <button class="btn" type="submit" onclick="yaCounter45529422.reachGoal('zayavka'); return true;"><span>ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</span></button>
    </form>
    <button type="button" class="close" id="js-close-popup"></button>
</div>
<div class="popup-overlay"></div>



<div class="popup2">
    <h3>Правила посещения Акваклуба Немо</h3>

    <div class="all-rules">
        <div class="rule1">
            <ul>
                <li>
                    1. Согласуйте время посещения заранее.
                </li>
                <li>
                    2. Рекомендуем приходить в бассейн за <b>15 минут</b> до начала занятия,чтобы иметь возможность подготовиться.
                </li>
                <li>
                    3. Вход в зону бассейна осуществляется <b>за 1-2 минуты</b> до начала занятия, чтобы ополоснуть ребенка.
                </li>
                <li>
                    4. Посещение бассейна возможно только при наличии справки от педиатра об отсутствии противопоказаний, а для детей от года еще и отрицательные показатели анализов на энтеробиоз и яйца глист.
                </li>
                <li>
                    5. Приходите на занятие только тогда, когда Вы и ребенок чувствуете себя хорошо.
                </li>
                <li>6. Запись на занятия возможно расписать сразу после покупки абонемента.</li>
                <li>7. <b>Абонемент «Стандарт» </b>предусматривает отмену занятия до 18.00 предыдущего дня. Занятие списывается с абонемента, если отмена или перенос происходит позже этого времени. Уведомление о смене тренера не предусмотрено.</li>
                <li>8. <b>Абонемент «Лояльный» </b>позволяет получать уведомление о смене тренера и отменять занятие день в день без потери занятия. </li>
                <li>9. Срок действия абонементов «Стандарт» и «Лояльный» 1 месяц + 2 недели заморозки, «Строгий» 4 недели, без возможности переноса занятий. Если возникла необходимость перенести занятия, позаботьтесь об этом своевременно т.к. в конце месяца может быть мало свободных мест.</li>

                <li>
                    10. Воздержитесь от еды и напитков в раздевалке и в зоне бассейна.
                </li>

                <li>11. Для поддержания чистоты в бассейне мы настоятельно просим посещать душ перед входом в воду. Принимать душ следует с мылом или другим средством для поддержания личной гигиены.</li>
                <li>12. Если во время занятия ребенок захотел в туалет, пользуйтесь горшком. В случае загрязнения воды каловыми массами Вашим малышом, будьте готовы возместить затраты на очистку воды и к отмене других сеансов. <b>Штраф за загрязнение бассейна составляет от 2000 рублей.</b></li>
                <li>13. Родители обязаны соблюдать и поддерживать общественный порядок и общепринятые нормы поведения. Споры, конфликты, некорректное и неуважительное отношение родителей по отношению к другим клиентам, тренерскому составу, обслуживающему персоналу исключены.</li>
            </ul>
        </div>

        <p>Для занятий необходимо:</p>

        <div class="rule2">
            <ul>
                <li>- сменная обувь с нескользящей подошвой, полотенце, купальный костюм, шапочка для плаванья (с 1 года);</li>
                <li>- для детей от 1,5 месяцев до трех лет: на первое занятие - плавательный одноразовый подгузник, на последующие занятия - специальные трусики для бассейна.</li>
            </ul>
        </div>

        <p>Техника безопасности Акваклуба Немо </p>
        <div class="rule2">
            <ul>
                <li>1. Во время пребывания в центре, убедитесь, что ребенок все время находится рядом с Вами.</li>
                <li>2. Прежде чем пойти в бассейн с ребенком в первый раз, убедитесь, что у Вас есть вся необходимая информация о прививках.</li>
                <li>3. Для переодевания младенцев запрещается использовать лавочки. Для переодевания малышей используйте пеленальные столы. Не оставляйте детей без присмотра на пеленальном столе.</li>
                <li>4. Во время занятий дети не должны находиться на бортике бассейна, если это не предусмотрено программой занятий.</li>
                <li>5. В целях безопасности запрещается спускаться по лестнице спиной к лестнице, при необходимости попросите преподавателя помочь Вам.</li>
                <li>6. Вход выход в бассейн. Если Вам нужно покинуть занятие раньше времени, пожалуйста, сообщите об этом ведущему занятие преподавателю. Вход в зону бассейна разрешен только после подтверждения преподавателя, ведущего занятие.</li>
                <li>7. После занятия убедитесь, что не забыли в зоне бассейна личные вещи.</li>
                <li>8. За безопасность ребенка полную ответственность несет родитель (сопровождающее лицо).</li>
                <li>9. При нарушении техники безопасности, администрация не несет ответственность за полученные травмы и ущерб личному имуществу и третьим лицам.</li>
            </ul>
        </div>
    </div>
    <button type="button" class="close" id="js-close-popup"></button>
</div>
<div class="popup-overlay"></div>



<div class="popup3">
    <h3>Справки для занятий в бассейне:</h3>

    <div class="all-rules">

        <ul>
            <li>
                - справка от педиатра об отсутствии противопоказаний (действительна 6 месяцев);
            </li>
            <li>
                - результат соскоба на энтеробиоз (действительна – 3 месяца);
            </li>
            <li>
                - результат анализа на яйца глист (действительна 3 месяца);
            </li>
        </ul>

        <p>
            <strong>
                *Для детей до 1 года результаты анализа на энтеробиоз и кала на яйца глист не требуются, необходима только справка от педиатра.
            </strong>
        </p>
    </div>
    <button type="button" class="close" id="js-close-popup"></button>
</div>
<div class="popup-overlay"></div>



<div class="popup4">
    <h3>Свяжитесь с нами</h3>

    <div class="phone1">
        <a href="tel:+79776800261" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;">+7(977)680-02-61</a>
        <address>
            ул. Кировоградская 36<br>
            (метро Пражская)
        </address>
    </div>

    <div class="phone2">
        <a href="tel:+79776800262" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;">+7(977)680-02-62</a>
        <address>
            ул. Винокурова 24, к4<br>
            (метро Академическая)
        </address>
    </div>

    <div class="phone2">
        <a href="tel:+79776800263" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;">+7(977)680-02-63</a>
        <address>
            Мячковский бульвар 16, к1<br>
            (метро Марьино)
        </address>
    </div>

    <div class="phone2">
        <a href="tel:+79776800266" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;">+7(977)680-02-66</a>
        <address>
            г.Люберцы, ул.Камова 11/5<br>
            (метро Некрасовка)
        </address>
    </div>


    <button type="button" class="close" id="js-close-popup"></button>
</div>

<div class="popup5">
    <h3>вакансии</h3>
    <div class="popup5__body">
        <div class="popup5__text">Сеть детских бассейнов <span>“Акваклуб Немо”</span> приглашает на работу:</div>
        <div class="popup5__block">
            <div class="popup5__item">Тренер по плаванию</div>
            <div class="popup5__item">Администратор</div>
        </div>
        <div class="popup5__email">
            Резюме: <a href="mailto:aquanemo@yandex.ru">aquanemo@yandex.ru</a>
        </div>
    </div>
    <button type="button" class="close" id="js-close-popup"></button>
</div>



<div class="popup-overlay"></div>

<div class="payment-overlay">
    <div id="payment">
        <div class="container">
            <div id="close">
                <img src="{{ asset("images/close.svg") }}">
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
                                <img src="{{ asset("images/information.svg") }}">
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
<script src="{{ asset("libs/slick/slick.min.js") }}"></script>
<script src="{{ asset("js/jquery.toshowhide.js?vr=21") }}"></script>
<script src="{{ asset("libs/jquery.custom-scroll.js") }}"></script>


<script src="{{ asset("js/index-page.js?vr=21") }}"></script>
<script src="{{ asset("js/script.js?vr=21") }}"></script>
<script src="{{ asset("js/snow.js?vr=21") }}"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

<!-- Yclients -->
<script type="text/javascript" src="https://w76658.yclients.com/widgetJS" charset="UTF-8"></script>

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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset("js/app.js") }}"></script>
<!-- Animation. -->
<script>
    Payment.hide_items_checked();
    Payment.hide_items_click();
    Payment.descriptions();
    Payment.calculate_price_checked();
    Payment.calculate_price_click();
    Payment.fill_link();
    Payment.sign_up();
    Payment.load();
</script>
<!-- Модальное окно закрытие клуба -->
<script type="text/javascript">
    var delay_popup = 1000;
    setTimeout("document.getElementById('bg_popup').style.display='block'", delay_popup);
</script>
<!-- Модальное окно закрытие клуба -->
</body>

</html>
