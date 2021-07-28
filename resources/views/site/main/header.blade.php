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

{{--
<header class="header image_{{ $images->get(1)->id }}" style="background-image: url({{ asset('storage/images/images/' . $images->get(1)->image) }})">
    <div class="header-top clearfix">
        <div class="container">
            <div class="menu-mobile_div visible-mobile">
                <div class="menu-btn">
                    <input type="checkbox" id="menu36" />
                    <label for="menu36">
                        <div></div>
                        <div></div>
                        <div></div>
                    </label>
                </div>
                <div class="menu-mobile">
                    <ul>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#price">Стоимость занятий</a></li>
                        <li><a href="#trainer">Тренеры</a></li>
                        <li><a href="#reviews">Отзывы</a></li>
                        <li><a href="#akcii">Акции</a></li>
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="adcdsc">
                <div class="header-logo" id="logos">
                    <a href="{{ route('site') }}">
                        <picture>
                            <source srcset="{{ asset('images/logo.svg') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="Акваклуб Nemo" width="135" height="72">
                        </picture>
                    </a>
                </div>
            </div>

            <div class="header-phones">
                <address>
                    <div class="flex jcsb">
                        <div class="first-phone">
                            <a href="tel:{{ $filialBranches->get(1)->phone }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;">{!! $filialBranches->get(1)->phone !!}</a>
                            <p>{!! $filialBranches->get(1)->address !!}</p>
                            <span>
                                {!! $filialBranches->get(1)->metro !!}
                                <i>{!! $texts->get(1)->text !!}</i>
                            </span>
                        </div>
                        <div class="second-phone">
                            <a href="tel:{{ $filialBranches->get(2)->phone }}" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;">{!! $filialBranches->get(2)->phone !!}</a>
                            <p>{!! $filialBranches->get(2)->address !!}</p>
                            <span>
                                {!! $filialBranches->get(2)->metro !!}
                                <i>{!! $texts->get(2)->text !!}</i>
                            </span>
                        </div>
                        <div class="third-phone">
                            <a href="tel:{{ $filialBranches->get(3)->phone }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;">{!! $filialBranches->get(3)->phone !!}</a>
                            <p>{!! $filialBranches->get(3)->address !!}</p>
                            <span>
                                {!! $filialBranches->get(3)->metro !!}
                                <i>{!! $texts->get(3)->text !!}</i>
                            </span>
                        </div>
                        <div class="fourth-phone">
                            <a href="tel:{{ $filialBranches->get(4)->phone }}" onclick="yaCounter45529422.reachGoal('kamova'); return true;">{!! $filialBranches->get(4)->phone !!}</a>
                            <p>{!! $filialBranches->get(4)->address !!}</p>
                            <span>
                                {!! $filialBranches->get(4)->metro !!}
                                <i>{!! $texts->get(4)->text !!}</i>
                            </span>
                        </div>

                    </div>
                </address>
                <div class="header-phone-hidden">
                    <a class="js-popup4" href="tel:{{ $filialBranches->get(1)->phone }}"></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="snow">
        <div class="container">
            <div class="flex jcsb">
                <div class="nav">
                    <ul class="flex">
                        <li><a href="#logos">Главная</a></li>
                        <li><a href="#price">Стоимость</a></li>
                        <li><a href="#trainer">Тренеры</a></li>
                        <li><a href="#reviews">Отзывы</a></li>
                        <li><a href="#akcii">Акции</a></li>
                        <li><a href="#contact1">Контакты</a></li>
                    </ul>
                </div>
                <div class="soc flex jcsb aic">
                    <a href="#"><img src="{{ asset('images/vk_red_copy.png') }}"></a>
                    <a href="#"><img src="{{ asset('images/fb_red copy.svg') }}"></a>
                    <a href="#"><img src="{{ asset('images/insta_red copy.png') }}"></a>
                    <a href="" data-type="ПРОБНОЕ ЗАНЯТИЕ" class="js-popup button--border">Пробное занятие</a>
                </div>
            </div>
        </div>
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </nav>
    <div class="container">
        <div class="header-bottom">
            <h1 data-aos="fade-up">{!! $texts->get(5)->text !!}</h1>
            <p data-aos="fade-up">{!! $texts->get(6)->text !!}</p>
            <p data-aos="fade-up">
                <span>{!! $texts->get(7)->text !!}</span>
            </p>
            <p>
                <a class="js-popup btn" data-type="ПРОБНОЕ ЗАНЯТИЕ" href="{{ route('site') }}" data-aos="fade-up">ПРОБНОЕ ЗАНЯТИЕ</a>
        </div>
    </div>
</header>
--}}
