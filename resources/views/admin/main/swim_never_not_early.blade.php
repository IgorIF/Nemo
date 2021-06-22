<div class="right" data-aos="fade-up">
    <label id="image" style="cursor: pointer">
        <img class="image_{{ $images->get(6)->id }}" src="{{ asset('storage/images/images/' . $images->get(6)->image) }}" alt="Детский акваклуб «Немо»" width="632" height="411">
        <input style="display: none" type="file" class="sr-only" id="image" name="image" accept="image/*">
    </label>
</div>

<div class="left">
    <h2 data-aos="fade-up" id="text_{{ $texts->get(36)->id }}" contenteditable="true">{!! $texts->get(36)->text !!}</h2>
    <p data-aos="fade-up" id="text_{{ $texts->get(37)->id }}" contenteditable="true">{!! $texts->get(37)->text !!}<span class="discount-sum"></span>
    </p>
    <a class="js-popup btn" data-type="ПРОБНОЕ ЗАНЯТИЕ" href="#" data-aos="fade-up">ПРОБНОЕ ЗАНЯТИЕ</a>
</div>
