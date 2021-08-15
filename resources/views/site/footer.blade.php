<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-mobil__title">Контакты</div>
                <div class="footer__logo"><img src="{{ asset('images/dist/logo-f.svg') }}" alt=""></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="footer__item">
                    <div class="footer__phone">
                        <a href="tel:+74951206711" class="phone">+7(495)120-67-11</a>
                        <span>Единый номер</span>
                    </div>
                    <button type="button" class="btn-orange footer__btn btn-popup" data-mfp-src="#call_me">ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</button>
                </div>
            </div>
            <div class="col-md-8 footer__group">
                <div class="footer__item">
                    <div class="footer__title">График работы</div>
                    <div class="footer__time">09:00 - 21:00</div>
                    <span>Без выходных</span>
                </div>
                <div class="footer__item">
                    <div class="footer__title">Присоединяйтесь</div>
                    <div class="soc">
                        <a href="https://www.instagram.com/aquaclubnemo/" class="soc-link" target="_blank"><img src="{{ asset('images/dist/icon/instagram.svg') }}" alt=""></a>
                        <a href="https://www.facebook.com/aquaclubnemo" class="soc-link" target="_blank"><img src="{{ asset('images/dist/icon/fa.svg') }}" alt=""></a>
                        <a href="https://vk.com/aquaclubnemo" class="soc-link" target="_blank"><img src="{{ asset('images/dist/icon/vk.svg') }}" alt=""></a>
                    </div>
                </div>
                <div class="footer__item">
                    <div class="footer__title">Наше приложение</div>
                    <div class="application">
                        <a href="#" onclick="(function (e){e.preventDefault();})(event)"><img src="{{ asset('images/dist/icon/gpw.svg') }}" alt="" style="opacity: 0.1"></a>
                        <a href="https://apps.apple.com/ru/app/%D0%B0%D0%BA%D0%B2%D0%B0%D0%BA%D0%BB%D1%83%D0%B1-nemo/id1579157798"><img src="{{ asset('images/dist/icon/asw.svg') }}" alt=""></a>
                    </div>
                    <div class="footer__title">Есть что написать?</div>
                    <a href="mailto:aquanemo@yandex.ru" class="footer__email">aquanemo@yandex.ru</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 flex">
                <div class="copir">ООО "Акваклуб". ИНН: 7726432268 ОГРН: 118774650808<br />
                    Юридический адрес: г. Москва, ул. Кировоградская 36 пом.XVIII тел. +7(495)120-67-11</div>
                <a href="{{ route('offer') }}" style="color: #FFFFFF; text-decoration: underline; padding-bottom: 16px">Публичная оферта</a>
                <div class="vacans">Приглашаем на работу в наш дружный коллектив <a href="#vacancies-popup" class="btn-white btn-popup">ВАКАНСИИ</a></div>
            </div>
        </div>
    </div>
</footer>
