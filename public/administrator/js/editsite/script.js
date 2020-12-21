$(document).ready(function () {

    /// update text
    $('[contenteditable="true"][id^="text_"]').on('focusout', function () {
        backlightFrameOff(this);

        let id = $(this).attr('id').split('_')[1];
        let text = $(this).html();

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'PUT',
            url: './editsite/edittext',
            data: {
                'id': id,
                'text': text
            },
            success: function () {},
            error: function () {}
        });
    });


    /// update trainer
    $('[id^= "trainer_"]').find('[contenteditable="true"]').on('focusout', function () {
        backlightFrameOff(this);

        let id = $(this).parents('div[id^="trainer_"]').attr('id').split('_')[1];
        let field = $(this).attr('id').split('_')[1];
        let text = $(this).html();

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'PUT',
            url: './trainers/' + id,
            data: {
                'field': field,
                'text': text
            },
            success: function (r) {
                console.log(r);
            },
            error: function () {}
        });
    });


    /// backlight frame
    $('[contenteditable="true"]').on('focus', function () {
        $(this).addClass('backLightFrame');
    })

    function backlightFrameOff(e) {
        $(e).removeClass('backLightFrame');
    }


});
