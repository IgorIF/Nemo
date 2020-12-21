$(document).ready(function () {

    /// update text
    $('[contenteditable="true"][id^="text_"]').on('keyup', function () {
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
    $('[id^= "trainer_"]').find('[contenteditable="true"]').on('keyup', function () {
        let id = $(this).parents('div[id^="trainer_"]').attr('id').split('_')[1];
        let field = $(this).attr('id').split('_')[1];
        let text = $(this).html();

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'PUT',
            url: '',
            data: {
                'id': id,
                'field': field,
                'text': text
            },
            success: function () {},
            error: function () {}
        });
    });


})
