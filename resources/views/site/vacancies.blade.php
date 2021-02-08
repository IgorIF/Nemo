<h3>{!! $texts->get(68)->text !!}</h3>
<div class="popup5__body">
    <div class="popup5__text">{!! $texts->get(69)->text !!}</div>
    <div class="popup5__block">
        @foreach($vacancies as $vacancy)
            <div class="popup5__item">{!! $vacancy->text !!}</div>
        @endforeach
    </div>
    <div class="popup5__email">
        Резюме: <a href="mailto:aquanemo@yandex.ru">aquanemo@yandex.ru</a>
    </div>
</div>
<button type="button" class="close" id="js-close-popup"></button>
