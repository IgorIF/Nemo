<h2 data-aos="fade-up" id="text_{{ $texts->get(46)->id }}" contenteditable="true">{!! $texts->get(46)->text !!}</h2>
<div class="right">
    <div class="tabs2" data-aos="fade-up">
        @foreach($securityCategories as $securityCategory)
            <span id="securityCategory_{{ $securityCategory->id }}" class="tab2">
                <picture>
                    <source srcset="{{ asset('images/' . $securityCategory->icon . '.svg') }}" type="image/svg+xml">
                    <img src="{{ asset('images/' . $securityCategory->icon . '.png') }}" alt="{{ $securityCategory->text }}" width="{{ $securityCategory->icon_width }}" height="{{ $securityCategory->icon_height }}">
                </picture>
                <p id="securityCategory_text" contenteditable="true">{!! $securityCategory->text !!}</p>
            </span>
        @endforeach
    </div>

    <div class="tab_content2" data-aos="fade-up">

        @foreach($securityCategories as $securityCategory)
            <div id="securityCategory_{{ $securityCategory->id }}" class="tab_item2 item{{ $loop->iteration }}">
                <ul>
                    @foreach($securityCategory->securityItems as $securityItem)
                        <div id="securityItem_{{ $securityItem->id }}" >
                            <li>
                                <span id="securityItem_text" contenteditable="true">{!! $securityItem->text !!}</span>
                                <svg style="float: right" id="securityItem_delete_btn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                </svg>
                            </li>
                        </div>
                    @endforeach
                </ul>
                @if($securityCategory->id == 2)
                    <p id="text_{{ $texts->get(47)->id }}" contenteditable="true">{!! $texts->get(47)->text !!}</p>
                @endif

                <div style="max-width: 90%; width: 100%; margin: auto; height: 100px">
                    <a id="securityItem_add_btn" class="btn" style="padding: 20px 30px; float: right; box-shadow: none">Добавить пункт</a>
                </div>

            </div>
        @endforeach
    </div>
</div>
