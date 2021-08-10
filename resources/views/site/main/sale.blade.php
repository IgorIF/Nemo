<section class="sale" id="sale">
    <div class="container">
        <h2 class="title title_center sale__title">{{ $texts->get(11)->text }}</h2>
        <div class="slider-3col__wrapper">
            <div class="sale-slider slider slider-3col">
                <div class="swiper-wrapper">

                    @foreach($promotions as $promotion)
                        <div class="swiper-slide sale-item">
                            <h3 class="sale-item__title">{!! $promotion->name !!}</h3>
                            <div class="sale-item__text">
                                <b>-{{ $promotion->percent }}%</b>
                                <span>СКИДКА</span>
                                {{ $promotion->target }}
                            </div>
                            <img src="{{ asset('storage/images/promotions/' . $promotion->image) }}" alt="{{ $promotion->name }}" class="sale-item__img">
                        </div>
                    @endforeach
                </div>
                <div class="sale-slider-pagination slider-3col-pagination slider-pagination"></div>
            </div>
            <button class="sale-prev slider-prev slider-3col-prev">Назад</button>
            <button class="sale-next slider-next slider-3col-next">Вперед</button>
        </div>
    </div>
</section>
