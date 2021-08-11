<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Акваклуб Немо</title>
    <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi ipsam, cum, pariatur">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Акваклуб Nemo. Индивидуальные занятия плавания для деток от 1,5 месяцев до 7 лет">
    <meta name="keywords" content="Акваклуб немо, акваклуб nemo, бассейн, грудничковое плавание, аква немо">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css?v4') }}">
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

<script src="{{ asset('js/app.min.js?v3') }}"></script>
<script src="{{ asset('js/vendor/jquery.maskedinput.js?v3') }}"></script>
<script src="{{ asset('js/site.js') }}"></script>
<script src="{{ asset('js/payment.js') }}"></script>

</body>
</html>
