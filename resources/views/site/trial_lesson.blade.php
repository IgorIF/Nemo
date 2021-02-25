<h3>{!! $texts->get(56)->text !!}</h3>

<form {{--class="main-form"--}} action="{{ route('sendmail') }}" method="POST">
    {{ csrf_field() }}
    <select name="select_pool" id="agency" required>
        <option value="0" disabled>Выберите бассейн</option>
        <option value="1" selected>ул. Кировоградская 36 (метро Пражская)</option>
        <option value="2">ул. Винокурова 24, к4 (метро - Академическая)</option>
        <option value="3">Мячковский бульвар 16, к1 (метро Марьино)</option>
        <option value="4">г. Люберцы, ул. Камова 11/5 (метро - Некрасовка)</option>
    </select>
    <input type="text" id="name1" name="user_name" placeholder="Ваше Имя" required>
    <input type="text" id="tel1" name="user_phone" placeholder="Телефон" required>

    <input class="hidden-form" type="hidden" name="user_type_btn" value="Аноним"><br>

    <button class="btn" type="submit" onclick="yaCounter45529422.reachGoal('zayavka'); return true;"><span>ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</span></button>
</form>
<button type="button" class="close" id="js-close-popup"></button>
