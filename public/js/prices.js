$(document).ready(function () {

    $('form[class="calculator"]').each(function (i, e) {
        let prices = $(e).data('prices');
        let checkedFieldsValues = initCheckedFields();
        let oldPrice = getOldPrice(prices);

        singleBlockStretch(e);
        initCalculator(e, checkedFieldsValues, prices, oldPrice);

        $(e).find('input').click(function () {
            checkedFieldsValues = initCheckedFields();
            initCalculator(e, checkedFieldsValues, prices);
            singleBlockStretch(e);
        });

        function initCheckedFields() {

            let checkedFieldsValues = [];

            $(e).find('input:checked').each(function (i, e) {
                checkedFieldsValues.push($(e).val());
            })

            return checkedFieldsValues;
        }
    })

});

function initCalculator (filial, chFields, prices, oldPrice) {
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
        showAndHidePrices(filial, price, oldPrice);
    } else {
        $(swimmingPool).show();
        $(typeOfSubscription).show();

        price = prices[quantityVal][swimmingPoolVal];

        if (Number.isInteger(price)) {
            $(typeOfSubscription).hide();
            showAndHidePrices(filial, price, oldPrice);
        } else {
            price = prices[quantityVal][typeOfSubscriptionVal];

            if (Number.isInteger(price)) {
                $(swimmingPool).hide();
                showAndHidePrices(filial, price, oldPrice);
            } else {
                price = prices[quantityVal][swimmingPoolVal][typeOfSubscriptionVal];

                if (Number.isInteger(price)) {
                    showAndHidePrices(filial, price, oldPrice);
                }
            }
        }
    }
}

function showAndHidePrices(filial, newPrice, oldPrice) {
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

function singleBlockStretch(filial) {
    let blockSections = $(filial).find('div[class="list-hidden"]').find('div[class="section"]:visible');

    if (blockSections.length % 2 === 1) {
        $(blockSections.last()).css('max-width', 'unset').css('width', '100%');
    } else {
        $(blockSections).each(function (i, e) {
            $(e).css('max-width', '303px').css('width', '49%');
        })
    }
}

function fillLinks(filial, price) {
    let signUpBtn = $(filial).find('a[class="bt-1"]');
    let payOnlineBtn = $(filial).find('a[class="bt-2"]');

    let filialCode;

    if ($(filial).attr('id') !== 'nekrasovka') {
        switch ($(filial).attr('id')) {
            case 'prazhskaya':
                filialCode = '60559';
                break;
            case 'akademicheskaya':
                filialCode = '124032';
                break;
            case 'maryino':
                filialCode = '228760';
        }

        let signUpBtnLink = 'https://n' + filialCode + '.yclients.com/';
        $(signUpBtn).attr('href', signUpBtnLink);
    }

}
