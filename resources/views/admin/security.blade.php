<h2 data-aos="fade-up" id="text_{{ $texts->get(46)->id }}" contenteditable="true">{!! $texts->get(46)->text !!}</h2>
<div class="right">
    <div class="tabs2" data-aos="fade-up">
        @foreach($securityCategories as $securityCategory)
            <span id="securityCategory_{{ $securityCategory->id }}" class="tab2">
                <picture>
                    <source srcset="{{ asset('images/' . $securityCategory->icon . '.svg') }}" type="image/svg+xml">
                    <img src="{{ asset('images/' . $securityCategory->icon . '.png') }}" alt="{{ $securityCategory->text }}" width="{{ $securityCategory->icon_width }}" height="61">
                </picture>
                <p id="securityCategory_text" contenteditable="true">{!! $securityCategory->text !!}</p>
            </span>
        @endforeach
    </div>

    <div class="tab_content2" data-aos="fade-up">

        @foreach($securityCategories as $securityCategory)
            <div class="tab_item2 item{{ $loop->iteration }}">
                <ul>
                    @foreach($securityCategory->securityItems as $securityItem)
                        <div id="securityItem_{{ $securityItem->id }}" >
                            <li id="securityItem_text" contenteditable="true">{!! $securityItem->text !!}</li>
                        </div>
                    @endforeach
                </ul>
                @if($securityCategory->id == 2)
                    <p id="text_{{ $texts->get(47)->id }}" contenteditable="true">{!! $texts->get(47)->text !!}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
