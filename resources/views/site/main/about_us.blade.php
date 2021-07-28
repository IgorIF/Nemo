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



{{--<div class="about-image left" data-aos="fade-up">
    <img src="{{ asset('storage/images/videos/' . $video->image) }}" alt="Детский акваклуб «Немо»" width="507" height="475">
    <a id="play-video" class="video-play-button" href="https://www.youtube.com/embed/{{ $video->url }}?autoplay=1"> <span></span></a>

    <div id="video-overlay" class="video-overlay">
        <a class="video-overlay-close">&times;</a>
    </div>
</div>

<div class="about-description right">
    <h2 data-aos="fade-up">{!! $texts->get(8)->text !!}</h2>
    <p data-aos="fade-up">{!! $texts->get(9)->text !!}</p>
</div>--}}
