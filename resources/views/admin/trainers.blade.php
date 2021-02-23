<h2 data-aos="fade-up" id="text_{{ $texts->get(41)->id }}" contenteditable="true">{!! $texts->get(41)->text !!}</h2>
<p data-aos="fade-up" id="text_{{ $texts->get(42)->id }}" contenteditable="true">{!! $texts->get(42)->text !!}</p>

<div class="flexslider" id="f1" data-aos="fade-up">
    <div class="slides">

        @foreach($trainers as $trainer)

            <div id="trainer_{{ $trainer->id }}">
                <div class="flex jcsb">

                    <div class="trainer_foto">
                        <label class="label" data-toggle="tooltip" title="Загрузить фото">
                            <img src="{{ asset('storage/images/trainers/' . $trainer->image) }}" />
                            <input style="display: none" type="file" class="sr-only" id="trainer_image" name="image" accept="image/*">
                        </label>
                    </div>

                    <div class="trainer_caption">
                        <h4 id="trainer_name" contenteditable="true">{!! $trainer->name !!}</h4>
                        <p id="trainer_description" contenteditable="true">{!! $trainer->description !!}</p>

                        @if(!empty($trainer->video))
                            <div><a data-fancybox href="https://www.youtube.com/watch?v={{ $trainer->video }}">Смотреть занятие</a></div>
                        @else
                            <div><a id="trainerVideoAddBtn" class="video-control" href="#">Добавить видео</a></div>
                        @endif


                    </div>
                    <div class="trainer-delete-container">
                        <div class="trainer-delete-sub-container">
                            <a id="trainer_delete_btn" class="btn">Удалить тренера</a>
                            <div id="deleteTooltip" class="delete-tooltip delete-trainer" tabindex="1">
                                Удалить тренера?
                                <a class="button--border">Да</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</div>
<div class="flexslider" id="f2">
    <div class="slides_pagination">

        @foreach($trainers as $trainer)
            <div id="trainer_{{ $trainer->id }}">
                <img src="{{ asset('storage/images/trainers/' . $trainer->image) }}" />
            </div>
        @endforeach

    </div>
</div>

<div style="align-content: center; height: 100px">
    <a id="trainer_add_btn" class="btn" style="display: inline-block; padding: 20px 30px">Добавить тренера</a>
</div>


