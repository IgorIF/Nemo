<h3>{!! $texts->get(66)->text !!}</h3>

<div class="phone1">
    <a href="tel:{{ $filialBranches->get(1)->phone }}" onclick="yaCounter45529422.reachGoal('kirovogradskaya'); return true;">{!! $filialBranches->get(1)->phone !!}</a>
    <address>
        <div>{!! $filialBranches->get(1)->address !!}</div>
        <div>(метро {!! $filialBranches->get(1)->metro !!})</div>
    </address>
</div>

<div class="phone2">
    <a href="tel:{{ $filialBranches->get(2)->phone }}" onclick="yaCounter45529422.reachGoal('vinokurova'); return true;">{!! $filialBranches->get(2)->phone !!}</a>
    <address>
        <div>{!! $filialBranches->get(2)->address !!}</div>
        <div>(метро {!! $filialBranches->get(2)->metro !!})</div>
    </address>
</div>

<div class="phone2">
    <a href="tel:{{ $filialBranches->get(3)->phone }}" onclick="yaCounter45529422.reachGoal('myachkovsky'); return true;">{!! $filialBranches->get(3)->phone !!}</a>
    <address>
        <div>{!! $filialBranches->get(3)->address !!}</div>
        <div>(метро {!! $filialBranches->get(3)->metro !!})</div>
    </address>
</div>

<div class="phone2">
    <a href="tel:{{ $filialBranches->get(4)->phone }}" onclick="yaCounter45529422.reachGoal('kamova'); return true;">{!! $filialBranches->get(4)->phone !!}</a>
    <address>
        <div>{!! $filialBranches->get(4)->address !!}</div>
        <div>(метро {!! $filialBranches->get(4)->metro !!})</div>
    </address>
</div>
<div class="phone2">
    <a href="tel:{{ $filialBranches->get(5)->phone }}">{!! $filialBranches->get(5)->phone !!}</a>
    <address>
        <div>{!! $filialBranches->get(5)->address !!}</div>
        <div>(метро {!! $filialBranches->get(5)->metro !!})</div>
    </address>
</div>


<button type="button" class="close" id="js-close-popup"></button>
