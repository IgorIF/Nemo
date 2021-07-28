$(document).ready(function () {

    let descriptions = $('input[name="calculatorDescriptions"]').data('descriptions');

    $('form[class^="calculator_"]').each(function (i, e) {
        initDescriptions(e, descriptions);
        initCalculator(e);
        //hidePayOnlineBtn(e);

        $(e).find('input').click(function () {
            initDescriptions(e, descriptions);
            initCalculator(e);
            //hidePayOnlineBtn(e);
        });
    });
});

function initCalculator (filial) {
    let prices = JSON.parse($(filial).attr('data-prices'));

    let quantity = $(filial).find('div[id="quantity"]');
    let swimmingPool = $(filial).find('div[id="swimming_pool"]');
    let typeOfSubscription = $(filial).find('div[id="type_of_subscription"]');

    let quantityVal = $(quantity).find('input:checked').val();
    let swimmingPoolVal = $(swimmingPool).find('input:checked').val();
    let typeOfSubscriptionVal = $(typeOfSubscription).find('input:checked').val();

    let price = prices[quantityVal]['price'];
    let oldPrice = getOldPrice(swimmingPoolVal, prices);
    let linkId;

    if (Number.isInteger(price)) {
        $(typeOfSubscription).hide()
        showPrices(filial, price, oldPrice)
        linkId = prices[quantityVal]['link_id']
    } else {
        if (typeof prices[quantityVal][swimmingPoolVal] != 'undefined') {
            price = prices[quantityVal][swimmingPoolVal]['price']
            if (Number.isInteger(price)) {
                $(swimmingPool).addClass('calc-single-block')
                $(typeOfSubscription).hide()
                $(swimmingPool).show()
                showPrices(filial, price, oldPrice)
                linkId = prices[quantityVal][swimmingPoolVal]['link_id']
            } else {
                if (typeof prices[quantityVal][swimmingPoolVal][typeOfSubscriptionVal] != 'undefined') {
                    price = prices[quantityVal][swimmingPoolVal][typeOfSubscriptionVal]['price']
                    $(swimmingPool).removeClass('calc-single-block')
                    $(typeOfSubscription).show()
                    showPrices(filial, price, oldPrice)
                    linkId = prices[quantityVal][swimmingPoolVal][typeOfSubscriptionVal]['link_id']
                }
            }
        } else if (typeof prices[quantityVal][typeOfSubscriptionVal] != 'undefined') {
            price = prices[quantityVal][typeOfSubscriptionVal]['price']
            if (Number.isInteger(price)) {
                $(typeOfSubscription).addClass('calc-single-block')
                $(typeOfSubscription).show()
                showPrices(filial, price, oldPrice)
                linkId = prices[quantityVal][typeOfSubscriptionVal]['link_id']
            }
        }
    }

    fillSignUpBtn(filial, $(filial).find('a[class="bt-1"]'))
    fillPayOnlineBtn(filial, linkId, $(filial).find('a[class="bt-2"]'))
    fillPayOnlineBtn(filial, linkId, $(filial).find('a[class="bt-3"]'))
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

function fillSignUpBtn(filial, button) {
    let activePopupValue;
    switch ($(filial).attr('id')) {
        case 'prazhskaya':
            activePopupValue = 1;
            break;
        case 'akademicheskaya':
            activePopupValue = 2;
            break;
        case 'maryino':
            activePopupValue = 3;
            break;
        case 'lyubertsy':
            activePopupValue = 4;
            break;
        case 'hovrino':
            activePopupValue = 5;
    }

    $(button).click(function (e) {
        e.preventDefault()
        let message = generateMessage(filial);
        showSingUpPopup(activePopupValue, message)
    })
}

function fillPayOnlineBtn(filial, link, button) {
    let clubId;
    let alias = $(filial).attr('id');
    switch (alias) {
        case 'prazhskaya':
            clubId = '59661dff-c468-11eb-bbf6-0050568342b3';
            break;
        case 'akademicheskaya':
            clubId = '96a1ba8e-c9c8-11eb-bbf6-0050568342b3';
            break;
        case 'maryino':
            clubId = 'b7712ceb-c9c8-11eb-bbf6-0050568342b3';
            break;
        case 'lyubertsy':
            clubId = 'd61c4407-c9c8-11eb-bbf6-0050568342b3';
            break;
        case 'hovrino':
            clubId = 'e8db9d50-c9c8-11eb-bbf6-0050568342b3';
    }

    let href = 'https://aqua-nemo.ru/lc/' + alias + '?club_id=' + clubId + '&getShopFormReg=Y&id=' + link
    //let href = 'http://test1.com/lc/' + alias + '?club_id=' + clubId + '&getShopFormReg=Y&id=' + link
    $(button).attr('href', href)
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

   /* $('#js-close-popup, .popup-overlay').on('click', function (e) {
        /!*$('.popup').find("option[value='1']").prop("selected", true);
        $('.hidden-form').attr('value', 'Аноним');
        $('.popup').slideUp();
        $('.popup-overlay').css('display', 'none');*!/
    });*/
    $('#js-close-popup, .popup-overlay').on('click', function(e) {
        // $('.popup').css('display', 'none');
        // $('.popup-overlay').css('display', 'none');
        // or
        //$('.popup').find("option[id='select']").prop("selected", true);
        $('.popup').slideUp();
        $('.popup-overlay').css('display', 'none');
        $('.popup').find("option[id='select']").prop("selected", true);

    });
}

function hidePayOnlineBtn(filial) {
    let quantityVal = $(filial).find('input[name="quantity"]:checked').val();

    let payOnlineBtn;
    let signUpBtn = $(filial).find('a[class="bt-1"]');

    if (quantityVal === 'trial' || quantityVal === 'oneoff') {
        payOnlineBtn = $(filial).find('a[class="bt-2"]');
        $(signUpBtn).hide();
        $(payOnlineBtn).removeClass('bt-2');
        $(payOnlineBtn).addClass('bt-3');
        $(payOnlineBtn).css("width", "100%");
    } else {
        payOnlineBtn = $(filial).find('a[class="bt-3"]');
        $(payOnlineBtn).removeClass('bt-3');
        $(payOnlineBtn).addClass('bt-2');
        $(payOnlineBtn).css("width", "50%");
        $(signUpBtn).show()
    }
}

function getOldPrice(swimmingPool, prices) {
    if (typeof prices['oneoff'][swimmingPool] != 'undefined') {
        return prices['oneoff'][swimmingPool]['price']
    } else {
        return prices['oneoff']['price'];
    }
}
