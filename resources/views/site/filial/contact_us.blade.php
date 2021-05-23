<h3>{!! $texts->get(66)->text !!}</h3>

<div class="phone1">
    <a href="tel:{{ $filialBranch->phone }}" onclick="yaCounter45529422.reachGoal('{{ $filialBranch->alias }}'); return true;">{!! $filialBranch->phone !!}</a>
    <address>
        <div>{!! $filialBranch->address !!}</div>
        <div>(метро {!! $filialBranch->metro !!})</div>
    </address>
</div>

<button type="button" class="close" id="js-close-popup"></button>
