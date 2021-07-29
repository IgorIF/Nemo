<header class="header">
    <div class="container header__flex">
        <a href="#" class="header__logo"><img src="{{ asset('images/dist/logo.svg') }}" alt=""></a>
        <nav class="main-menu header__menu">
            <a href="#" class="main-menu__link">Главная</a>
            <a href="#" class="main-menu__link">Стоимость</a>
            <a href="#" class="main-menu__link">Тренеры</a>
            <a href="#" class="main-menu__link">Расписание</a>
            <a href="#" class="main-menu__link">Отзывы</a>
            <a href="#" class="main-menu__link">Акции</a>
            <a href="#" class="main-menu__link">Контакты</a>
        </nav>
        <div class="header__contacts">
            <a href="https://api.whatsapp.com/send?phone=74951206711" class="header__wa" target="_balnk"><img src="{{ asset('images/dist/icon/whatsApp.svg') }}" alt=""></a>
            <div class="header__phone">
                <a href="tel:{{ $texts->get(1)->text }}">{{ $texts->get(1)->text }}</a>
                {{ $texts->get(2)->text }}
            </div>
        </div>
        <button type="button" class="btn-orange header__btn btn-popup" data-mfp-src="#call_me">ПРОБНОЕ ЗАНЯТИЕ -30%</button>
        <div class="header__account user-account">
            <div class="user-account__btn">Личный кабинет</div>
            <div class="user-account__wrap">
                <div class="user-account__list">
                    <div class="user-account__title">Выберите ваш филиал:</div>
                    @foreach($filials as $filial)
                        <a href="#" class="filial-link">{{ $filial->address }} <span>({{ $filial->metro }})</span></a>
                    @endforeach
                </div>
            </div>
        </div>
        <button type="button" class="burger"><span></span><span></span><span></span></button>
        <div class="mobil-menu">
            <div class="header__phone">
                <a href="tel:{{ $texts->get(1)->text }}">{{ $texts->get(1)->text }}</a>
                {{ $texts->get(2)->text }}
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
            <div class="drop mobil-menu__drop">
                <button type="button" class="drop-btn">Личный кабинет</button>
                <div class="drop-content">
                    <div class="user-account__title">Выберите ваш филиал:</div>
                    @foreach($filials as $filial)
                        <a href="#" class="filial-link">{{ $filial->address }} <span>({{ $filial->metro }})</span></a>
                    @endforeach
                </div>
            </div>
            <div class="mobil-menu-soc">
                <div class="mobil-menu-soc__title">Мы в соц. сетях</div>
                <div class="soc">
                    <a href="#" class="soc-link" target="_blank"><img src="{{ asset('images/dist/icon/instagram.svg') }}" alt=""></a>
                    <a href="#" class="soc-link" target="_blank"><img src="{{ asset('images/dist/icon/fa.svg') }}" alt=""></a>
                    <a href="#" class="soc-link" target="_blank"><img src="{{ asset('images/dist/icon/vk.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</header>
