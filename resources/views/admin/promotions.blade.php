<h2 id="text_{{ $texts->get(67)->id }}" contenteditable="true" data-aos="fade-up" class="aos-init aos-animate">{!! $texts->get(67)->text !!}</h2>

<div id="promotions_container" class="akcii-new-block__wrapper">
    @foreach($promotions as $promotion)
        <div id="promotion_{{ $promotion->id }}" class="akcii-new-block__item" data-aos="fade-up" style="background-image: url({{ asset('storage/images/promotions/' . $promotion->image) }})">
            <label id="promotion_image" data-toggle="tooltip" title="Изменить фон">
                <input style="display: none" type="file" class="sr-only" id="image" name="image" accept="image/*">
            </label>
            <div class="promotion-delete-container">
                <svg id="promotion_delete_btn" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash promotionDeleteBtn" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                </svg>
                <div id="deleteTooltip" class="delete-tooltip delete-promotion" tabindex="1">
                    Удалить акцию?
                    <a class="button--border">Да</a>
                </div>
            </div>
            <div id="promotion_name" contenteditable="true" class="akcii-new-block__item__title">{!! $promotion->name !!}</div>
            <div class="akcii-new-block__sale"><span>-<span id="promotion_percent" contenteditable="true" style="display: unset">{!! $promotion->percent !!}</span>%</span> Скидка</div>
        </div>
    @endforeach
</div>

<div style="text-align: center; height: 100px" data-aos="fade-up">
    <a id="promotion_add_btn" class="btn" style="display: inline-block; padding: 20px 30px">Добавить акцию</a>
</div>
