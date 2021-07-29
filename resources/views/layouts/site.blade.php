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
        @yield('aboutUs')
    </div>
</section>

<section class="gallery">
    <div class="container">
        @yield('howWeSwim')
    </div>
</section>

<section class="coaches">
    <div class="container">
        @yield('trainers')
    </div>
</section>

{{--<section class="payment">
    <div class="container">
        @yield('prices')
    </div>
</section>--}}

<section class="sale">
    <div class="container">
        @yield('promotions')
    </div>
</section>

<section class="what">
    <div class="container">
        @yield('firstLesson')
    </div>
</section>

<section class="water-treatment">
    <div class="container">
        @yield('waterTreatment')
    </div>
</section>

<section class="reviews">
    <div class="container">
        @yield('reviews')
    </div>
</section>

<section class="questions">
    <div class="container">
        @yield('questions')
    </div>
</section>

<section class="addresses">
    <div class="container">
        @yield('addresses')
    </div>
</section>

<footer class="footer">
    <div class="container">
        @yield('footer')
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
