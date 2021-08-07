<div id="payment_popup" class="popup popup__form mfp-hide">
    <div class="popup-form__title">Запись на занятие</div>
    <form action="{{ route('sendmail') }}" method="POST">
        {{ csrf_field() }}


        <input class="input" type="text" name="filial-name" placeholder="Филиал" disabled>
        <input type="hidden" name="filial">
        <input class="input" type="text" name="pool-name" placeholder="Бассейн" disabled>
        <input type="hidden" name="pool">
        <input class="input" type="text" name="subscription-name" placeholder="Вид абонемента" disabled>
        <input type="hidden" name="subscription">
        <input class="input" type="text" name="name" placeholder="Ваше имя">
        <input class="input phone-input" name="phone" type="tel" placeholder="Номер телефона" required>
        <input type="hidden" name="price">
        <button type="submit" class="btn-orange">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
    </form>
    <div class="small">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c <a href="#politica" class="btn-popup">политикой конфиденциальности</a></div>
</div>
