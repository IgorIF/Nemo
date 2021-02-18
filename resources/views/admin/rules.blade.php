<h3 id="text_{{ $texts->get(63)->id }}" contenteditable="true">{!! $texts->get(63)->text !!}</h3>

<div class="all-rules">
    <div id="ruleCategory_{{ $ruleCategories[0]->id }}" class="rule1">
        <ul>
            @foreach($ruleCategories[0]->ruleItems as $rule)
                <div class="item-container" id="ruleItem_{{ $rule->id }}">
                    <div class="item-content-container">
                        <li>
                            <div class="item-marker-container">
                                <span id="number">{{ $loop->iteration }}</span>.
                            </div>
                            <div id="ruleItem_text" contenteditable="true">
                                {!! $rule->text !!}
                            </div>
                        </li>
                    </div>
                    <div class="item-delete-container">
                        <svg id="ruleItem_delete_btn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash itemDeleteBtn" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                        </svg>
                        <div id="deleteTooltip" class="delete-tooltip delete-rule-item" tabindex="1">
                            Удалить запись?
                            <a class="button--border">Да</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>

        <div class="item-add-container">
            <a id="ruleItem_add_btn" class="btn">Добавить пункт</a>
        </div>

    </div>

    <p id="text_{{ $texts->get(64)->id }}" contenteditable="true">{!! $texts->get(64)->text !!}</p>
    <div id="ruleCategory_{{ $ruleCategories[1]->id }}" class="rule2">
        <ul>
            @foreach($ruleCategories[1]->ruleItems as $rule)
                <div class="item-container" id="ruleItem_{{ $rule->id }}">
                    <div class="item-content-container">
                        <li>
                            <div class="item-marker-container">
                                -
                            </div>
                            <div id="ruleItem_text" contenteditable="true">
                                {!! $rule->text !!}
                            </div>
                        </li>
                    </div>
                    <div class="item-delete-container">
                        <svg id="ruleItem_delete_btn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash itemDeleteBtn" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                        </svg>
                        <div id="deleteTooltip" class="delete-tooltip delete-rule-item" tabindex="1">
                            Удалить запись?
                            <a class="button--border">Да</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>

        <div class="item-add-container">
            <a id="ruleItem_add_btn" class="btn">Добавить пункт</a>
        </div>
    </div>

    <p id="text_{{ $texts->get(65)->id }}" contenteditable="true">{!! $texts->get(65)->text !!}</p>
    <div id="ruleCategory_{{ $ruleCategories[2]->id }}" class="rule2">
        <ul>
            @foreach($ruleCategories[2]->ruleItems as $rule)
                <div class="item-container" id="ruleItem_{{ $rule->id }}">
                    <div class="item-content-container">
                        <li>
                            <div class="item-marker-container">
                                <span id="number">{{ $loop->iteration }}</span>.
                            </div>
                            <div id="ruleItem_text" contenteditable="true">
                                {!! $rule->text !!}
                            </div>
                        </li>
                    </div>
                    <div class="item-delete-container">
                        <svg id="ruleItem_delete_btn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash itemDeleteBtn" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                        </svg>
                        <div id="deleteTooltip" class="delete-tooltip delete-rule-item" tabindex="1">
                            Удалить запись?
                            <a class="button--border">Да</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>

        <div class="item-add-container">
            <a id="ruleItem_add_btn" class="btn">Добавить пункт</a>
        </div>
    </div>
</div>
<button type="button" class="close" id="js-close-popup"></button>
