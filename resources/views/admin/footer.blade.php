<footer class="footer">
    <div class="container">
    <div class="footer-top">
        <div class="left">
            <a href="index.html" data-aos="fade-up">
                <img src="{{ asset('images/logo-footer.png') }}" alt="Акваклуб Nemo" width="222" height="117">
            </a>
            <a class="js-popup btn btn-invert" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="index.html" data-aos="fade-up">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
        </div>
        <div class="center1" data-aos="fade-up">
            <h3 data-aos="fade-up" id="text_{{ $texts->get(55)->id }}" contenteditable="true">{!! $texts->get(55)->text !!}</h3>
            <a href="tel:{{ $texts->get(1)->text }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;" data-aos="fade-up" id="text_{{ $texts->get(1)->id }}" contenteditable="true">{!! $texts->get(1)->text !!}</a>
            <address data-aos="fade-up" id="text_{{ $texts->get(2)->id }}" contenteditable="true">{!! $texts->get(2)->text !!}</address>
            <a href="tel:{{ $texts->get(4)->text }}" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;" data-aos="fade-up" id="text_{{ $texts->get(4)->id }}" contenteditable="true">{!! $texts->get(4)->text !!}</a>
            <address data-aos="fade-up" id="text_{{ $texts->get(5)->id }}" contenteditable="true">{!! $texts->get(5)->text !!}</address>
            <a href="tel:{{ $texts->get(7)->text }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" data-aos="fade-up" id="text_{{ $texts->get(7)->id }}" contenteditable="true">{!! $texts->get(7)->text !!}</a>
            <address id="text_{{ $texts->get(8)->id }}" contenteditable="true">{!! $texts->get(8)->text !!}</address>
            <a href="tel:{{ $texts->get(10)->text }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" data-aos="fade-up" id="text_{{ $texts->get(10)->id }}" contenteditable="true">{!! $texts->get(10)->text !!}</a>
            <address id="text_{{ $texts->get(11)->id }}" contenteditable="true">{!! $texts->get(11)->text !!}</address>
        </div>

        <div class="center2">
            <h3 id="text_{{ $texts->get(56)->id }}" contenteditable="true">{!! $texts->get(56)->text !!}</h3>
            <p id="text_{{ $texts->get(57)->id }}" contenteditable="true">{!! $texts->get(57)->text !!}</p>
            <span id="text_{{ $texts->get(58)->id }}" contenteditable="true">{!! $texts->get(58)->text !!}</span>
        </div>

        <div class="right">
            <h3 id="text_{{ $texts->get(59)->id }}" contenteditable="true">{!! $texts->get(59)->text !!}</h3>
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
            <p id="text_{{ $texts->get(60)->id }}" contenteditable="true">{!! $texts->get(60)->text !!}</p>
            <a class="mail" href="mailto:{{ $texts->get(61)->text }}" id="text_{{ $texts->get(61)->id }}" contenteditable="true">{!! $texts->get(61)->text !!}</a>
        </div>
    </div>

    <div class="footer-bottom">
        <p id="text_{{ $texts->get(62)->id }}" contenteditable="true">{!! $texts->get(62)->text !!}</p>
    </div>

    <!-- fh -->
    <div class="footer-hidden" id="contact">
        <div class="footer-hidden-top">
            <div class="left">
                <address id="text_{{ $texts->get(2)->id }}" contenteditable="true">
                    {!! $texts->get(2)->text !!}
                    <span class="metro metro1">(метро Пражская)</span>
                </address>
                <a href="tel:{{ $texts->get(1)->text }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;" data-aos="fade-up" id="text_{{ $texts->get(1)->id }}" contenteditable="true">{!! $texts->get(1)->text !!}</a>
            </div>

            <div class="right">
                <address  id="text_{{ $texts->get(5)->id }}" contenteditable="true">
                    {!! $texts->get(5)->text !!}
                    <span class="metro metro2">(метро Академическая)</span>
                </address>
                <a href="tel:{{ $texts->get(4)->text }}" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;" data-aos="fade-up" id="text_{{ $texts->get(4)->id }}" contenteditable="true">{!! $texts->get(4)->text !!}</a>
            </div>

            <div class="right">
                <address id="text_{{ $texts->get(8)->id }}" contenteditable="true">
                    {!! $texts->get(8)->text !!}
                    <span class="metro metro3">(метро Марьино)</span>
                </address>
                <a href="tel:{{ $texts->get(7)->text }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" data-aos="fade-up" id="text_{{ $texts->get(7)->id }}" contenteditable="true">{!! $texts->get(7)->text !!}</a>
            </div>
            <div class="right">
                <address id="text_{{ $texts->get(11)->id }}" contenteditable="true">
                    {!! $texts->get(11)->text !!}
                    <span class="metro metro4">(метро Некрасовка)</span>
                </address>
                <a href="tel:{{ $texts->get(10)->text }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" data-aos="fade-up" id="text_{{ $texts->get(10)->id }}" contenteditable="true">{!! $texts->get(10)->text !!}</a>
            </div>
        </div>

        <div class="footer-hidden-operating-mode-pool">
            <h3 id="text_{{ $texts->get(56)->id }}" contenteditable="true">{!! $texts->get(56)->text !!}</h3>
            <p id="text_{{ $texts->get(57)->id }}" contenteditable="true">{!! $texts->get(57)->text !!}</p>
            <span id="text_{{ $texts->get(58)->id }}" contenteditable="true">{!! $texts->get(58)->text !!}</span>
        </div>

        <div class="footer-hidden-questions">
            <div class="left">
                <p id="text_{{ $texts->get(60)->id }}" contenteditable="true">{!! $texts->get(60)->text !!}</p>
                <a class="mail" href="mailto:{{ $texts->get(61)->text }}" id="text_{{ $texts->get(61)->id }}" contenteditable="true">{!! $texts->get(61)->text !!}</a>
            </div>
            <div class="right">
                <h3 id="text_{{ $texts->get(59)->id }}" contenteditable="true">{!! $texts->get(59)->text !!}</h3>
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
            <a class="footer-logo" href="index.html">
                <img src="{{ asset('images/logo-footer.png') }}" alt="Акваклуб Nemo" width="222" height="117">
            </a>
            <a class="js-popup btn btn-invert" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="index.html">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>

            <div class="footer-hidden-bottom">
                <p id="text_{{ $texts->get(62)->id }}" contenteditable="true">{!! $texts->get(62)->text !!}</p>
            </div>
        </div>
    </div>
</div>
</footer>
