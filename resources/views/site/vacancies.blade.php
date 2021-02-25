<h3>{!! $texts->get(62)->text !!}</h3>
<div class="popup5__body">
    <div class="popup5__text">{!! $texts->get(63)->text !!}</div>
    <div class="popup5__block">
        @foreach($vacancies as $vacancy)
            <div class="popup5__item">{!! $vacancy->text !!}</div>
        @endforeach
    </div>
    <div class="popup5__email">
        <span>{!! $texts->get(64)->text !!}</span>
        <a href="mailto:{{ $texts->get(65)->text }}">{!! $texts->get(65)->text !!}</a>
    </div>
</div>
<button type="button" class="close" id="js-close-popup"></button>
