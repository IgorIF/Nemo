<div class="about-image left" data-aos="fade-up">
    <img src="{{ asset('storage/images/videos/' . $video->image) }}" alt="Детский акваклуб «Немо»" width="507" height="475">
    <a id="play-video" class="video-play-button" href="https://www.youtube.com/embed/{{ $video->url }}?autoplay=1"> <span></span></a>

    <div id="video-overlay" class="video-overlay">
        <a class="video-overlay-close">&times;</a>
    </div>
</div>

<div class="about-description right">
    <h2 data-aos="fade-up">{!! $texts->get(8)->text !!}</h2>
    <p data-aos="fade-up">{!! $texts->get(9)->text !!}</p>
</div>
