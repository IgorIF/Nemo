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

    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    {{--bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/toast.css?vr=2') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.0.0-rc.1/cropper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.0.0-rc.1/cropper.min.js"></script>


    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/style.css?vr=29') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css?vr=15') }}">


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

@yield('adminNav')

@yield('header')

@yield('modalAboutUsEditVideo')
@yield('modalAddTrainer')
@yield('modalAddPromotion')
@yield('modalTrainerVideo')
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


<script src="{{ asset('js/index-page.js?vr=24') }}"></script>
<script src="{{ asset('js/prices.js?vr=10') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<!-- Yclients -->
{{--<script type="text/javascript" src="https://w76658.yclients.com/widgetJS" charset="UTF-8"></script>--}}

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

<script type="text/javascript" src="{{ asset('js/admin.js?vr=7') }}"></script>

</body>

</html>
