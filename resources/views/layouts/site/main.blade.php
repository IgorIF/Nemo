@extends('layouts.root')

@section('content')

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

    @yield('signUpModal')

    @yield('paymentRulesModal')

    @yield('vacanciesModal')

    @yield('paymentModal')

@endsection
