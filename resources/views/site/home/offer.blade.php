<section class="offer">
    <div class="offer__img">{{--<img src="{{ asset('images/dist/offer-img.jpg') }}" alt="">--}}</div>
    <div class="container">
        <h1 class="offer__title">{{ $texts->get(3)->text }}</h1>
        <p>{!! $texts->get(4)->text !!}</p>
        <button type="button" class="btn-orange offer__btn btn-popup" data-mfp-src="#call_me">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
    </div>
</section>
