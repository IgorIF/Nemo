@if(session('status') !== null)
    <div class="page thanks">
        <div class="container">
            <h1>{{ session('status') ? 'Ваша заявка принята!' : 'Ошибка подачи заявки!' }}</h1>
            <p>{{ session('status') ? 'Мы свяжемся с вами в ближайшее время!' : 'Попробуйте пожалуйста позже!' }}</p>
            <img src="{{ asset('images/dist/san.png') }}" alt="" class="thanks__img">
            <div class="application">
                <p>Скачайте наше мобильное приложение для выбора удобной даты и времени занятия</p>
                <a href="#"><img src="{{ asset('images/dist/icon/gp.svg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('images/dist/icon/as.svg') }}" alt=""></a>
            </div>
        </div>
    </div>
@else
    {{ abort(404) }}
@endif
