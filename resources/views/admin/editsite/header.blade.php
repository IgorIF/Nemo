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
                <a href="index.html">
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
                        <a href="tel:+79776800261" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;">+7(977)680-02-61</a>
                        <p>ул. Кировоградская 36 </p>
                        <span>Пражская<i>800м</i></span>
                    </div>
                    <div class="second-phone">
                        <a href="tel:+79776800262" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;">+7(977)680-02-62</a>
                        <p>ул. Винокурова 24, к4</p>
                        <span>Академическая<i>1,7км</i></span>
                    </div>
                    <div class="third-phone" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;">
                        <a href="tel:+79776800263">+7(977)680-02-63</a>
                        <p>Мячковский бульвар 16, к1</p>
                        <span>Марьино<i>1,1км</i></span>
                    </div>
                    <div class="fourth-phone">
                        <a href="tel:+79776800266" onclick="yaCounter45529422.reachGoal('kamova'); return true;">+7(977)680-02-66</a>
                        <p>г.Люберцы, ул. Камова 11/5 </p>
                        <span>Некрасовка<i>2,5 км</i></span>
                    </div>

                </div>
            </address>
            <div class="header-phone-hidden">
                <a class="js-popup4" href="tel:+79776800261"></a>
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
                <a href="https://vk.com/aquaclubnemo" target="_blank"><img src="{{ asset('images/vk_red_copy.png') }}"></a>
                <a href="https://www.facebook.com/aquaclubnemo" target="_blank"><img src="{{ asset('images/fb_red copy.svg') }}"></a>
                <a href="https://www.instagram.com/aquaclubnemo/" target="_blank"><img src="{{ asset('images/insta_red copy.png') }}"></a>
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
        <h1 data-aos="fade-up" id="header_text_1" contenteditable="true">{{ $headerText[1] }}</h1>
        <p data-aos="fade-up" id="header_text_2" contenteditable="true">{{ $headerText[2] }}</p>
        <p data-aos="fade-up">

            <span>Cкидка -30% на первое занятие</span>
        </p>
        <p>
            <a class="js-popup btn" data-type="ПРОБНОЕ ЗАНЯТИЕ" href="index.html" data-aos="fade-up">ПРОБНОЕ ЗАНЯТИЕ</a>
    </div>
</div>
