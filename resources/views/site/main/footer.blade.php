<div class="row">
    <div class="col-12">
        <div class="footer-mobil__title">Контакты</div>
        <div class="footer__logo"><img src="images/dist/logo-f.svg" alt=""></div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="footer__item">
            <div class="footer__phone">
                <a href="tel:+74951206711" class="phone">+7(495)120-67-11</a>
                <span>Единый номер</span>
            </div>
            <button type="button" class="btn-orange footer__btn btn-popup" data-mfp-src="#call_me">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
        </div>
    </div>
    <div class="col-md-5 footer__group">
        <div class="footer__item">
            <div class="footer__title">График работы</div>
            <div class="footer__time">09:00 - 21:00</div>
            <span>Без выходных</span>
        </div>
        <div class="footer__item">
            <div class="footer__title">Присоединяйтесь</div>
            <div class="soc">
                <a href="#" class="soc-link" target="_blank"><img src="images/dist/icon/instagram.svg" alt=""></a>
                <a href="#" class="soc-link" target="_blank"><img src="images/dist/icon/fa.svg" alt=""></a>
                <a href="#" class="soc-link" target="_blank"><img src="images/dist/icon/vk.svg" alt=""></a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="footer__item">
            <div class="footer__title">Есть что написать?</div>
            <a href="mailto:aquanemo@yandex.ru" class="footer__email">aquanemo@yandex.ru</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 flex">
        <div class="copir">ООО "Акваклуб". ИНН: 7726432268 ОГРН: 118774650808 Юридический адрес: г. Москва, ул. Кировоградская 36 пом.XVIII тел. +7(977)680-02-61</div>
        <div class="vacans">Приглашаем на работу в наш дружный коллектив <a href="#" class="btn-white">ВАКАНСИИ</a></div>
    </div>
</div>








