let descriptions = {
    "quantity": {
        "trial": '<span class=\"medium\">Пробное занятие</span> предусмотрено для всех новых посетителей нашего акваклуба. Длительность занятия составляет: 30 минут. Проходит индивидуально с тренером.',
        "oneoff": '<span class=\"medium\">Разовое занятие</span> предусмотрено для тех, кто уже посещал занятия. Отмена и перенос занятия до 18:00 предыдущего дня. Уведомление о смене тренера не предусмотрено',
        "4": '<span class=\"medium\">Абонемент на 4 занятия</span> предусматривает 1 занятие в неделю.',
        "8": '<span class=\"medium\">Абонемент на 8 занятий</span> предусматривает 2 занятия в неделю.',
        "12": '<span class=\"medium\">Абонемент на 12 занятий</span> предусматривает 3 занятия в неделю.'
    },
    "swimming_pool": {
        "small_pool": '<span class=\"medium\">Маленький бассейн </span> предназначен для индивидуальных занятий. Представляет собой круглый каркасный бассейн, диаметром - 3м, глубиной - 1,2м.',
        "large_pool": '<span class=\"medium\">Большой бассейн</span> предназначен для групповых и индивидуальных занятий. Представляет собой прямоугольный бассейн, размерами: длина и ширина - 6х3м, глубина - 1,2м.'
    },
    "type_of_subscription": {
        "standard": '<span class=\"medium\">Абонемент “Стандарт”</span> предусматривает отмену занятия до 18.00 предыдущего дня. Срок действия абонемента: 4 недели + 2 недели заморозки. Уведомление о смене тренера не предусмотрено.',
        "loyal": '<span class=\"medium\">Абонемент “Лояльный”</span> позволяет получать уведомление о смене тренера и отменять занятие день в день без потери занятия. Срок действия абонемента: 4 недели + 2 недели заморозки.'
    }
};

$(document).ready(function () {

    $('form[class="calculator"]').each(function (i, e) {
        let prices = $(e).data('prices');
        let oldPrice = getOldPrice(prices);

        initDescriptions(e);
        initCalculator(e, prices, oldPrice);

        $(e).find('input').click(function () {
            initDescriptions(e);
            initCalculator(e, prices, oldPrice);
        });

        $(e).find('')
    });

});

function initCalculator (filial, prices, oldPrice) {
    let quantity = $(filial).find('div[id="quantity"]');
    let swimmingPool = $(filial).find('div[id="swimming_pool"]');
    let typeOfSubscription = $(filial).find('div[id="type_of_subscription"]');

    let quantityVal = $(quantity).find('input:checked').val();
    let swimmingPoolVal = $(swimmingPool).find('input:checked').val();
    let typeOfSubscriptionVal = $(typeOfSubscription).find('input:checked').val();

    let price = prices[quantityVal];

    if (Number.isInteger(price)) {
        $(swimmingPool).hide();
        $(typeOfSubscription).hide();
        showPrices(filial, price, oldPrice);
        fillLinks(filial, price);
    } else {
        $(swimmingPool).css('max-width', '303px').css('width', '49%');
        $(typeOfSubscription).css('max-width', '303px').css('width', '49%');
        $(swimmingPool).show();
        $(typeOfSubscription).show();

        price = prices[quantityVal][swimmingPoolVal];

        if (Number.isInteger(price)) {
            $(swimmingPool).css('max-width', 'unset').css('width', '100%');
            $(typeOfSubscription).hide();
            showPrices(filial, price, oldPrice);
            fillLinks(filial, price);
        } else {
            price = prices[quantityVal][typeOfSubscriptionVal];

            if (Number.isInteger(price)) {
                $(typeOfSubscription).css('max-width', 'unset').css('width', '100%');
                $(swimmingPool).hide();
                showPrices(filial, price, oldPrice);
                fillLinks(filial, price);
            } else {
                price = prices[quantityVal][swimmingPoolVal][typeOfSubscriptionVal];

                if (Number.isInteger(price)) {
                    showPrices(filial, price, oldPrice);
                    fillLinks(filial, price);
                }
            }
        }
    }
}

function initDescriptions (filial) {
    let inputsChecked = $(filial).find('input:checked');

    $(inputsChecked).each(function (i, e) {
        let descriptionContainer = $(e).parents('div[class="section"]').find('p[class="note"]');
        $(descriptionContainer).html(descriptions[$(e).attr('name')][$(e).attr('value')]);
    });

}

