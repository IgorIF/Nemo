<h2 class="title title_center addresses__title">Адреса филиалов</h2>
<div class="tabs addresses__tabs">
    <ul class="tabs-nav">
        <li class="active li-list">Списком</li>
        <li class="li-map">На карте</li>
    </ul>
    <div class="tabs-content addresses__list active">
        <h3 class="addresses-tab__title">Наши бассейны</h3>
        @foreach($filials as $filial)
            <div class="addresses__item filial-link {{ $loop->last? 'addresses__item_lc': '' }}">{{ $filial->address }} <span>({{ $filial->metro }})</span></div>
        @endforeach
        <button type="button" class="btn-orange addresses__btn btn-popup" data-mfp-src="#call_me">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
    </div>
    <div class="tabs-content">
        <div class="addresses__map">
            <script>
                setTimeout(function(){
                    var elem = document.createElement('script');
                    elem.type = 'text/javascript';
                    elem.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8fa378a25cb572e342a7898497907976aa9665b4a196a85d2358b0633385eade&amp;width=600&amp;height=450&amp;lang=ru_RU&amp;scroll=true';
                    document.getElementsByClassName('addresses__map')[0].appendChild(elem);
                }, 5000);
            </script>
            <button type="button" class="btn-orange addresses__btn addresses__btn_mobil btn-popup" data-mfp-src="#call_me">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
        </div>
    </div>
</div>
