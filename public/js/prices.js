$(document).ready(function () {

    let descriptions = $('input[name="calculatorDescriptions"]').data('descriptions');

    $('form[class^="calculator_"]').each(function (i, e) {
        initDescriptions(e, descriptions);
        initCalculator(e);
        hidePayOnlineBtn(e);

        $(e).find('input').click(function () {
            initDescriptions(e, descriptions);
            initCalculator(e);
            hidePayOnlineBtn(e);
        });

        $(e).find('a[class="bt-1"]').click(function (l) {
           fillSignUpBtn(e, this, l);
        });

        $(e).find('a[class="bt-3"]').click(function (l) {
            fillSignUpBtn(e, this, l);
        });

        $(e).find('a[class="bt-2"]').click(function (l) {
            fillPayOnlineBtn(e, this, l)
        });


        if (i === 0)
            $(e).find('div[class*="top"]').click();
    });

});

function initCalculator (filial) {
    let prices = JSON.parse($(filial).attr('data-prices'));
    let oldPrice = getOldPrice(prices);

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
    } else {
        $(swimmingPool).removeClass('calc-single-block')
        $(typeOfSubscription).removeClass('calc-single-block');
        $(swimmingPool).show();
        $(typeOfSubscription).show();

        price = prices[quantityVal][swimmingPoolVal];

        if (Number.isInteger(price)) {
            $(swimmingPool).addClass('calc-single-block');
            $(typeOfSubscription).hide();
            showPrices(filial, price, oldPrice);
        } else {
            price = prices[quantityVal][typeOfSubscriptionVal];

            if (Number.isInteger(price)) {
                $(typeOfSubscription).addClass('calc-single-block');
                $(swimmingPool).hide();
                showPrices(filial, price, oldPrice);
            } else {
                price = prices[quantityVal][swimmingPoolVal][typeOfSubscriptionVal];

                if (Number.isInteger(price)) {
                    showPrices(filial, price, oldPrice);
                }
            }
        }
    }
}

function initDescriptions (filial, descriptions) {
    let inputsChecked = $(filial).find('input:checked');

    $(inputsChecked).each(function (i, e) {
        let title = $(e).parents('div[class*="section"]').find('[id="calculatorDescription_title"]');
        let body = $(e).parents('div[class*="section"]').find('[id="calculatorDescription_body"]');

        $(title).html(descriptions[$(e).attr('name')][$(e).attr('value')]['title']);
        $(body).html(descriptions[$(e).attr('name')][$(e).attr('value')]['body']);
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

function fillSignUpBtn(filial, button, element) {
    let quantityVal = $(filial).find('input[name="quantity"]:checked').val();

    let yclientsCode;
    let activePopupValue;

    switch ($(filial).attr('id')) {
        case 'prazhskaya':
            yclientsCode = '60559';
            activePopupValue = 1;
            break;
        case 'akademicheskaya':
            yclientsCode = '124032';
            activePopupValue = 2;
            break;
        case 'maryino':
            yclientsCode = '228760';
            activePopupValue = 3;
            break;
        case 'nekrasovka':
            yclientsCode = null;
            activePopupValue = 4;
            break;
        case 'rechnoy_vokzal':
            yclientsCode = null;
            activePopupValue = 5;
    }

    if (quantityVal === 'trial' || quantityVal === 'oneoff') {
        if (yclientsCode !== null) {
            let link = 'https://n' + yclientsCode + '.yclients.com/';
            $(button).attr('href', link);
        } else {
            element.preventDefault();
            let message = generateMessage(filial);
            showSingUpPopup(activePopupValue, message);
        }
    } else {
        element.preventDefault();
        let message = generateMessage(filial);
        showSingUpPopup(activePopupValue, message);
    }
}

function fillPayOnlineBtn(filial, button, element) {
    let quantityVal = $(filial).find('input[name="quantity"]:checked').val();

    if (quantityVal === 'trial' || quantityVal === 'oneoff') {
        fillSignUpBtn(filial, button, element);
    } else {
        let rfiBankKey;
        let price = $(filial).find('div[class="new-price"]').find('span').text();
        let message = generateMessage(filial);

        switch ($(filial).attr('id')) {
            case 'prazhskaya':
                rfiBankKey = 'G%2FncjmNEBe84x4lEfgf3dyIqwGWQVDf7HKlnEBr0Dgc%3D';
                break;
            case 'akademicheskaya':
                rfiBankKey = 'Wy4g8yADEp%2FmSFHDKbbHqGOrWnEzE8kDIrSrapVc0Z8%3D';
                break;
            case 'maryino':
                rfiBankKey = 'TOJugDeSdrrhNrSj8vsHLughHsNGQFliUmq8X4yCPkE%3D';
                break;
            case 'nekrasovka':
                rfiBankKey = 'LX21USWpnEKqvvVyPmda5tammqzcCmeoOV6NnCYfQ8k=';
                break;
            case 'rechnoy_vokzal':
                rfiBankKey = 'DYcs4LJ0bwqb+lsBn0//SJX5ek1sX2CVJ9ztI46UnaI=';
        }

        let link = 'https://partner.rficb.ru/alba/input/?name=' + message +'&cost=' + price + '&key=' + rfiBankKey + '&default_email=&order_id=0';
        $(button).attr('href', link);
    }
}

function generateMessage(filial) {
    let message = '';
    let partOfMessage;

    partOfMessage = $(filial).find('input[name="quantity"]:checked:visible');
    if (partOfMessage.length > 0)
        message = message + 'Количестово занятий: ' + $(partOfMessage).next("span:first").text().toLowerCase();

    partOfMessage = $(filial).find('input[name="swimming_pool"]:checked:visible');
    if (partOfMessage.length > 0)
        message = message + ', Бассейн: ' + $(partOfMessage).next("span:first").text().toLowerCase();

    partOfMessage = $(filial).find('input[name="type_of_subscription"]:checked:visible');
    if (partOfMessage.length > 0)
        message = message + ', Вид абонемента: ' + $(partOfMessage).next("span:first").text().toLowerCase();

    return message;
}

function showSingUpPopup(activeValue, message) {
    $('.popup').find("option[value=" + activeValue + "]").prop("selected", true);
    $('.hidden-form').attr('value', message);

    $('.popup').slideDown();
    $('.popup-overlay').css('display', 'block');

    $('#js-close-popup, .popup-overlay').on('click', function (e) {
        $('.popup').find("option[value='1']").prop("selected", true);
        $('.hidden-form').attr('value', 'Аноним');
        $('.popup').slideUp();
        $('.popup-overlay').css('display', 'none');
    });
}

function hidePayOnlineBtn(filial) {
    let quantityVal = $(filial).find('input[name="quantity"]:checked').val();

    let signUpBtn;
    let payOnlineBtn = $(filial).find('a[class="bt-2"]');

    if (quantityVal === 'trial' || quantityVal === 'oneoff') {
        signUpBtn = $(filial).find('a[class="bt-1"]');
        $(payOnlineBtn).hide();
        $(signUpBtn).removeClass('bt-1');
        $(signUpBtn).addClass('bt-3');
        $(signUpBtn).css("width", "100%");
    } else {
        signUpBtn = $(filial).find('a[class="bt-3"]');
        $(signUpBtn).removeClass('bt-3');
        $(signUpBtn).addClass('bt-1');
        $(signUpBtn).css("width", "50%");
        $(payOnlineBtn).show()
    }
}
