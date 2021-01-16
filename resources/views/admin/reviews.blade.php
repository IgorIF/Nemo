<h2 data-aos="fade-up" id="text_{{ $texts->get(48)->id }}" contenteditable="true">{!! $texts->get(48)->text !!}</h2>

<section class="slider3" data-aos="fade-up">
    <div class="slider-slick">
        @foreach($videos as $video)
            <div class="slider video_{{ $video->id }}" style="text-align: center">
                <div class="review_block">
                    <div class="play_block">
                        <img src="{{ asset('storage/images/videos/' . $video->image) }}" />
                        <a id="play-video-review" class="video-play-button" href="{{ $video->url }}"><span></span></a>
                    </div>
                </div>
                <svg id="video_delete_btn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                </svg>
            </div>
        @endforeach
    </div>
    <div style="max-width: 90%; width: 100%; margin: auto; height: 100px; text-align: center; display: block">
        <a id="review_video_add_btn" class="btn" style="padding: 20px 30px; box-shadow: none">Добавить видео</a>
    </div>
</section>
