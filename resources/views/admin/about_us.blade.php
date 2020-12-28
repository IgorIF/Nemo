<div class="about-image left" data-aos="fade-up">
    <img src="{{ asset('images/about.jpg') }}" alt="Детский акваклуб «Немо»" width="507" height="475">
    <a id="play-video" class="video-play-button" href="#"> <span></span></a>

    <div id="video-overlay" class="video-overlay">
        <a class="video-overlay-close">&times;</a>
    </div>

</div>
<div class="about-description right">
    <h2 data-aos="fade-up" id="text_{{ $texts->get(8)->id }}" contenteditable="true">{!! $texts->get(8)->text !!}</h2>
    <p data-aos="fade-up" id="text_{{ $texts->get(9)->id }}" contenteditable="true">{!! $texts->get(9)->text !!}</p>
</div>
