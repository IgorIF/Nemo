@extends('layouts.root')

@section('content')

    <div class="page thanks">
        <div class="container">
            @yield('thanks')
        </div>
    </div>


    @yield('signUpModal')

    @yield('paymentRulesModal')

    @yield('vacanciesModal')

    @yield('paymentModal')

@endsection
