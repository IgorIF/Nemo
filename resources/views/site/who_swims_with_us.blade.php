<h2 data-aos="fade-up">{!! $texts->get(31)->text !!}</h2>

<div class="age-of-child-items">
    <div class="tabs" data-aos="fade-up">
        <div class="tab left">
            <picture>
                <source srcset="{{ asset('images/age-of-child-icon1-active.svg') }}" type="image/svg+xml">
                <img src="{{ asset('images/age-of-child-icon1-active.png') }}" alt="{{ $texts->get(32)->text }}" width="53" height="49">
            </picture>
            <p>{!! $texts->get(32)->text !!}</p>
        </div>
        <div class="tab center">
            <picture>
                <source srcset="{{ asset('images/age-of-child-icon2.svg') }}" type="image/svg+xml">
                <img src="{{ asset('images/age-of-child-icon2.png') }}" alt="{{ $texts->get(33)->text }}" width="59" height="50">
            </picture>
            <p>{!! $texts->get(33)->text !!}</p>
        </div>
        <div class="tab right">
            <picture>
                <source srcset="{{ asset('images/age-of-child-icon3.svg') }}" type="image/svg+xml">
                <img src="{{ asset('images/age-of-child-icon3.png') }}" alt="{{ $texts->get(34)->text }}" width="42" height="49">
            </picture>
            <p>{!! $texts->get(34)->text !!}</p>
        </div>
    </div>

    <div class="tab_content" data-aos="fade-up">
        <div class="tab_item item1" style="background-image: url({{ asset('storage/images/images/' . $images->get(3)->image) }})">
            <h3>{!! $texts->get(35)->text !!}</h3>
            <p>{!! $texts->get(36)->text !!}</p>
            <a class="js-popup btn" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="#" data-aos="zoom-in">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
        </div>
        <div class="tab_item item2" style="background-image: url({{ asset('storage/images/images/' . $images->get(4)->image) }})">
            <h3>{!! $texts->get(37)->text !!}</h3>
            <p>{!! $texts->get(38)->text !!}</p>
            <a class="js-popup btn" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="#" data-aos="zoom-in">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
        </div>
        <div class="tab_item item3" style="background-image: url({{ asset('storage/images/images/' . $images->get(5)->image) }})">
            <h3>{!! $texts->get(39)->text !!}</h3>
            <p>{!! $texts->get(40)->text !!}</p>
            <a class="js-popup btn" data-type="ЗАПИСАТЬСЯ НА ЗАНЯТИЕ" href="#" data-aos="zoom-in">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
        </div>
    </div>
</div>
