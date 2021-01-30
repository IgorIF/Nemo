<h3 id="text_{{ $texts->get(68)->id }}" contenteditable="true">{!! $texts->get(68)->text !!}</h3>

<div class="popup5__body">
    <div class="popup5__text" id="text_{{ $texts->get(69)->id }}" contenteditable="true">{!! $texts->get(69)->text !!}</div>
    <div class="popup5__block">
        @foreach($vacancies as $vacancy)
            <div class="popup5__item">{!! $vacancy->text !!}</div>
        @endforeach
    </div>
    <div class="popup5__email">
        <span id="text_{{ $texts->get(70)->id }}" contenteditable="true">{!! $texts->get(70)->text !!}</span>
        <a href="mailto:{{ $texts->get(71)->text }}" id="text_{{ $texts->get(71)->id }}" contenteditable="true">{!! $texts->get(71)->text !!}</a>
    </div>
</div>
<button type="button" class="close" id="js-close-popup"></button>
