<div class="right" data-aos="fade-up">
    <label style="cursor: pointer">
        <img id="image_{{ $images->get(6)->id }}" src="{{ asset('storage/images/images/' . $images->get(6)->image) }}" alt="Детский акваклуб «Немо»" width="632" height="411">
        <input style="display: none" type="file" class="sr-only" id="image" name="image" accept="image/*">
    </label>
</div>

<div class="left">
    <h2 data-aos="fade-up" id="text_{{ $texts->get(44)->id }}" contenteditable="true">{!! $texts->get(44)->text !!}</h2>
    <p data-aos="fade-up" id="text_{{ $texts->get(45)->id }}" contenteditable="true">{!! $texts->get(45)->text !!}<span class="discount-sum"></span>
    </p>
    <a class="js-popup btn" data-type="ПРОБНОЕ ЗАНЯТИЕ" href="#" data-aos="fade-up">ПРОБНОЕ ЗАНЯТИЕ</a>
</div>
