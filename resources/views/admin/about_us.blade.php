<div class="about-image left" data-aos="fade-up">
    <img src="{{ asset('storage/images/videos/' . $video->image) }}" alt="Детский акваклуб «Немо»" width="507" height="475">
    <a id="play-video" class="video-play-button" href="{{ $video->url }}"> <span></span></a>
    <div id="video-overlay" class="video-overlay">
        <a class="video-overlay-close">&times;</a>
    </div>
</div>

<div class="about-description right">
    <h2 data-aos="fade-up" id="text_{{ $texts->get(16)->id }}" contenteditable="true">{!! $texts->get(16)->text !!}</h2>
    <p data-aos="fade-up" id="text_{{ $texts->get(17)->id }}" contenteditable="true">{!! $texts->get(17)->text !!}</p>
</div>

<a data-aos="fade-up" id="about_us_video_edit_btn" class="btn" style="padding: 20px 30px; box-shadow: none; display: inline-block; float: left">Изменить видео</a>
