<header class="header image_{{ $images->get(1)->id }}" style="background-image: url({{ asset('storage/images/images/' . $images->get(1)->image) }})">
    <div class="header-top clearfix header-top-castom">
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
            <address class="header-adres">
                <p>{!! $filialBranch->address !!}</p>
                <span class="green">(метро {!! $filialBranch->metro !!})</span>
            </address>
            <div class="header-phones">
                <a href="tel:{{ $filialBranch->phone }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;">{!! $filialBranch->phone !!}</a>
                <div class="header-phone-hidden">
                    <a class="js-popup4" href="tel:"></a>
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
            <p data-aos="fade-up">{!! $filialBranch->header !!}</p>
            <p data-aos="fade-up">
                <span>{!! $texts->get(68)->text !!}</span>
            </p>
            <p>
                <a class="js-popup btn" data-type="ПРОБНОЕ ЗАНЯТИЕ" href="{{ route('site') }}" data-aos="fade-up">ПРОБНОЕ ЗАНЯТИЕ</a>
        </div>
    </div>
</header>