{{--
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="left">
                <a href="{{ route('site') }}" >
                    <img src="{{ asset('images/logo-footer.png') }}" alt="Акваклуб Nemo" width="222" height="117">
                </a>
                <a class="js-popup btn btn-invert" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="{{ route('site') }}" >ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>

            </div><div class="center1" >
                <h3 >{!! $texts->get(47)->text !!}</h3>

                <a href="tel:{{ $filials->get(1)->phone }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;" >{!! $filials->get(1)->phone !!}</a>
                <address >{!! $filials->get(1)->address !!}</address>

                <a href="tel:{{ $filials->get(2)->phone }}" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;" >{!! $filials->get(2)->phone !!}</a>
                <address >{!! $filials->get(2)->address !!}</address>

                <a href="tel:{{ $filials->get(3)->phone }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" >{!! $filials->get(3)->phone !!}</a>
                <address >{!! $filials->get(3)->address !!}</address>

                <a href="tel:{{ $filials->get(4)->phone }}" onclick="yaCounter45529422.reachGoal('kamova'); return true;" >{!! $filials->get(4)->phone !!}</a>
                <address >{!! $filials->get(4)->address !!}</address>

                <a href="tel:{{ $filials->get(5)->phone }}" >{!! $filials->get(5)->phone !!}</a>
                <address >{!! $filials->get(5)->address !!}</address>

            </div><div class="center2">
                <h3>{!! $texts->get(48)->text !!}</h3>
                <p>{!! $texts->get(49)->text !!}</p>
                <span>{!! $texts->get(50)->text !!}</span>


            </div><div class="right">
                <h3>{!! $texts->get(51)->text !!}</h3>
                <div class="social-link">
                    <a href="https://www.instagram.com/aquaclubnemo/" target="_blank">
                        <picture>
                            <source srcset="{{ asset('images/instagramm.svg') }}">
                            <img src="{{ asset('images/instagramm.png') }}" alt="инстаграмм">
                        </picture>
                    </a>
                    <a href="https://vk.com/aquaclubnemo" target="_blank">
                        <picture>
                            <source srcset="{{ asset('images/vk.svg') }}">
                            <img src="{{ asset('images/vk.png') }}" alt="вконтакте">
                        </picture>
                    </a>
                    <a href="https://www.facebook.com/aquaclubnemo" target="_blank">
                        <picture>
                            <source srcset="{{ asset('images/fb.svg') }}">
                            <img src="{{ asset('images/fb.png') }}" alt="фейсбук">
                        </picture>
                    </a>
                </div>
                <p>{!! $texts->get(52)->text !!}</p>
                <a class="mail" href="mailto:{{ $texts->get(53)->text }}">{!! $texts->get(53)->text !!}</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>{!! $texts->get(54)->text !!}</p>
        </div>

        <!-- fh -->
        <div class="footer-hidden" id="contact">
            <div class="footer-hidden-top">
                <div class="left">
                    <address>
                        <div>{!! $filials->get(1)->address !!}</div>
                        <span class="metro metro1">{!! $filials->get(1)->metro !!}</span>
                    </address>
                    <a href="tel:{{ $filials->get(1)->phone }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;" data-aos="fade-up">{!! $filials->get(1)->phone !!}</a>
                </div>

                <div class="right">
                    <address >
                        <div>{!! $filials->get(2)->address !!}</div>
                        <span class="metro metro2">{!! $filials->get(2)->metro !!}</span>
                    </address>
                    <a href="tel:{{ $filials->get(2)->phone }}" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;" data-aos="fade-up">{!! $filials->get(2)->phone !!}</a>
                </div>

                <div class="right">
                    <address>
                        <div>{!! $filials->get(3)->address !!}</div>
                        <span class="metro metro3">{!! $filials->get(3)->metro !!}</span>
                    </address>
                    <a href="tel:{{ $filials->get(3)->phone }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" data-aos="fade-up">{!! $filials->get(3)->phone !!}</a>
                </div>
                <div class="right">
                    <address>
                        <div>{!! $filials->get(4)->address !!}</div>
                        <span class="metro metro4">{!! $filials->get(4)->metro !!}</span>
                    </address>
                    <a href="tel:{{ $filials->get(4)->phone }}" onclick="yaCounter45529422.reachGoal('kamova'); return true;" data-aos="fade-up">{!! $filials->get(4)->phone !!}</a>
                </div>
                <div class="left">
                    <address>
                        <div contenteditable="true">{!! $filials->get(5)->address !!}</div>
                        <span class="metro metro1">{!! $filials->get(5)->metro !!}</span>
                    </address>
                    <a href="tel:{{ $filials->get(5)->phone }}">{!! $filials->get(5)->phone !!}</a>
                </div>
            </div>

            <div class="footer-hidden-operating-mode-pool">
                <h3>{!! $texts->get(48)->text !!}</h3>
                <p>{!! $texts->get(49)->text !!}</p>
                <span>{!! $texts->get(50)->text !!}</span>
            </div>

            <div class="footer-hidden-questions">
                <div class="left">
                    <p>{!! $texts->get(52)->text !!}</p>
                    <a class="mail" href="mailto:{{ $texts->get(53)->text }}">{!! $texts->get(53)->text !!}</a>
                </div>
                <div class="right">
                    <h3>{!! $texts->get(51)->text !!}</h3>
                    <div class="social-link">
                        <a href="https://www.instagram.com/aquaclubnemo/" target="_blank">
                            <picture>
                                <source srcset="{{ asset('images/instagramm.svg') }}">
                                <img src="{{ asset('images/instagramm.png') }}" alt="инстаграмм">
                            </picture>
                        </a>
                        <a href="https://vk.com/aquaclubnemo" target="_blank">
                            <picture>
                                <source srcset="{{ asset('images/vk.svg') }}">
                                <img src="{{ asset('images/vk.png') }}" alt="вконтакте">
                            </picture>
                        </a>
                        <a href="https://www.facebook.com/aquaclubnemo" target="_blank">
                            <picture>
                                <source srcset="{{ asset('images/fb.svg') }}">
                                <img src="{{ asset('images/fb.png') }}" alt="фейсбук">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-hidden-logo">
                <a class="footer-logo" href="{{ route('site') }}">
                    <img src="{{ asset('images/logo-footer.png') }}" alt="Акваклуб Nemo" width="222" height="117">
                </a>
                <a class="js-popup btn btn-invert" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="{{ route('site') }}">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>

                <div class="footer-hidden-bottom">
                    <p>{!! $texts->get(54)->text !!}</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="block-bottom">
    <div class="container">
        <span>{!! $texts->get(55)->text !!}</span>
        <a href="" class="js-popup5 button--border">вакансии</a>
    </div>
</div>
--}}
