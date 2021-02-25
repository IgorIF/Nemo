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
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="adcdsc">
                <div class="header-logo" id="logos">
                    <a href="{{ route('admin.') }}">
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
                <a class="js-popup btn" data-type="ПРОБНОЕ ЗАНЯТИЕ" href="{{ route('admin.') }}" data-aos="fade-up">ПРОБНОЕ ЗАНЯТИЕ</a>
        </div>
    </div>
</header>
