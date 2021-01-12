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

    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <!-- http://phpbbex.com/oldies/ru.html -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lte IE 8]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->

    <link rel="icon" href="favicon.ico" type="image/x-icon">

    {{--bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/toast.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.0.0-rc.1/cropper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.0.0-rc.1/cropper.min.js"></script>


    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/admin.css?vr=1') }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
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

    @yield('header')

</header>

@yield('modalAddTrainer')
@yield('modalAddSecurityItem')
@yield('modalAddVideo')
@yield('modalCropper')

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
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1eb73f371df03d148a17461897ad4dfa673f0e2bd02b182d72f76bce2b38e239&amp;width=100%25&amp;height=500&amp;lang=ru_UA&amp;scroll=true"></script>
    </div>
</section>

@yield('footer')

<div class="block-bottom">
    <div class="container">
        <span>Приглашаем на работу в наш дружный коллектив</span>
        <a href="" class="js-popup5 button--border">вакансии</a>
    </div>
</div>



<!-- popups -->
<div class="popup">
    <h3>Запись на занятие</h3>

    <form {{--class="main-form"--}} action="{{ route('sendmail') }}" method="POST">
        {{ csrf_field() }}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
{{--<script src="{{ asset('libs/slick/slick.min.js') }}"></script>--}}
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('js/jquery.toshowhide.js?vr=21') }}"></script>
<script src="{{ asset('libs/jquery.custom-scroll.js') }}"></script>


<script src="{{ asset('js/index-page.js?vr=21') }}"></script>
<script src="{{ asset('js/script.js?vr=21') }}"></script>
<script src="{{ asset('js/snow.js?vr=21') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

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
<script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="{{ asset('js/app-aos.js') }}"></script>
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

<script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
