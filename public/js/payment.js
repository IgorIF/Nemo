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
            //$(el).prop('checked', false);
            $(el).parent().hide();
            let field = $(payment).find('input[name="pool"]').parent('label:visible:first').children('input');
            //console.log(field)
            //let field = $(payment).find('input[name="pool"]').parent('label:visible:first').children('input');
            $(field).prop('checked', true);
        } else {
            $(el).parent().show();
            let field = $(payment).find('input[name="pool"]').parent('label:visible:first').children('input');
            console.log($(payment).find('input[name="pool"]').parent('label:visible').length)
            console.log(field)
            //$(field).prop('checked', true);
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

        $(el).next().find('div[class="payment-option__pr"]').html(price + ' <i>₽</i>')
        $(el).next().find('header span:first:not(".payment-option__sale")').text($(subscription).next('span').text() + ' на')
    })

    $('div[class="all-price"]').find('span:first').text($(numberOfLessons).find('div[class="payment-option__pr"]'))


}
