<h2 data-aos="fade-up" class="aos-init aos-animate">{!! $texts->get(67)->text !!}</h2>

<div class="akcii-new-block__wrapper">
    @foreach($promotions as $promotion)
        <div class="akcii-new-block__item" data-aos="fade-up" style="background-image: url({{ asset('storage/images/promotions/' . $promotion->image) }})">
            <div class="akcii-new-block__item__title">{!! $promotion->name !!}</div>
            <div class="akcii-new-block__sale"><span>-<span style="display: unset">{!! $promotion->percent !!}</span>%</span> Скидка</div>
        </div>
    @endforeach
</div>
