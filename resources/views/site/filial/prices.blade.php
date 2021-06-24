<h2 data-aos="fade-up">{!! $texts->get(35)->text !!}</h2>
<p data-aos="fade-up" style="color: red">{!! $texts->get(68)->text !!}</p>

<input type="hidden" name="calculatorDescriptions" data-descriptions="{{ $calculatorDescriptions }}">

@if(!empty($filialBranch->promotion_prices))

    <form class="calculator_{{ $filialBranch->id }}" id="{{ $filialBranch->alias }}" data-prices="{{ $filialBranch->promotion_prices }}">
        <div class="prices-block" data-aos="fade-up">
            <div class="prices-item prices-item-1" data-aos="fade-up">
                <div class="top">
                    <div class="title">{!! $filialBranch->address !!}</div>
                    <p>(метро {!! $filialBranch->metro !!})</p>
                </div>

                <div class="content" style="display: block">
                    <div class="content__wrapper">

                        <div class="section" id="quantity">
                            <div class="subtitle">Выберите количестово занятий:</div>
                            <div class="flex-row">
                                <div class="item-radio">
                                    <input type="radio" name="quantity" value="trial" checked="checked"><span class="width-two">Пробное</span>
                                </div>
                                <div class="item-radio">
                                    <input type="radio" name="quantity" value="oneoff"><span class="width-two">Разовое</span>
                                </div>
                                <div class="item-radio">
                                    <input type="radio" name="quantity" value="4"><span>4</span>
                                </div>
                                <div class="item-radio">
                                    <input type="radio" name="quantity" value="8"><span>8</span>
                                </div>
                                <div class="item-radio">
                                    <input type="radio" name="quantity" value="12"><span>12</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="note">
                                    <span id="calculatorDescription_title" class="medium"></span>
                                    <span id="calculatorDescription_body"></span>
                                </p>
                            </div>
                        </div>

                        <div class="list-hidden">
                            <div class="flex-row">

                                <div class="section" id="swimming_pool">
                                    <div class="subtitle">Выберите бассейн:</div>
                                    <div class="flex-row">
                                        <div class="item-radio">
                                            <input type="radio" name="swimming_pool" value="small_pool" checked="checked"><span class="width-two">Маленький</span>
                                        </div>
                                        <div class="item-radio">
                                            <input type="radio" name="swimming_pool" value="large_pool"><span class="width-two">Большой</span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p class="note">
                                            <span id="calculatorDescription_title" class="medium"></span>
                                            <span id="calculatorDescription_body"></span>
                                        </p>
                                    </div>
                                </div>

                                <div class="section" id="type_of_subscription">
                                    <div class="subtitle">Выберите вид абонемента:</div>
                                    <div class="flex-row">
                                        <div class="item-radio">
                                            <input type="radio" name="type_of_subscription" value="standard" checked="checked"><span class="width-two">Стандарт</span>
                                        </div>
                                        <div class="item-radio">
                                            <input type="radio" name="type_of_subscription" value="loyal"><span class="width-two">Лояльный</span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p class="note">
                                            <span id="calculatorDescription_title" class="medium"></span>
                                            <span id="calculatorDescription_body"></span>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="price-row">
                            <p>Стоимость:</p>
                            <div class="new-price"><span></span> ₽</div>
                            <div class="old-price"><span></span> ₽</div>
                        </div>

                    </div>

                    <div class="buttons-row">
                        <a href="" class="bt-1" target="_blank">Записаться</a>
                        <a href="" class="bt-2" onclick="(function(e){e.preventDefault();})(event)">Оплатить онлайн</a>
                    </div>

                </div>
            </div>
        </div>
    </form>

@endif
