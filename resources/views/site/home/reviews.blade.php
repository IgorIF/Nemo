<div class="container">
    <h2 class="title title_center reviews__title">Отзывы наших клиентов</h2>
    <div class="slider-3col__wrapper">
        <div class="reviews-slider slider slider-3col">
            <div class="swiper-wrapper">

                @foreach($reviews as $review)

                    <div class="swiper-slide reviews-item">
                        <header class="reviews-item__header">
                            <div class="reviews-item__ava"><img src="{{ $review->image ? 'storage/images/reviews/' . $review->image : 'images/dist/review.png' }}" alt=""></div>
                            <div class="reviews-item__name">
                                <b>{{ $review->name }}</b>
                                {{ $review->babe ?: '' }}
                            </div>
                        </header>
                        {{ \Illuminate\Support\Str::limit($review->text, 270) }} <button type="button" class="reviews-item__btn btn-popup" data-mfp-src="#rev{{ $review->id }}">далее</button>

                        <div id="rev{{ $review->id }}" class="popup reviews__popup mfp-hide" data-simplebar>
                            <header class="reviews-item__header">
                                <div class="reviews-item__ava"><img src="{{ $review->image ? 'storage/images/reviews/' . $review->image : 'images/dist/review.png' }}" alt=""></div>
                                <div class="reviews-item__name">
                                    <b>{{ $review->name }}</b>
                                    {{ $review->babe ?: '' }}
                                </div>
                            </header>
                            {{ $review->text }}
                        </div>
                    </div>

                @endforeach

            </div>
            <div class="reviews-slider-pagination slider-3col-pagination slider-pagination"></div>
        </div>
        <button class="reviews-prev slider-prev slider-3col-prev">Назад</button>
        <button class="reviews-next slider-next slider-3col-next">Вперед</button>
    </div>
</div>
