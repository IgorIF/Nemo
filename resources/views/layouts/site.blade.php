<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Акваклуб Немо</title>
    <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi ipsam, cum, pariatur">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css?v4') }}">
</head>

<body>

@yield('header')

<section class="offer">
    @yield('offer')
</section>

<section class="about">
    <div class="container">
        @yield('about')
    </div>
</section>

<section class="gallery">
    <div class="container">
        @yield('gallery')
    </div>
</section>

<section class="coaches">
    <div class="container">
        @yield('trainers')
    </div>
</section>

{{--<section class="payment">
    <div class="container">
        @yield('prices')
    </div>
</section>--}}

<section class="sale">
    <div class="container">
        @yield('promotions')
    </div>
</section>

<section class="what">
    <div class="container">
        @yield('firstLesson')
    </div>
</section>

<section class="water-treatment">
    <div class="container">
        @yield('waterTreatment')
    </div>
</section>

<section class="reviews">
    <div class="container">
        @yield('reviews')
    </div>
</section>

<section class="questions">
    <div class="container">
        @yield('questions')
    </div>
</section>

<section class="addresses">
    <div class="container">
        @yield('addresses')
    </div>
</section>

<footer class="footer">
    <div class="container">
        @yield('footer')
    </div>
</footer>

<a href="https://api.whatsapp.com/send?phone=74951206711" class="whats-app" target="_blank">whats-app</a>

<div id="call_me" class="popup popup__form mfp-hide">
    <div class="popup-form__title">Запись на занятие</div>
    <form>
        <select name="filial" class="select" required>
            <option disabled value="1" >Выберите филиал</option>
            <option selected value="1" >ул. Кировоградская 36 (Пражская)</option>
            <option value="2">ул. Винокурова 24, к4 (Академическая)</option>
            <option value="3">Мячковский бульвар 16, к1 (Марьино)</option>
            <option value="4">ул. Камова 11/5 (Некрасовка)</option>
            <option value="5">ул. Петрозаводская 11, к2 (Ховрино)</option>
        </select>
        <input class="input" type="text" placeholder="Ваше имя">
        <input class="input phone-input" type="tel" placeholder="Номер телефона" required>
        <button type="submit" class="btn-orange">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
    </form>
    <div class="small">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c <a href="#politica" class="btn-popup">политикой конфиденциальности</a></div>
</div>

<div id="politica" class="popup mfp-hide politica" data-simplebar>
    <div class="politica__title">Политика конфиденциальности</div>
    <p>Я ознакомлен с тем, что в соответствии с требованиями Федерального закона от 27 июля 2006 г. №152-ФЗ «О персональных данных», включая положения пунктов 2-4 части 1 статьи 6 указанного Федерального закона, будет осуществляться обработка предоставляемых мною персональных данных, в том числе фамилии, имени, отчества; даты рождения; адреса проживания; сведений о номере основного документа, удостоверяющего личность, сведений о дате выдачи указанного документа и выдавшем его органе; номерах телефонов; адресах электронной почты (е-mail), а так же иных предоставляемых мною данных.</p>
    <p>Одновременно подтверждаю свое согласие на обработку и осуществление организацией  ООО «Акваклуб» следующих действий с моими персональными данными: сбор, запись, систематизацию, накопление, хранение, извлечение, уточнение, обновление, изменение, использование, обезличивание, распространение (в том числе передачу третьим лицам), блокирование, уничтожение. Настоящее согласие не устанавливает предельных сроков обработки персональных данных.</p>
    <p>Персональные данные предоставляются мною и обрабатываются для обеспечения моей возможности использования услуг и сервисов ООО «Акваклуб».</p>
    <p>Настоящим также подтверждаю свое согласие на получение информации о предоставлении мне информации о деятельности  компании , проводимых акциях и мероприятиях.  Указанная информация может быть предоставлена мне с применением неголосовых коммуникаций (путем рассылки по сети подвижной радиотелефонной связи коротких текстовых sms-сообщений, рассылки ussd-сообщений и др.), посредством направления мне сведений по информационно-телекоммуникационной сети «Интернет» на предоставленные мной номер телефона и (или) адрес электронной почты.</p>
</div>

<div id="pay-popup" class="popup mfp-hide pay-popup" data-simplebar>
    <div class="pay-popup__title">Процесс оплаты и возврата по картам</div>
    <h4>Оплата</h4>
    <ul>
        <li>Для выбора оплаты пакетов услуг с помощью банковской карты на соответствующей странице необходимо нажать кнопку «Оплатить» или «Оплатить онлайн».</li>
        <li>Оплата происходит через ПАО СБЕРБАНК с использованием банковских карт следующих платёжных систем:</li>
    </ul>
    <p><img src="{{ asset('images/dist/icon/p1.png') }}" alt=""> МИР</p>
    <p><img src="{{ asset('images/dist/icon/p2.png') }}" alt=""> VISA International</p>
    <p><img src="{{ asset('images/dist/icon/p3.png') }}" alt=""> Mastercard Worldwide</p>
    <p><img src="{{ asset('images/dist/icon/p4.png') }}" alt=""> JCB</p>
    <ul>
        <li>Для оплаты (ввода реквизитов Вашей карты) Вы будете перенаправлены на платёжный шлюз ПАО СБЕРБАНК.</li>
        <li>Соединение с платёжным шлюзом и передача информации осуществляется в защищённом режиме с использованием протокола шифрования SSL.</li>
        <li>В случае если Ваш банк поддерживает технологию безопасного проведения интернет-платежей Verified By Visa, MasterCard SecureCode, MIR Accept, J-Secure, для проведения платежа также может потребоваться ввод специального пароля.</li>
        <li>Настоящий сайт поддерживает 256-битное шифрование.</li>
        <li>Конфиденциальность сообщаемой персональной информации обеспечивается ПАО СБЕРБАНК.</li>
        <li>Введённая информация не будет предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ.</li>
        <li>Проведение платежей по банковским картам осуществляется в строгом соответствии с требованиями платёжных систем МИР, Visa Int., MasterCard Europe Sprl, JCB.</li>
    </ul>
    <h4>Возврат</h4>
    <ul>
        <li>Возврат средств инициируется личным обращением на e-mail: <b>aquanemo@yandex.ru</b> или по телефону: <b>+7(495)120-67-11</b>.</li>
        <li>Возврату подлежат только неактивированные абонементы. Оплатченые разовые и/или пробные занятия возврату не подлежат.</li>
        <li>При возникновении проблем по оплате заказа картой, через сайт, необходимо обратиться к нам, по номеру +7(495)120-67-11, или написать на почту: aquanemo@yandex.ru, мы постараемся решить вашу проблему.</li>
        <li>В ином случае, обратитесь в службу поддержки вашего банка (обычно данная служба является круглосуточной), номер телефона службы поддержки указан на обратной стороне вашей карты.</li>
    </ul>
    <h4>Возможные причины проблем, при оплате по карте:</h4>
    <ol>
        <li>Перед оплатой проверьте наличие денежных средств на вашей карте;</li>
        <li>Проверьте правильность ввода номера карты, срока действия, CVV/CVC кода;</li>
        <li>Ограничение банка на объем оплаты в течении дня;</li>
        <li>Ограничение банка на проведение оплаты через интернет.</li>
    </ol>
</div>


<script src="js/app.min.js?v3"></script>
<script src="js/vendor/jquery.maskedinput.js?v3"></script>

</body>
</html>
