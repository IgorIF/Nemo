<h2 data-aos="fade-up">{!! $texts->get(48)->text !!}</h2>

<section class="slider3" data-aos="fade-up">
    <div class="slider-slick">
        @foreach($videos as $video)
            <div class="slider">
                <div class="review_block">
                    <div class="play_block">
                        <img src="{{ asset('storage/images/videos/' . $video->image) }}" />
                        <a id="play-video-review" class="video-play-button" href="https://www.youtube.com/embed/{{ $video->url }}?autoplay=1"><span></span></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
