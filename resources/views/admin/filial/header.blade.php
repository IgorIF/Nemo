<header class="header image_{{ $images->get(1)->id }}" style="background-image: url({{ asset('storage/images/images/' . $images->get(1)->image) }})">
    <div class="header-top clearfix header-top-castom">
        <div class="container">
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
                <p id="filialBranch_address_{{ $filialBranch->id }}" contenteditable="true">{!! $filialBranch->address !!}</p>
                <span class="green" id="filialBranch_metro_{{ $filialBranch->id }}" contenteditable="true">(метро {!! $filialBranch->metro !!})</span>
            </address>
            <div class="header-phones">
                <a id="filialBranch_phone_{{ $filialBranch->id }}" href="tel:{{ $filialBranch->phone }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;" contenteditable="true">{!! $filialBranch->phone !!}</a>
                <div class="header-phone-hidden">
                    <a class="js-popup4" href="tel:{{ $filialBranch->phone }}"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="header-bottom">
            <h1 data-aos="fade-up"><br></h1>
            <p id="filialBranch_header_{{ $filialBranch->id }}" contenteditable="true" data-aos="fade-up">{!! $filialBranch->header !!}</p>
            <p data-aos="fade-up">
                <span id="text_{{ $texts->get(68)->id }}" contenteditable="true">{!! $texts->get(68)->text !!}</span>
            </p>
        </div>
    </div>
</header>
