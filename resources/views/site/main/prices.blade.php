<h2 class="title title_center payment__title">{{ $texts->get(10)->text }}</h2>
<div class="row">
    <div class="col-lg-4">
        <div class="payment__item">
            <div class="payment__label">Выберите филиал:</div>
            <select name="filial" class="select">
                <option disabled value="1" >ул. Кировоградская 36 (Пражская)</option>
                <option selected value="1" >ул. Кировоградская 36 (Пражская)</option>
                <option value="2">ул. Винокурова 24, к4 (Академическая)</option>
                <option value="3">Мячковский бульвар 16, к1 (Марьино)</option>
                <option value="4">ул. Камова 11/5 (Некрасовка)</option>
                <option value="5">ул. Петрозаводская 11, к2 (Ховрино)</option>
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="payment__item">
            <div class="payment__label">
                Бассейн:
                <div class="payment__i info">
                    <div class="info__i">i</div>
                    <div class="info__text">
                        <div class="info__title">Бассейны</div>
                        <b>Малая чаша:</b>
                        <div class="info__item">
                            <span>3х3м</span>
                            Круглый каркасный бассейн, диаметром - 3м, глубиной - 1,2м
                        </div>
                        <b>Большая чаша:</b>
                        <div class="info__item">
                            <span>6х3х1,2м</span>
                            Прямоугольный бассейн, размерами: длина и ширина - 6х3м, глубина - 1,2м.
                        </div>
                    </div>
                </div>
            </div>
            <div class="payment-group">
                <label>
                    <input type="radio" name="basin"><span>Малая чаша</span>
                </label>
                <label>
                    <input type="radio" name="basin" checked><span>Большая чаша</span>
                </label>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="payment__item">
            <div class="payment__label">
                Вид абонемента:
                <div class="payment__i info">
                    <div class="info__i">i</div>
                    <div class="info__text">
                        <div class="info__title">Виды абонементов</div>
                        <b>Абонемент «Стандарт»</b>
                        <ul class="info__list">
                            <li>Предусматривает отмену занятия до 18.00 предыдущего дня;</li>
                            <li>Срок действия абонемента: 4 недели + 2 недели заморозки;</li>
                            <li>Уведомление о смене тренера не предусмотрено;</li>
                        </ul>
                        <b>Абонемент «Лояльный»</b>
                        <ul class="info__list">
                            <li>Возможность отменять занятие день в день без потери занятия</li>
                            <li>Позволяет получать уведомление о смене тренера</li>
                            <li>Срок действия абонемента: 4 недели + 2 недели заморозки.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="payment-group">
                <label>
                    <input type="radio" name="subscription"><span>Малая чаша</span>
                </label>
                <label>
                    <input type="radio" name="subscription" checked><span>Лояльный</span>
                </label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-6">
        <div class="payment__item">
            <div class="payment__label">Разовые занятия:</div>
            <label class="payment-option">
                <input type="radio" name="one-time" checked>
                <div class="payment-option__info">
                    <header class="payment-option__header">
                        Пробное занятие
                        <span class="payment-option__sale">СКИДКА -30%</span>
                    </header>
                    <div class="payment-option__price">
                        <div class="payment-option__pr">980 <i>₽</i></div>
                        <del>1 500 ₽</del>
                    </div>
                    <footer class="payment-option__footer">
                        <div class="payment-option__day">1 день</div>
                        <div class="payment-option__time">30 мин</div>
                    </footer>
                </div>
            </label>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <label class="payment-option">
            <input type="radio" name="one-time">
            <div class="payment-option__info">
                <header class="payment-option__header">
                    Разовое занятие
                </header>
                <div class="payment-option__price">
                    <div class="payment-option__pr">1 500 <i>₽</i></div>
                </div>
                <footer class="payment-option__footer">
                    <div class="payment-option__day">1 день</div>
                    <div class="payment-option__time">30 мин</div>
                </footer>
            </div>
        </label>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="payment__item">
            <div class="payment__label">Абонементы:</div>
            <label class="payment-option">
                <input type="radio" name="one-time">
                <div class="payment-option__info">
                    <header class="payment-option__header">
                        Стандарт на <span class="orange" style="color: #FF1F0D;">4</span> занятий
                    </header>
                    <div class="payment-option__price">
                        <div class="payment-option__pr">9 900 <i>₽</i></div>
                        <del>1 100 ₽/занятие</del>
                    </div>
                    <footer class="payment-option__footer">
                        <div class="payment-option__day">1 месяц 14 дней</div>
                        <div class="payment-option__time">30 мин</div>
                    </footer>
                </div>
            </label>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="payment__item">
            <label class="payment-option">
                <input type="radio" name="one-time">
                <div class="payment-option__info">
                    <header class="payment-option__header">
                        Стандарт на <span class="orange" style="color: #FF1F0D;">8</span> занятия
                    </header>
                    <div class="payment-option__price">
                        <div class="payment-option__pr">9 900 <i>₽</i></div>
                        <del>1 100 ₽/занятие</del>
                    </div>
                    <footer class="payment-option__footer">
                        <div class="payment-option__day">1 месяц 14 дней</div>
                        <div class="payment-option__time">30 мин</div>
                    </footer>
                </div>
            </label>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="payment__item">
            <label class="payment-option">
                <input type="radio" name="one-time">
                <div class="payment-option__info">
                    <header class="payment-option__header">
                        Стандарт на <span class="orange" style="color: #FF1F0D;">12</span> занятия
                    </header>
                    <div class="payment-option__price">
                        <div class="payment-option__pr">9 900 <i>₽</i></div>
                        <del>1 100 ₽/занятие</del>
                    </div>
                    <footer class="payment-option__footer">
                        <div class="payment-option__day">1 месяц 14 дней</div>
                        <div class="payment-option__time">30 мин</div>
                    </footer>
                </div>
            </label>
        </div>
    </div>
</div>

<div class="row payment__bottom">
    <div class="col-md-6">
        <div class="all-price">Стоимость: <span>980 <i>₽</i></span></div>
    </div>
    <div class="col-md-6">
        <a href="#" class="btn-orange payment__btn">ОПЛАТИТЬ И ЗАПИСАТЬСЯ</a>
        <a href="#pay-popup" class="btn-popup">Процесс оплаты и возврата по картам</a>
    </div>
</div>












{{--
<h2 data-aos="fade-up">{!! $texts->get(35)->text !!}</h2>
<p><a href="#" id="cardPaymentProcessBtn" style="color: #ff680d; border-bottom: 1px dashed #ff680d" data-aos="fade-up">Процесс оплаты и возврата по картам</a></p>

<input type="hidden" name="calculatorDescriptions" data-descriptions="{{ $calculatorDescriptions }}">

@foreach($filials as $filial)
    @if(!empty($filial->prices))

        <form class="calculator_{{ $filial->id }}" id="{{ $filial->alias }}" data-prices="{{ $filial->prices }}">
            <div class="prices-block" @if($loop->iteration > 1) data-aos="fade-up" @endif>
                <div class="prices-item prices-item-{{ $loop->iteration }}" @if($loop->iteration == 1) data-aos="fade-up" @endif>
                    <div class="top">
                        <div class="title">{!! $filial->address !!}</div>
                        <p>(метро {!! $filial->metro !!})</p>
                    </div>

                    <div class="content">
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
                            <a href="" class="bt-2" target="_blank">Оплатить онлайн</a>
                        </div>

                    </div>
                </div>
            </div>
        </form>

    @endif
@endforeach
--}}
