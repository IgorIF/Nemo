<section class="gallery">
    <div class="container">
        <h2 class="title title_center gallery__title">{{ $texts->get(7)->text }}</h2>
        <div class="gallery-slider slider">
            <div class="gallery__grid swiper-wrapper">
                <a href="{{ asset('storage/images/gallery/1.png') }}" class="swiper-slide gallery-item gallery-item_6x2"><img src="{{ asset('storage/images/gallery/1_preview.png') }}" alt=""></a>
                <a href="{{ asset('storage/images/gallery/2.png') }}" class="swiper-slide gallery-item"><img src="{{ asset('storage/images/gallery/2_preview.png') }}" alt=""></a>
                <a href="{{ asset('storage/images/gallery/3.jpg') }}" class="swiper-slide gallery-item"><img src="{{ asset('storage/images/gallery/3_preview.jpg') }}" alt=""></a>
                <a href="{{ asset('storage/images/gallery/4.png') }}" class="swiper-slide gallery-item"><img src="{{ asset('storage/images/gallery/4_preview.png') }}" alt=""></a>
                <a href="{{ asset('storage/images/gallery/5.png') }}" class="swiper-slide gallery-item"><img src="{{ asset('storage/images/gallery/5_preview.png') }}" alt=""></a>
                <a href="{{ asset('storage/images/gallery/6.png') }}" class="swiper-slide gallery-item"><img src="{{ asset('storage/images/gallery/6_preview.png') }}" alt=""></a>
                <a href="{{ asset('storage/images/gallery/7.png') }}" class="swiper-slide gallery-item gallery-item_4x1"><img src="{{ asset('storage/images/gallery/7_preview.png') }}" alt=""></a>
                <a href="{{ asset('storage/images/gallery/8.jpg') }}" class="swiper-slide gallery-item gallery-item_5x1"><img src="{{ asset('storage/images/gallery/8_preview.jpg') }}" alt=""></a>
            </div>
            <div class="gallery-slider-pagination slider-pagination"></div>
        </div>
    </div>
</section>

{{--<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-27a85768-9042-4df7-9257-25594652d98b"></div>--}}
