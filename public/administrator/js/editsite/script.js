$(document).ready(function () {
    $('#header_text_1').on('keyup', function () {
        let text = $(this).text();
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'PUT',
            url: './editsite/edittext',
            data: {'text': text},
            success: function (response) {
                console.log(response)
            },
            error: function () {

            }
        });
    });
})
