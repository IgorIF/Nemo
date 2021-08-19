<header class="header">
    <div class="container header__flex">
        <a href="{{ route('home') }}#" class="header__logo"><img src="{{ asset('images/dist/logo.svg') }}" alt=""></a>
        <nav class="main-menu header__menu">
            <a href="{{ route('home') }}#" class="main-menu__link">Главная</a>
            <a href="{{ route('home') }}#payment" class="main-menu__link">Стоимость</a>
            <a href="{{ route('home') }}#coaches" class="main-menu__link">Тренеры</a>
            <a href="{{ route('home') }}#schedule" class="main-menu__link">Расписание</a>
            <a href="{{ route('home') }}#what" class="mobil-menu__link">Первое занятие</a>
            <a href="{{ route('home') }}#reviews" class="main-menu__link">Отзывы</a>
            <a href="{{ route('home') }}#sale" class="main-menu__link">Акции</a>
            <a href="{{ route('home') }}#addresses" class="main-menu__link">Контакты</a>
        </nav>
        <div class="header__contacts">
            <a href="https://api.whatsapp.com/send?phone=74951206711" class="header__wa" target="_balnk"><img src="{{ asset('images/dist/icon/whatsApp.svg') }}" alt=""></a>
            <div class="header__phone">
                <a href="tel:+74951200252">+7 (495) 120-02-52</a>
                Единый номер
            </div>
        </div>
        <button type="button" class="btn-orange header__btn btn-popup" data-mfp-src="#call_me">ПРОБНОЕ ЗАНЯТИЕ -{{ $trialLesson->discount }}%</button>
        <button type="button" class="burger"><span></span><span></span><span></span></button>
        <div class="mobil-menu">
            <div class="mobil-menu__contacts">
                <a href="https://api.whatsapp.com/send?phone=74951206711" class="header__wa" target="_balnk"><img src="{{ asset('images/dist/icon/whatsApp.svg') }}" alt=""></a>
                <div class="header__phone">
                    <a href="tel:+74951200252">+7 (495) 120-02-52</a>
                    Единый номер
                </div>
            </div>
            <nav class="mobil-menu__nav">
                <a href="{{ route('home') }}#" class="mobil-menu__link">Главная</a>
                <a href="{{ route('home') }}#coaches" class="mobil-menu__link">Тренеры</a>
                <a href="{{ route('home') }}#payment" class="mobil-menu__link">Стоимость занятий</a>
                <a href="{{ route('home') }}#schedule" class="mobil-menu__link">Расписание</a>
                <a href="{{ route('home') }}#what" class="mobil-menu__link">Первое занятие</a>
                <a href="{{ route('home') }}#sale" class="mobil-menu__link">Акции</a>
                <a href="{{ route('home') }}#reviews" class="mobil-menu__link">Отзывы</a>
                <a href="{{ route('home') }}#addresses" class="mobil-menu__link">Контакты</a>
            </nav>
            <div class="mobil-menu-soc">
                <div class="mobil-menu-soc__title">Мы в соц. сетях</div>
                <div class="soc">
                    <a href="https://www.instagram.com/aquaclubnemo/" class="soc-link" target="_blank"><img src="{{ asset('images/dist/icon/instagram.svg') }}" alt=""></a>
                    <a href="https://www.facebook.com/aquaclubnemo" class="soc-link" target="_blank"><img src="{{ asset('images/dist/icon/fa.svg') }}" alt=""></a>
                    <a href="https://vk.com/aquaclubnemo" class="soc-link" target="_blank"><img src="{{ asset('images/dist/icon/vk.svg') }}" alt=""></a>
                </div>
            </div>
            <div class="application">
                <div class="mobil-menu-soc__title">Наше приложение</div>
                <a href="https://play.google.com/store/apps/details?id=com.itrack.akvaklubnemo823974" target="_blank"><img src="{{ asset('images/dist/icon/gp.svg') }}" alt=""></a>
                <a href="https://apps.apple.com/ru/app/%D0%B0%D0%BA%D0%B2%D0%B0%D0%BA%D0%BB%D1%83%D0%B1-nemo/id1579157798" target="_blank"><img src="{{ asset('images/dist/icon/as.svg') }}" alt=""></a>
                <a href="https://appgallery.huawei.com/#/app/C104625539" target="_blank"><img src="{{ asset('images/dist/icon/ha.svg') }}" alt=""></a>
            </div>
        </div>
    </div>
</header>
