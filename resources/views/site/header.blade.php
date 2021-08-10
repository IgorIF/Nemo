<header class="header">
    <div class="container header__flex">
        <a href="#" class="header__logo"><img src="{{ asset('images/dist/logo.svg') }}" alt=""></a>
        <nav class="main-menu header__menu">
            <a href="#" class="main-menu__link">Главная</a>
            <a href="#payment" class="main-menu__link">Стоимость</a>
            <a href="#coaches" class="main-menu__link">Тренеры</a>
            <a href="{{ route('schedule') }}" class="main-menu__link">Расписание</a>
            <a href="#reviews" class="main-menu__link">Отзывы</a>
            <a href="#sale" class="main-menu__link">Акции</a>
            <a href="#addresses" class="main-menu__link">Контакты</a>
        </nav>
        <div class="header__contacts">
            <a href="https://api.whatsapp.com/send?phone=74951206711" class="header__wa" target="_balnk"><img src="{{ asset('images/dist/icon/whatsApp.svg') }}" alt=""></a>
            <div class="header__phone">
                <a href="tel:+74951206711">+7(495)120-67-11</a>
                Единый номер
            </div>
        </div>
        <button type="button" class="btn-orange header__btn btn-popup" data-mfp-src="#call_me">ПРОБНОЕ ЗАНЯТИЕ -30%</button>
        <button type="button" class="burger"><span></span><span></span><span></span></button>
        <div class="mobil-menu">
            <div class="mobil-menu__contacts">
                <a href="https://api.whatsapp.com/send?phone=74951206711" class="header__wa" target="_balnk"><img src="{{ asset('images/dist/icon/whatsApp.svg') }}" alt=""></a>
                <div class="header__phone">
                    <a href="tel:+74951206711">+7(495)120-67-11</a>
                    Единый номер
                </div>
            </div>
            <nav class="mobil-menu__nav">
                <a href="#" class="mobil-menu__link">Главная</a>
                <a href="#" class="mobil-menu__link">Тренеры</a>
                <a href="#" class="mobil-menu__link">Стоимость и оплата</a>
                <a href="#" class="mobil-menu__link">Расписание</a>
                <a href="#" class="mobil-menu__link">Первое занятие</a>
                <a href="#" class="mobil-menu__link">Акции</a>
                <a href="#" class="mobil-menu__link">Отзывы</a>
                <a href="#" class="mobil-menu__link">Контакты</a>
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
                <a href="#"><img src="{{ asset('images/dist/icon/gp.svg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('images/dist/icon/as.svg') }}" alt=""></a>
            </div>
        </div>
    </div>
</header>
