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

    let currentFilialAlias = $('select[name="filial"] option:selected').first().val();
    let currentPoolId = $('input[name="pool"]:checked').val();
    let currentSubscriptionId = $('input[name="subscription"]:checked').val();

});

function initCalculator(filialVal = null) {

    if (filialVal == null) {
        filialVal = $(payment).find('select[name="filial"] option:checked').val();
    }
    let numberOfLessonsVal = $(payment).find('input[name="number-of-lessons"]:checked').val();
    let poolVal = $(payment).find('input[name="pool"]:checked').val();
    let subscriptionVal = $(payment).find('input[name="subscription"]:checked').val();

    console.log(subscriptionVal);
}
