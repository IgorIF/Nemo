@if(session('status') !== null)
    <div class="page thanks">
        <div class="container">
            <h1>{{ session('status') ? 'Ваша заявка принята!' : 'Ошибка подачи заявки!' }}</h1>
            <p>{{ session('status') ? 'Мы свяжемся с вами в ближайшее время!' : 'Попробуйте пожалуйста позже!' }}</p>
            <img src="{{ asset('images/dist/san.png') }}" alt="" class="thanks__img">
            <div class="application">
                <p>Скачайте наше мобильное приложение для выбора удобной даты и времени занятия</p>
                <a href="#" onclick="(function (e){e.preventDefault();})(event)"><img src="{{ asset('images/dist/icon/gp.svg') }}" alt="" style="opacity: 0.1"></a>
                <a href="https://apps.apple.com/ru/app/%D0%B0%D0%BA%D0%B2%D0%B0%D0%BA%D0%BB%D1%83%D0%B1-nemo/id1579157798"><img src="{{ asset('images/dist/icon/as.svg') }}" alt=""></a>
            </div>
        </div>
    </div>
@else
    {{ abort(404) }}
@endif
