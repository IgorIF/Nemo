<h3>Свяжитесь с нами</h3>

<div class="phone1">
    <a id="filialBranch_phone_{{ $filialBranches->get(1)->id }}" href="tel:{{ $filialBranches->get(1)->phone }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;" contenteditable="true">{!! $filialBranches->get(1)->phone !!}</a>
    <address>
        <div id="filialBranch_address_{{ $filialBranches->get(1)->id }}" contenteditable="true">{!! $filialBranches->get(1)->address !!}</div>
        <div id="filialBranch_metro_{{ $filialBranches->get(1)->id }}" contenteditable="true">{!! $filialBranches->get(1)->metro !!}</div>
    </address>
</div>

<div class="phone2">
    <a id="filialBranch_phone_{{ $filialBranches->get(2)->id }}" href="tel:{{ $filialBranches->get(2)->phone }}" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;" contenteditable="true">{!! $filialBranches->get(2)->phone !!}</a>
    <address>
        <div id="filialBranch_address_{{ $filialBranches->get(2)->id }}" contenteditable="true">{!! $filialBranches->get(2)->address !!}</div>
        <div id="filialBranch_metro_{{ $filialBranches->get(2)->id }}" contenteditable="true">{!! $filialBranches->get(2)->metro !!}</div>
    </address>
</div>

<div class="phone2">
    <a id="filialBranch_phone_{{ $filialBranches->get(3)->id }}" href="tel:{{ $filialBranches->get(3)->phone }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;" contenteditable="true">{!! $filialBranches->get(3)->phone !!}</a>
    <address>
        <div id="filialBranch_address_{{ $filialBranches->get(3)->id }}" contenteditable="true">{!! $filialBranches->get(3)->address !!}</div>
        <div id="filialBranch_metro_{{ $filialBranches->get(3)->id }}" contenteditable="true">{!! $filialBranches->get(3)->metro !!}</div>
    </address>
</div>

<div class="phone2">
    <a id="filialBranch_phone_{{ $filialBranches->get(4)->id }}" href="tel:{{ $filialBranches->get(4)->phone }}" onclick="yaCounter45529422.reachGoal('kamova'); return true;" contenteditable="true">{!! $filialBranches->get(4)->phone !!}</a>
    <address>
        <div id="filialBranch_address_{{ $filialBranches->get(4)->id }}" contenteditable="true">{!! $filialBranches->get(4)->address !!}</div>
        <div id="filialBranch_metro_{{ $filialBranches->get(4)->id }}" contenteditable="true">{!! $filialBranches->get(4)->metro !!}</div>
    </address>
</div>
<div class="phone2">
    <a id="filialBranch_phone_{{ $filialBranches->get(5)->id }}" href="tel:{{ $filialBranches->get(5)->phone }}" contenteditable="true">{!! $filialBranches->get(5)->phone !!}</a>
    <address>
        <div id="filialBranch_address_{{ $filialBranches->get(5)->id }}" contenteditable="true">{!! $filialBranches->get(5)->address !!}</div>
        <div id="filialBranch_metro_{{ $filialBranches->get(5)->id }}" contenteditable="true">{!! $filialBranches->get(5)->metro !!}</div>
    </address>
</div>


<button type="button" class="close" id="js-close-popup"></button>
