<h2 data-aos="fade-up" id="text_{{ $texts->get(23)->id }}" contenteditable="true">{!! $texts->get(23)->text !!}</h2>

<div class="age-of-child-items">
    <div class="tabs" data-aos="fade-up">
        <div class="tab left">
            <picture>
                <source srcset="{{ asset('images/age-of-child-icon1-active.svg') }}" type="image/svg+xml">
                <img src="{{ asset('images/age-of-child-icon1-active.png') }}" alt="{{ $texts->get(24)->text }}" width="53" height="49">
            </picture>
            <p id="text_{{ $texts->get(24)->id }}" contenteditable="true">{!! $texts->get(24)->text !!}</p>
        </div>
        <div class="tab center">
            <picture>
                <source srcset="{{ asset('images/age-of-child-icon2.svg') }}" type="image/svg+xml">
                <img src="{{ asset('images/age-of-child-icon2.png') }}" alt="{{ $texts->get(25)->text }}" width="59" height="50">
            </picture>
            <p id="text_{{ $texts->get(25)->id }}" contenteditable="true">{!! $texts->get(25)->text !!}</p>
        </div>
        <div class="tab right">
            <picture>
                <source srcset="{{ asset('images/age-of-child-icon3.svg') }}" type="image/svg+xml">
                <img src="{{ asset('images/age-of-child-icon3.png') }}" alt="{{ $texts->get(26)->text }}" width="42" height="49">
            </picture>
            <p id="text_{{ $texts->get(26)->id }}" contenteditable="true">{!! $texts->get(26)->text !!}</p>
        </div>
    </div>

    <div id="whoSwimWithUs" class="tab_content" data-aos="fade-up">
        <div class="tab_item item1 image_{{ $images->get(3)->id }}" style="background-image: url({{ asset('storage/images/images/' . $images->get(3)->image) }})">
            <h3 id="text_{{ $texts->get(27)->id }}" contenteditable="true">{!! $texts->get(27)->text !!}</h3>
            <p id="text_{{ $texts->get(28)->id }}" contenteditable="true">{!! $texts->get(28)->text !!}</p>
            <a class="js-popup btn" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="#" data-aos="zoom-in">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
            <label id="image" class="image-edit-area" data-toggle="tooltip" title="Изменить">
                <input style="display: none" type="file" class="sr-only" id="image" name="image" accept="image/*">
            </label>
        </div>
        <div class="tab_item item2 image_{{ $images->get(4)->id }}" style="background-image: url({{ asset('storage/images/images/' . $images->get(4)->image) }})">
            <h3 id="text_{{ $texts->get(29)->id }}" contenteditable="true">{!! $texts->get(29)->text !!}</h3>
            <p id="text_{{ $texts->get(30)->id }}" contenteditable="true">{!! $texts->get(30)->text !!}</p>
            <a class="js-popup btn" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="#" data-aos="zoom-in">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
            <label id="image" class="image-edit-area" data-toggle="tooltip" title="Изменить">
                <input style="display: none" type="file" class="sr-only" id="image" name="image" accept="image/*">
            </label>
        </div>
        <div class="tab_item item3 image_{{ $images->get(5)->id }}" style="background-image: url({{ asset('storage/images/images/' . $images->get(5)->image) }})">
            <h3 id="text_{{ $texts->get(31)->id }}" contenteditable="true">{!! $texts->get(31)->text !!}</h3>
            <p id="text_{{ $texts->get(32)->id }}" contenteditable="true">{!! $texts->get(32)->text !!}</p>
            <a class="js-popup btn" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="#" data-aos="zoom-in">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
            <label id="image" class="image-edit-area" data-toggle="tooltip" title="Изменить">
                <input style="display: none" type="file" class="sr-only" id="image" name="image" accept="image/*">
            </label>
        </div>
    </div>
</div>
