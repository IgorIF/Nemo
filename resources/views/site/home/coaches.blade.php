<section class="coaches" id="coaches">
    <div class="container">
        <h2 class="title title_center coaches__title">{{ $texts->get(8)->text }}</h2>
        <p class="coaches__subtitle">{{ $texts->get(9)->text }}</p>
        <div class="coaches__filter filter">
            <button type="button" class="filter__btn">ВСЕ ФИЛИАЛЫ</button>
            <ul class="filter__select">
                <li class="active" data-label="all" tabindex="0"><span>ВСЕ ФИЛИАЛЫ</span></li>
                @foreach($filials as $filial)
                    <li data-label="{!! $filial->alias !!}" tabindex="0"><span>{{ $filial->address }} ({{ $filial->metro }})</span></li>
                @endforeach
            </ul>
        </div>
        <div class="coaches-slider__wrapper">
            <div class="coaches-slider slider">
                <div class="swiper-wrapper">
                    @foreach($trainers as $trainer)
                        <div class="swiper-slide coache btn-popup" data-filter="{{ $trainer->filialsAlias() }}" data-mfp-src="#trener{{ $trainer->id }}">
                            <div class="coache__img"><img src="{{ asset('storage/images/trainers/' . $trainer->image) }}" alt="{{ $trainer->name }}"></div>
                            <h3 class="coache__name">{{ $trainer->name }}</h3>
                            <div class="coache__text">{{ \Illuminate\Support\Str::limit($trainer->description, 270) }} <span>читать далее</span></div>
                            <div id="trener{{ $trainer->id }}" class="popup coache__popup mfp-hide" data-simplebar>
                                <div class="coache__popup-title">{{ $trainer->name }}</div>
                                {{ $trainer->description }}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="coaches-slider-pagination slider-pagination"></div>
            </div>
            <button class="coaches-prev slider-prev">Назад</button>
            <button class="coaches-next slider-next">Вперед</button>
        </div>
        <button type="button" class="btn-orange coaches__btn btn-popup" data-mfp-src="#call_me">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
    </div>
</section>
