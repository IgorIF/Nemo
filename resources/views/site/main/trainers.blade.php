<h2 data-aos="fade-up">{!! $texts->get(33)->text !!}</h2>
<p data-aos="fade-up">{!! $texts->get(34)->text !!}</p>

<div class="flexslider" id="f1" data-aos="fade-up">
    <div class="slides">

        @foreach($trainers as $trainer)

            <div>
                <div class="flex jcsb">
                    <div class="trainer_foto"><img src="{{ asset('storage/images/trainers/' . $trainer->image) }}" /></div>
                    <div class="trainer_caption">
                        <h4>{!! $trainer->name !!}</h4>
                        <p>{!! $trainer->description !!}</p>

                        @if(!empty($trainer->video))
                            <div><a data-fancybox href="https://www.youtube.com/watch?v={{ $trainer->video }}">Смотреть занятие</a></div>
                        @endif

                    </div>
                </div>
            </div>

        @endforeach

    </div>
</div>
<div class="flexslider" id="f2">
    <div class="slides_pagination">

        @foreach($trainers as $trainer)
            <div>
                <img src="{{ asset('storage/images/trainers/' . $trainer->image) }}" />
            </div>
        @endforeach

    </div>
</div>
