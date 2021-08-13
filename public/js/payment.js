let payment = $('section[class="payment"]')
let filialsData = JSON.parse($(payment).find('h2').attr('data-filials'));

$(document).ready(function () {

    initCalculator();

    $(payment).find('div[class="new-select__item"]').each(function (i, el) {
        $(el).click(function () {
            initCalculator($(el).attr('data-value'));
        })
    });

    $(payment).find('input').each(function (i, el) {
        $(el).click(function () {
            initCalculator();
        })
    });

    $(payment).find('a.payment__btn').click(function () {
        fillPopupForm();
    })

});

function initCalculator(filialVal = null) {

    let subscription = $(payment).find('input[name="subscription"]:checked');
    let numberOfLessons = $(payment).find('input[name="number-of-lessons"]:checked');
    if (filialVal == null) {
        filialVal = $(payment).find('select[name="filial"] option:checked').val();
    }
    let prices = filialsData[filialVal];
    let numberOfLessonsVal = $(numberOfLessons).val();
    let poolVal = $(payment).find('input[name="pool"]:checked').val();
    let subscriptionVal = $(subscription).val();
    //////////////////// hide && show

    //hide/show pool
    $(payment).find('input[name="pool"]').each(function (i, el) {
        if (!Object.keys(prices[numberOfLessonsVal]).includes($(el).val())) {
            $(el).parent().hide();
            let field = $(payment).find('input[name="pool"]').parent('label:visible:first').children('input');
            $(field).prop('checked', true);
        } else {
            $(el).parent().show();
            if ($(payment).find('.payment-group:first label:visible').length === 1) {
                let field = $(payment).find('input[name="pool"]').parent('label:visible:first').children('input');
                $(field).prop('checked', true);
            }
        }
    });
    ////////////////////


    let cards = $(payment).find('input[name="number-of-lessons"]')

    poolVal = $(payment).find('input[name="pool"]:checked').val();
    subscriptionVal = $(payment).find('input[name="subscription"]:checked').val();


    $(cards).each(function (i, el) {
        let price = prices[$(el).val()];

        if (typeof price == 'object') {
            price = prices[$(el).val()][poolVal];
        }

        if (typeof price == 'object') {
            price = prices[$(el).val()][poolVal][subscriptionVal];
        }

        price = numberWithSpaces(price);

        $(el).next().find('div[class="payment-option__pr"]').html(price + ' ₽')
        $(el).next().find('header span:first:not(".payment-option__sale")').text($(subscription).next('span').text() + ' на')

        if (i === 3) {
            if (parseInt(subscriptionVal) === 1) {
                $(el).next('div').first('header').find('span:last').show();
            } else {
                $(el).next('div').first('header').find('span:last').hide();
            }
        }
    })

    let price =  $(payment).find('input[name="number-of-lessons"]:checked').parent().find('.payment-option__pr').text().substr(0, $(payment).find('input[name="number-of-lessons"]:checked').parent().find('.payment-option__pr').text().length - 2)
    $('div[class="all-price"]').find('span:first').html(price + ' ₽')
}

function fillPopupForm() {
    let popup = $('#payment_popup');
    let filial = $(payment).find('select[name="filial"] option:selected');
    let pool = $(payment).find('input[name="pool"]:checked');
    let subscription = $(payment).find('input[name="subscription"]:checked');
    let price = $(payment).find('div[class="all-price"] span')

    $(popup).find('select[name="filial"]').find("option[value=" + $(filial).val() +"]").prop('selected', true)
    $(popup).find('select[name="filial"]').siblings('div[class^="new-select"]:first').text($(filial).text())
    $(popup).find('input[name="pool"]').val($(pool).next('span').text());
    $(popup).find('input[name="subscription"]').val($(subscription).next('span').text());
    $(popup).find('input[name="price"]').val($(price).text());
}

function numberWithSpaces(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}

function numberNotSpaces(x) {
    return parseInt(x.replace(/ /g,''));
}
