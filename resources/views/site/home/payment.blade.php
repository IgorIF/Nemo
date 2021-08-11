<section class="payment" id="payment">
    <div class="container">
        <h2 class="title title_center payment__title" data-filials="{{ $filialsData }}">Стоимость занятий</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="payment__item">
                    <div class="payment__label">Выберите филиал:</div>
                    <select name="filial" class="select">
                        @foreach($filials as $filial)
                            <option {{ $loop->first ? 'disabled' : '' }} value="{{ $filial->alias }}">{{ $filial->address }} ({{ $filial->metro }})</option>
                            @if($loop->first)
                                <option selected value="{{ $filial->alias }}">{{ $filial->address }} ({{ $filial->metro }})</option>
                            @endif
                        @endforeach
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
                        @foreach($pools as $pool)
                            <label>
                                <input type="radio" name="pool" value="{{ $pool->id }}" {{ $loop->first ? 'checked' : '' }}><span>{{ $pool->name }}</span>
                            </label>
                        @endforeach
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
                        @foreach($subscriptions as $subscription)
                            <label>
                                <input type="radio" name="subscription" value="{{ $subscription->id }}" {{ $loop->first ? 'checked' : '' }}><span>{{ $subscription->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        @if($hasOnceNumbersOfLessons)
            <div class="row">
                @foreach($numbersOfLessons as $numberOfLessons)
                    @if($numberOfLessons->is_once)
                        <div class="col-lg-4">
                            <div class="payment__item">
                                @if($loop->first) <div class="payment__label">Разовые занятия:</div> @endif
                                <label class="payment-option">
                                    <input type="radio" name="number-of-lessons" {{ $loop->first ? 'checked' : '' }} value="{{ $numberOfLessons->id }}">
                                    <div class="payment-option__info">
                                        <header class="payment-option__header">
                                            {{ $numberOfLessons->name }}
                                            @if($numberOfLessons->discount != 0) <span class="payment-option__sale">СКИДКА -{{ $numberOfLessons->discount }}%</span> @endif
                                        </header>
                                        <div class="payment-option__price">
                                            <div class="payment-option__pr">980 <i>₽</i></div>
                                            @if($numberOfLessons->id == 1) <del>1 500 ₽</del> @endif
                                        </div>
                                        <footer class="payment-option__footer">
                                            <div class="payment-option__day">1 день</div>
                                            <div class="payment-option__time">30 мин</div>
                                        </footer>
                                    </div>
                                </label>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif

        @if($hasManyNumbersOfLessons)
            <div class="row">
                @foreach($numbersOfLessons as $numberOfLessons)
                    @if(!$numberOfLessons->is_once)
                        <div class="col-lg-4">
                            <div class="payment__item">
                                @if($loop->iteration == 3)
                                    <div class="payment__label">Абонементы:</div>
                                @endif
                                <label class="payment-option">
                                    <input type="radio" name="number-of-lessons" value="{{ $numberOfLessons->id }}">
                                    <div class="payment-option__info">
                                        <header class="payment-option__header">
                                            <span>Стандарт на</span><span class="orange" style="color: #FF1F0D;" id="numberOfLessons">{{ $numberOfLessons->name }}</span> занятий
                                        </header>
                                        <div class="payment-option__price">
                                            <div class="payment-option__pr">9 900 <i>₽</i></div>
                                        </div>
                                        <footer class="payment-option__footer">
                                            <div class="payment-option__day">1 месяц 14 дней</div>
                                            <div class="payment-option__time">30 мин</div>
                                        </footer>
                                    </div>
                                </label>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif

        <div class="row payment__bottom">
            <div class="col-md-6">
                <div class="all-price">Стоимость: <span>980 <i>₽</i></span></div>
            </div>
            <div class="col-md-6">
                <a href="#payment_popup" class="btn-orange payment__btn btn-popup">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</a>
            </div>
        </div>
    </div>
</section>
