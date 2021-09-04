<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi ipsam, cum, pariatur">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Акваклуб Nemo. Индивидуальные занятия плавания для деток от 1,5 месяцев до 7 лет">
    <meta name="keywords" content="Акваклуб немо, акваклуб nemo, бассейн, грудничковое плавание, аква немо">
    <meta name="yandex-verification" content="d9eebb8346423a6c" />
    <link rel="icon" href="{{ asset('images/favicon.ico?vr=1') }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css?vr=4') }}">
</head>

<body>

@yield('header')

@yield('content')

@yield('footer')

@yield('signUpModal')

@yield('vacanciesModal')

{{--@if(!@isset($offWhatsApp))
    <a href="https://api.whatsapp.com/send?phone=74951206711" class="whats-app" target="_blank" onclick="ym(45529422,'reachGoal','Whatsapp'); return true;">whats-app</a>
@endif--}}

<script src="{{ asset('js/app.min.js?vr=1') }}"></script>
<script src="{{ asset('js/vendor/jquery.maskedinput.js?vr=1') }}"></script>
<script src="{{ asset('js/site.js?vr=1') }}"></script>
<script src="{{ asset('js/payment.js?vr=1') }}"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    setTimeout(function(){
        var elem = document.createElement('script');
        elem.type = 'text/javascript';
        elem.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8fa378a25cb572e342a7898497907976aa9665b4a196a85d2358b0633385eade&amp;width=600&amp;height=450&amp;lang=ru_RU&amp;scroll=true';
        document.getElementsByClassName('addresses__map')[0].appendChild(elem);
    }, 5000);

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

</body>
</html>
