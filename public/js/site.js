$(document).ready(function () {

    let mobileMenu = $('div[class="mobil-menu"]');
    let button = $('button[class="burger"]')

    $('[class="mobil-menu__nav"] a').click(function () {
        mobileMenu.removeClass('active')
        button.removeClass('active')
    });
})
