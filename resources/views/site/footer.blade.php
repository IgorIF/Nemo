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
                        <a href="#"><img src="{{ asset('images/dist/icon/gpw.svg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('images/dist/icon/asw.svg') }}" alt=""></a>
                    </div>
                    <div class="footer__title">Есть что написать?</div>
                    <a href="mailto:aquanemo@yandex.ru" class="footer__email">aquanemo@yandex.ru</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 flex">
                <div class="copir">ООО "Акваклуб". ИНН: 7726432268 ОГРН: 118774650808 Юридический адрес: г. Москва, ул. Кировоградская 36 пом.XVIII тел. +7(977)680-02-61</div>
                <a href="{{ route('offer') }}" style="color: #FFFFFF">Публичная оферта</a>
                <div class="vacans">Приглашаем на работу в наш дружный коллектив <a href="#vacancies-popup" class="btn-white btn-popup">ВАКАНСИИ</a></div>
            </div>
        </div>
    </div>
</footer>
