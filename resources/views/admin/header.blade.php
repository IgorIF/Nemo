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
                        <a href="tel:{{ $texts->get(1)->text }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;" id="text_{{ $texts->get(1)->id }}" contenteditable="true">{!! $texts->get(1)->text !!}</a>
                        <p id="text_{{ $texts->get(2)->id }}" contenteditable="true">{!! $texts->get(2)->text !!}</p>
                        <span id="text_{{ $texts->get(3)->id }}" contenteditable="true">{!! $texts->get(3)->text !!}</span>
                    </div>
                    <div class="second-phone">
                        <a href="tel:{{ $texts->get(4)->text }}" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;" id="text_{{ $texts->get(4)->id }}" contenteditable="true">{!! $texts->get(4)->text !!}</a>
                        <p id="text_{{ $texts->get(5)->id }}" contenteditable="true">{!! $texts->get(5)->text !!}</p>
                        <span id="text_{{ $texts->get(6)->id }}" contenteditable="true">{!! $texts->get(6)->text !!}</span>
                    </div>
                    <div class="third-phone">
                        <a href="tel:{{ $texts->get(7)->text }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" id="text_{{ $texts->get(7)->id }}" contenteditable="true">{!! $texts->get(7)->text !!}</a>
                        <p id="text_{{ $texts->get(8)->id }}" contenteditable="true">{!! $texts->get(8)->text !!}</p>
                        <span id="text_{{ $texts->get(9)->id }}" contenteditable="true">{!! $texts->get(9)->text !!}</span>
                    </div>
                    <div class="fourth-phone">
                        <a href="tel:{{ $texts->get(10)->text }}" onclick="yaCounter45529422.reachGoal('kamova'); return true;" id="text_{{ $texts->get(10)->id }}" contenteditable="true">{!! $texts->get(10)->text !!}</a>
                        <p id="text_{{ $texts->get(11)->id }}" contenteditable="true">{!! $texts->get(11)->text !!}</p>
                        <span id="text_{{ $texts->get(12)->id }}" contenteditable="true">{!! $texts->get(12)->text !!}</span>
                    </div>

                </div>
            </address>
            <div class="header-phone-hidden">
                <a class="js-popup4" href="tel:{{ $texts->get(1)->text }}"></a>
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
<label class="header-image-edit-area label" data-toggle="tooltip" title="Изменить фон">
    <input style="display: none" type="file" class="sr-only" id="image" name="image" accept="image/*">
</label>
<div class="container">
    <div class="header-bottom">
        <h1 data-aos="fade-up" id="text_{{ $texts->get(13)->id }}" contenteditable="true">
            {!! $texts->get(13)->text !!}
        </h1>
        <p data-aos="fade-up" id="text_{{ $texts->get(14)->id }}" contenteditable="true">{!! $texts->get(14)->text !!}</p>
        <p data-aos="fade-up">
            <span id="text_{{ $texts->get(15)->id }}" contenteditable="true">{!! $texts->get(15)->text !!}</span>
        </p>
        <p>
            <a class="js-popup btn" data-type="ПРОБНОЕ ЗАНЯТИЕ" href="{{ route('admin.') }}" data-aos="fade-up">ПРОБНОЕ ЗАНЯТИЕ</a>
    </div>
</div>
