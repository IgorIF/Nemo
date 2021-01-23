<h3 id="text_{{ $texts->get(63)->id }}" contenteditable="true">{!! $texts->get(63)->text !!}</h3>

<div class="all-rules">
    <div class="rule1">
        <ul>
            @foreach($ruleCategories[0]->ruleItems as $rule)
                <li>{!! $rule->text !!}</li>
            @endforeach
        </ul>
    </div>

    <p id="text_{{ $texts->get(64)->id }}" contenteditable="true">{!! $texts->get(64)->text !!}</p>
    <div class="rule2">
        <ul>
            @foreach($ruleCategories[1]->ruleItems as $rule)
                <li>{!! $rule->text !!}</li>
            @endforeach
        </ul>
    </div>

    <p id="text_{{ $texts->get(65)->id }}" contenteditable="true">{!! $texts->get(65)->text !!}</p>
    <div class="rule2">
        <ul>
            @foreach($ruleCategories[2]->ruleItems as $rule)
                <li>{!! $rule->text !!}</li>
            @endforeach
        </ul>
    </div>
</div>
<button type="button" class="close" id="js-close-popup"></button>
