<h2 data-aos="fade-up" id="text_32" contenteditable="true">{!! $text[32] !!}</h2>
<p data-aos="fade-up" id="text_33" contenteditable="true">{!! $text[33] !!}</p>

<div class="flexslider" id="f1" data-aos="fade-up">
    <div class="slides">

        @foreach($trainers as $trainer)

            <div id="trainer_{{ $trainer->id }}">
                <div class="flex jcsb">

                    <div class="trainer_foto">
                        <label class="label" data-toggle="tooltip" title="Загрузить фото">
                            <img src="{{ asset('storage/trainers/' . $trainer->image) }}" />
                            <input style="display: none" type="file" class="sr-only" id="trainer_image" name="image" accept="image/*">
                        </label>
                    </div>

                    <div class="trainer_caption">
                        <h4 id="trainer_name" contenteditable="true">{{ $trainer->name }}</h4>
                        <p id="trainer_description" contenteditable="true">{{ $trainer->description }}</p>

                        @if(!empty($trainer->video))
                            <div><a data-fancybox href="{{ $trainer->video }}">Смотреть занятие</a></div>
                        @endif


                    </div>
                    <div style="max-width: 90%; width: 100%; margin: auto; height: 100px">
                        <a id="trainer_delete_btn" class="btn" style="padding: 20px 30px; float: right; box-shadow: none">Удалить тренера</a>
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
                <img src="{{ asset('storage/trainers/' . $trainer->image) }}" />
            </div>
        @endforeach

    </div>
</div>

<div style="align-content: center; height: 100px">
    <a id="trainer_add_btn" class="btn" style="display: inline-block; padding: 20px 30px">Добавить тренера</a>
</div>


