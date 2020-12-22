$(document).ready(function () {

    let startText;

    /// update text
    $('[contenteditable="true"][id^="text_"]').on('focusout', function () {
        backlightFrameOff(this);

        let id = $(this).attr('id').split('_')[1];
        let text = $(this).html();

        if (text !== startText) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'PUT',
                url: './editsite/edittext',
                data: {
                    'id': id,
                    'text': text
                },
                success: function (response) {
                    if (response == 1) {
                        toast('Сохранено', {type: 'success'});
                    } else {
                        toast('Ошибка сохранения', {type: 'danger'})
                    }
                },
                error: function () {
                    toast('Ошибка сохранения', {type: 'danger'})
                }
            });
            startText = null;
        }
    }).on('focusin', function () {
        startText = $(this).html();
    });


    /// update trainer
    $('[id^= "trainer_"]').find('[contenteditable="true"]').on('focusout', function () {
        backlightFrameOff(this);

        let id = $(this).parents('div[id^="trainer_"]').attr('id').split('_')[1];
        let field = $(this).attr('id').split('_')[1];
        let text = $(this).html();

        if (text !== startText) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'PUT',
                url: './trainers/' + id,
                data: {
                    'field': field,
                    'text': text
                },
                success: function (response) {
                    if (response == 1) {
                        toast('Сохранено', {type: 'success'});
                    } else {
                        toast('Ошибка сохранения', {type: 'danger'})
                    }
                },
                error: function () {
                    toast('Ошибка сохранения', {type: 'danger'})
                }
            });
            startText = null;
        }
    }).on('focusin', function () {
        startText = $(this).html();
    });


    /// backlight frame
    $('[contenteditable="true"]').on('focusin', function () {
        $(this).addClass('backLightFrame');
    })


    function backlightFrameOff(e) {
        $(e).removeClass('backLightFrame');
    }

    $('#toast').toast('show');


});


/// toast

function toast(content, opts){

    opts = $.extend( true, {

        type: 'primary', //primary, secondary, success, danger, warning, info, light, dark
        position: 'bottomleft', //topleft, topcenter, topright, bottomleft, bottomcenter, bottonright, center,
        appendType: 'prepend', //append, prepend
        closeBtn: false,
        autoClose: 4000,
        className: '',

    }, opts);

    // 得到容器 $container
    let $container = $('#alert-container-'+ opts.position);
    if(!$container.length){
        $container = $('<div id="alert-container-' + opts.position + '" class="alert-container"></div>');
        $('body').append($container);
    }

    // alert $el
    let $el = $(`<div class="alert fade alert-${opts.type}" role="alert">${content}</div>`);

    // 关闭按钮
   /* if(opts.autoClose){
        $el.append(`
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				`)
            .addClass('alert-dismissible');
    }*/

    //定时关闭
    if(opts.autoClose){
        let t = setTimeout(() => {
            $el.alert('close');
        }, opts.autoClose);
    }

    opts.appendType === 'append' ? $container.append($el) : $container.prepend($el);

    setTimeout(() => {
        $el.addClass('show');
    }, 50);

    return;
}






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

