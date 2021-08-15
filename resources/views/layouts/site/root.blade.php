<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi ipsam, cum, pariatur">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Акваклуб Nemo. Индивидуальные занятия плавания для деток от 1,5 месяцев до 7 лет">
    <meta name="keywords" content="Акваклуб немо, акваклуб nemo, бассейн, грудничковое плавание, аква немо">
    <link rel="icon" href="{{ asset('images/favicon.ico?vr=1') }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css?vr=1') }}">
</head>

<body>

@yield('header')

@yield('content')

@yield('footer')

@yield('signUpModal')

@yield('vacanciesModal')

@if(!@isset($offWhatsApp))
    <a href="https://api.whatsapp.com/send?phone=74951206711" class="whats-app" target="_blank">whats-app</a>
@endif

<script src="{{ asset('js/app.min.js?vr=1') }}"></script>
<script src="{{ asset('js/vendor/jquery.maskedinput.js?vr=1') }}"></script>
<script src="{{ asset('js/site.js?vr=1') }}"></script>
<script src="{{ asset('js/payment.js?vr=1') }}"></script>

</body>
</html>
