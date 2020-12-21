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
    $('[contenteditable="true"]').on('focusin', function () {
        $(this).addClass('backLightFrame');
    })


    function backlightFrameOff(e) {
        $(e).removeClass('backLightFrame');
    }


});




////cropper

/*$(document).ready(function () {
    let preview = document.getElementById('preview')
    let image = document.getElementById('image')
    let input = document.getElementById('input')
    let $modal = $('#modal');
    let cropper;

    $('[data-toggle="tooltip"]').tooltip();

    $(input).on('change', function (e) {
        let files = e.target.files;
        let done = function (url) {
            //input.value = '';
            image.src = url;
            $modal.modal('show');
        };

        let reader;
        let file;
        let url;

        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };

                reader.readAsDataURL(file);
            }
        }
    })

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            autoCropArea: 1,
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    $('#crop').on('click', function () {
        var canvas;

        $modal.modal('hide');

        if (cropper) {
            canvas = cropper.getCroppedCanvas();
            preview.src = canvas.toDataURL();

            let cropData = cropper.getData();
            cropData = JSON.stringify(cropData);

            $('#image-data').attr('value', cropData);
        }
    })
})*/

