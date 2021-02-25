<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="left">
                <a href="{{ route('admin.') }}" data-aos="fade-up">
                    <img src="{{ asset('images/logo-footer.png') }}" alt="Акваклуб Nemo" width="222" height="117">
                </a>
                <a class="js-popup btn btn-invert" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="index.html" data-aos="fade-up">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>

            </div><div class="center1" data-aos="fade-up">
                <h3 data-aos="fade-up" id="text_{{ $texts->get(55)->id }}" contenteditable="true">{!! $texts->get(55)->text !!}</h3>

                <a id="filialBranch_phone_{{ $filialBranches->get(1)->id }}" href="tel:{{ $filialBranches->get(1)->phone }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;" data-aos="fade-up" contenteditable="true">{!! $filialBranches->get(1)->phone !!}</a>
                <address id="filialBranch_address_{{ $filialBranches->get(1)->id }}" data-aos="fade-up" contenteditable="true">{!! $filialBranches->get(1)->address !!}</address>

                <a id="filialBranch_phone_{{ $filialBranches->get(2)->id }}" href="tel:{{ $filialBranches->get(2)->phone }}" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;" data-aos="fade-up" contenteditable="true">{!! $filialBranches->get(2)->phone !!}</a>
                <address id="filialBranch_address_{{ $filialBranches->get(2)->id }}" data-aos="fade-up" contenteditable="true">{!! $filialBranches->get(2)->address !!}</address>

                <a id="filialBranch_phone_{{ $filialBranches->get(3)->id }}" href="tel:{{ $filialBranches->get(3)->phone }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" data-aos="fade-up" contenteditable="true">{!! $filialBranches->get(3)->phone !!}</a>
                <address id="filialBranch_address_{{ $filialBranches->get(3)->id }}" contenteditable="true">{!! $filialBranches->get(3)->address !!}</address>

                <a id="filialBranch_phone_{{ $filialBranches->get(4)->id }}" href="tel:{{ $filialBranches->get(4)->phone }}" onclick="yaCounter45529422.reachGoal('kamova'); return true;" data-aos="fade-up" contenteditable="true">{!! $filialBranches->get(4)->phone !!}</a>
                <address id="filialBranch_address_{{ $filialBranches->get(4)->id }}" contenteditable="true">{!! $filialBranches->get(4)->address !!}</address>

                <a id="filialBranch_phone_{{ $filialBranches->get(5)->id }}" href="tel:{{ $filialBranches->get(5)->phone }}" data-aos="fade-up" contenteditable="true">{!! $filialBranches->get(5)->phone !!}</a>
                <address id="filialBranch_address_{{ $filialBranches->get(5)->id }}" contenteditable="true">{!! $filialBranches->get(5)->address !!}</address>

            </div><div class="center2">
                <h3 id="text_{{ $texts->get(56)->id }}" contenteditable="true">{!! $texts->get(56)->text !!}</h3>
                <p id="text_{{ $texts->get(57)->id }}" contenteditable="true">{!! $texts->get(57)->text !!}</p>
                <span id="text_{{ $texts->get(58)->id }}" contenteditable="true">{!! $texts->get(58)->text !!}</span>

            </div><div class="right">
                <h3 id="text_{{ $texts->get(59)->id }}" contenteditable="true">{!! $texts->get(59)->text !!}</h3>
                <div class="social-link">
                    <a href="#">
                        <picture>
                            <source srcset="{{ asset('images/instagramm.svg') }}">
                            <img src="{{ asset('images/instagramm.png') }}" alt="инстаграмм">
                        </picture>
                    </a>
                    <a href="#">
                        <picture>
                            <source srcset="{{ asset('images/vk.svg') }}">
                            <img src="{{ asset('images/vk.png') }}" alt="вконтакте">
                        </picture>
                    </a>
                    <a href="#">
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
                    <address>
                        <div id="filialBranch_address_{{ $filialBranches->get(1)->id }}" contenteditable="true">{!! $filialBranches->get(1)->address !!}</div>
                        <span id="filialBranch_metro_{{ $filialBranches->get(1)->id }}" contenteditable="true" class="metro metro1">{!! $filialBranches->get(1)->metro !!}</span>
                    </address>
                    <a id="filialBranch_phone_{{ $filialBranches->get(1)->id }}" href="tel:{{ $filialBranches->get(1)->phone }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;" data-aos="fade-up" contenteditable="true">{!! $filialBranches->get(1)->phone !!}</a>
                </div>

                <div class="right">
                    <address >
                        <div id="filialBranch_address_{{ $filialBranches->get(2)->id }}" contenteditable="true">{!! $filialBranches->get(2)->address !!}</div>
                        <span id="filialBranch_metro_{{ $filialBranches->get(2)->id }}" contenteditable="true" class="metro metro2">{!! $filialBranches->get(2)->metro !!}</span>
                    </address>
                    <a id="filialBranch_phone_{{ $filialBranches->get(2)->id }}" href="tel:{{ $filialBranches->get(2)->phone }}" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;" data-aos="fade-up" contenteditable="true">{!! $filialBranches->get(2)->phone !!}</a>
                </div>

                <div class="right">
                    <address>
                        <div id="filialBranch_address_{{ $filialBranches->get(3)->id }}" contenteditable="true">{!! $filialBranches->get(3)->address !!}</div>
                        <span id="filialBranch_metro_{{ $filialBranches->get(3)->id }}" contenteditable="true" class="metro metro3">{!! $filialBranches->get(3)->metro !!}</span>
                    </address>
                    <a id="filialBranch_phone_{{ $filialBranches->get(3)->id }}" href="tel:{{ $filialBranches->get(3)->phone }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" data-aos="fade-up" contenteditable="true">{!! $filialBranches->get(3)->phone !!}</a>
                </div>
                <div class="right">
                    <address>
                        <div id="filialBranch_address_{{ $filialBranches->get(4)->id }}" contenteditable="true">{!! $filialBranches->get(4)->address !!}</div>
                        <span id="filialBranch_metro_{{ $filialBranches->get(4)->id }}" contenteditable="true" class="metro metro4">{!! $filialBranches->get(4)->metro !!}</span>
                    </address>
                    <a id="filialBranch_phone_{{ $filialBranches->get(4)->id }}" href="tel:{{ $filialBranches->get(4)->phone }}" onclick="yaCounter45529422.reachGoal('kamova'); return true;" data-aos="fade-up" contenteditable="true">{!! $filialBranches->get(4)->phone !!}</a>
                </div>
                <div class="left">
                    <address>
                        <div id="filialBranch_address_{{ $filialBranches->get(5)->id }}" contenteditable="true">{!! $filialBranches->get(5)->address !!}</div>
                        <span id="filialBranch_metro_{{ $filialBranches->get(5)->id }}" contenteditable="true" class="metro metro1">{!! $filialBranches->get(5)->metro !!}</span>
                    </address>
                    <a id="filialBranch_phone_{{ $filialBranches->get(5)->id }}" href="tel:{{ $filialBranches->get(5)->phone }}" contenteditable="true">{!! $filialBranches->get(5)->phone !!}</a>
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
                <a class="footer-logo" href="{{ route('admin.') }}">
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

<div class="block-bottom">
    <div class="container">
        <span id="text_{{ $texts->get(73)->id }}" contenteditable="true">{!! $texts->get(73)->text !!}</span>
        <a href="" class="js-popup5 button--border">вакансии</a>
    </div>
</div>
