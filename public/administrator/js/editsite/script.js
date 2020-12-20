$(document).ready(function () {
    $('[contenteditable="true"]').on('keyup', function () {
        let text = $(this).html();
        let id = $(this).attr('id').split('_')[1];

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'PUT',
            url: './editsite/edittext',
            data: {
                'id': id,
                'text': text
            },
            success: function (response) {},
            error: function () {}
        })
    })
})
