<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 offset-lg-2">
                <h2 class="title title_center about__title">{{ $texts->get(5)->text }}</h2>
                <p>{{ $texts->get(6)->text }}</p>
                <div class="video-block">
                    <img src="{{ asset('storage/images/videos/' . $video->image) }}" alt="Детский акваклуб «Немо»" class="video-block__img">
                    <a id="play-video" class="video-play-button video-block__btn" href="https://www.youtube.com/embed/{{ $video->url }}?autoplay=1"></a>
                    <div id="video-overlay" class="video-overlay">
                        <a class="video-overlay-close">×</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
