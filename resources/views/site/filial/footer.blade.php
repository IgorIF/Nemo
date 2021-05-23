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

                <a href="tel:{{ $filialBranch->phone }}" onclick="yaCounter45529422.reachGoal('{{ $filialBranch->alias }}'); return true;" >{!! $filialBranch->phone !!}</a>
                <address >{!! $filialBranch->address !!}</address>

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
                        <div>{!! $filialBranch->address !!}</div>
                        <span class="metro metro1">{!! $filialBranch->metro !!}</span>
                    </address>
                    <a href="tel:{{ $filialBranch->phone }}" onclick="yaCounter45529422.reachGoal('{{ $filialBranch->alias }}'); return true;" data-aos="fade-up">{!! $filialBranch->phone !!}</a>
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
