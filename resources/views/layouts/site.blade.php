<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Акваклуб Немо</title>
    <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi ipsam, cum, pariatur">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css?v4') }}">
</head>

<body>

@yield('header')

<section class="offer">
    @yield('offer')
</section>

<section class="about">
    <div class="container">
        @yield('about')
    </div>
</section>

<section class="gallery">
    <div class="container">
        @yield('gallery')
    </div>
</section>

<section class="coaches" id="coaches">
    <div class="container">
        @yield('coaches')
    </div>
</section>

<section class="payment" id="payment">
    <div class="container">
        @yield('payment')
    </div>
</section>

<section class="sale" id="sale">
    <div class="container">
        @yield('sale')
    </div>
</section>

<section class="what" id="what">
    <div class="container">
        @yield('what')
    </div>
</section>

<section class="water-treatment">
    <div class="container">
        @yield('waterTreatment')
    </div>
</section>

<section class="reviews" id="reviews">
    <div class="container">
        @yield('reviews')
    </div>
</section>

<section class="questions">
    <div class="container">
        @yield('questions')
    </div>
</section>

<section class="addresses" id="addresses">
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

@yield('signUpModal')

@yield('paymentRulesModal')

@yield('vacanciesModal')

@yield('paymentModal')


<script src="{{ asset('js/app.min.js?v3') }}"></script>
<script src="{{ asset('js/vendor/jquery.maskedinput.js?v3') }}"></script>
<script src="{{ asset('js/site.js') }}"></script>
<script src="{{ asset('js/payment.js') }}"></script>

</body>
</html>
