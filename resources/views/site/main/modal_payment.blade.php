<div id="payment_popup" class="popup popup__form mfp-hide">
    <div class="popup-form__title">Запись на занятие</div>
    <form action="{{ route('sendmail') }}" method="POST">
        {{ csrf_field() }}


        <select name="filial" class="select" required>
            <option value="1" >Выберите филиал</option>
            @foreach($filials as $filial)
                <option value="{{ $filial->alias }}">{{ $filial->address }} ({{ $filial->metro }})</option>
            @endforeach
        </select>
        <input class="input" type="text" name="name" placeholder="Ваше имя">
        <input class="input phone-input" name="phone" type="tel" placeholder="Номер телефона" required>
        <input type="hidden" name="pool">
        <input type="hidden" name="subscription">
        <input type="hidden" name="price">
        <button type="submit" class="btn-orange">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
    </form>
    <div class="small">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c <a href="#politica" class="btn-popup">политикой конфиденциальности</a></div>
</div>
