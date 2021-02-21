<h2 data-aos="fade-up">{!! $texts->get(46)->text !!}</h2>
<div class="right">
    <div class="tabs2" data-aos="fade-up">
        @foreach($securityCategories as $securityCategory)
            <span class="tab2">
                <picture>
                    <source srcset="{{ asset('images/' . $securityCategory->icon . '.svg') }}" type="image/svg+xml">
                    <img src="{{ asset('images/' . $securityCategory->icon . '.png') }}" alt="{{ $securityCategory->text }}" width="{{ $securityCategory->icon_width }}" height="{{ $securityCategory->icon_height }}">
                </picture>
                <p>{!! $securityCategory->text !!}</p>
            </span>
        @endforeach
    </div>

    <div class="tab_content2" data-aos="fade-up">

        @foreach($securityCategories as $securityCategory)
            <div class="tab_item2 item{{ $loop->iteration }}" style="background-image: url({{ asset('storage/images/images/' . $images->get(6 + $loop->iteration)->image) }})">
                <ul>
                    @foreach($securityCategory->securityItems as $securityItem)
                        <li>{!! $securityItem->text !!}</li>
                    @endforeach
                </ul>
                @if($securityCategory->id == 2)
                    <p>{!! $texts->get(47)->text !!}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
