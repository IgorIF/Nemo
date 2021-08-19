<div class="container">
    <div class="row">
        <div class="col-lg-8 col-12 offset-lg-2">
            <h2 class="title title_center about__title">{{ $texts->get(5)->text }}</h2>
            <p>Сеть детских акваклубов «Немо» проводит индивидуальные занятия плаванием с детьми от 1.5 месяцев до 7 лет. Занятия проходят в игровой динамике с учетом возраста ребёнка, состояния его здоровья, психологических особенностей и умения держаться на воде.</p>
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