function showPrices(filial, newPrice, oldPrice) {
    let priceContainer = $(filial).find('div[class="price-row"]');
    let oldPriceContainer = $(priceContainer).find('div[class="old-price"]');
    oldPriceContainer.find('span').text(oldPrice);
    $(priceContainer).find('div[class="new-price"]').find('span').text(newPrice);
    if ($(filial).find('input[value="trial"]').is(':checked'))
        $(oldPriceContainer).show();
    else
        $(oldPriceContainer).hide();
}

function getOldPrice(prices) {
    if (Number.isInteger(prices['oneoff']))
        return prices['oneoff'];
    else
        return prices['oneoff']['small_pool'];
}

function fillLinks(filial, price) {
    let signUpBtn = $(filial).find('a[class="bt-1"]');
    let payOnlineBtn = $(filial).find('a[class="bt-2"]');
    let quantityVal = $(filial).find('input[name="quantity"]:checked').val();

    let signUpBtnLink;
    let payOnlineBtnLink;

    let massageString = '';
    let partOfMessage;
    let yclientsCode;
    let rfiBankKey = false;
    let activePopupValue;

    console.log($(filial).find("div[id='quantity']:visible").length);

    partOfMessage = $(filial).find('input[name="quantity"]:checked:visible');
    if (partOfMessage.length > 0)
        massageString = massageString + 'Количестово занятий: ' + $(partOfMessage).next("span:first").text().toLowerCase();

    partOfMessage = $(filial).find('input[name="swimming_pool"]:checked:visible');
    if (partOfMessage.length > 0)
        massageString = massageString + ', Бассейн: ' + $(partOfMessage).next("span:first").text().toLowerCase();

    partOfMessage = $(filial).find('input[name="type_of_subscription"]:checked:visible');
    if (partOfMessage.length > 0)
        massageString = massageString + ', Вид абонемента: ' + $(partOfMessage).next("span:first").text().toLowerCase();


    console.log(massageString);

    switch ($(filial).attr('id')) {
        case 'prazhskaya':
            activePopupValue = 1;
            yclientsCode = '60559';
            rfiBankKey = 'G%2FncjmNEBe84x4lEfgf3dyIqwGWQVDf7HKlnEBr0Dgc%3D';
            break;
        case 'akademicheskaya':
            activePopupValue = 2;
            yclientsCode = '124032';
            rfiBankKey = 'Wy4g8yADEp%2FmSFHDKbbHqGOrWnEzE8kDIrSrapVc0Z8%3D';
            break;
        case 'maryino':
            activePopupValue = 3;
            yclientsCode = '228760';
            rfiBankKey = 'TOJugDeSdrrhNrSj8vsHLughHsNGQFliUmq8X4yCPkE%3D';
            break;
        case 'nekrasovka':
            activePopupValue = 4;
            yclientsCode = null;
            rfiBankKey = 'LX21USWpnEKqvvVyPmda5tammqzcCmeoOV6NnCYfQ8k=';
    }

    if (quantityVal === 'trial' || quantityVal === 'oneoff') {
        signUpBtnLink = 'https://n' + yclientsCode + '.yclients.com/';
        payOnlineBtnLink = signUpBtnLink;

        //$(signUpBtn).unbind('click');
    } else {
        payOnlineBtnLink = 'https://partner.rficb.ru/alba/input/?name=' + massageString +'&cost=' + price + '&key=' + rfiBankKey + '&default_email=&order_id=0';

        //$('.popup').find("option[value=" + value + "]").prop("selected", true);
        //$(signUpBtn).unbind('click').bind('click', showTrialPopup);
    }

    $(signUpBtn).attr('href', signUpBtnLink);
    $(payOnlineBtn).attr('href', payOnlineBtnLink);

    function showTrialPopup(e) {
        e.preventDefault();

        $('.hidden-form').attr('value', massageString);

        $('.popup').slideDown();
        $('.popup-overlay').css('display', 'block');

        $('#js-close-popup, .popup-overlay').on('click', function (e) {
            $('.popup').find("option[value='1']").prop("selected", true);
            $('.hidden-form').attr('value', 'Аноним');
            $('.popup').slideUp();
            $('.popup-overlay').css('display', 'none');
        });
    }
}
