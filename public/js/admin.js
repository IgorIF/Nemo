

$(document).ready(function () {

    $('[data-toggle="tooltip"]').tooltip();

    updateText();

    updateTrainerText();

    updateTrainerImage();

    backLightFrameOn();
});

//***************** Update text *****************//

function updateText() {
    let startText;

    $('[contenteditable="true"][id^="text_"]').on('focusin', function () {
        startText = $(this).html();
    }).on('focusout', function () {
        backlightFrameOff(this);

        let textId = $(this).attr('id').split('_')[1];
        let text = $(this).html();

        if (text !== startText) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'PUT',
                url: './editsite/edittext',
                data: {
                    'id': textId,
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
    });
}


//***************** Update trainer text *****************//

function updateTrainerText() {
    let startText;

    $('[id^= "trainer_"][contenteditable="true"]').on('focusin', function () {
        startText = $(this).html();
    }).on('focusout', function () {
        backlightFrameOff(this);

        let trainerId = $(this).parents('div[id^="trainer_"]').attr('id').split('_')[1];
        let fieldName = $(this).attr('id').split('_')[1];
        let text = $(this).html();

        if (text !== startText) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'PUT',
                url: './trainers/' + trainerId,
                data: {
                    'field': fieldName,
                    'text': text
                },
                success: function (response) {
                    if (response.status) {
                        if (response.status === true)
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
    });
}

//***************** Update trainer image *****************//

function updateTrainerImage() {
    let $modal = $('#modal');
    let cropperImage = document.getElementById('cropper_image');
    let trainerId;
    let cropper;
    let file;



    $('[id^= "trainer_image"]').on('change', function (e) {
        trainerId = $(this).parents('div[id^="trainer_"]').attr('id').split('_')[1];

        let files = e.target.files;
        let done = function (url) {
            e.target.value = '';
            cropperImage.src = url;
            $modal.modal('show');
        };

        let reader;

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
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(cropperImage, {
            //viewMode: 1,
            //dragMode: 'none',
            aspectRatio: 1,
            autoCropArea: 1,
            movable: false,
            rotatable: false,
            scalable: false,
            zoomable: false,
            zoomOnTouch: false,
            zoomOnWheel: false,

        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    $('#crop').on('click', function () {
        $modal.modal('hide');

        let data = new FormData();
        let imageData = JSON.stringify(cropper.getData())
        data.append('_method', 'PUT');
        data.append('image', file);
        data.append('image-data', imageData);

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'POST',
            url: './trainers/' + trainerId,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status) {
                    if (response.status === true) {
                        $('div[id="trainer_' + trainerId + '"]').find('img').attr('src', '../storage/trainers/' + response.image);
                        // TODO current slide refresh
                        $('.slides_pagination').slick('refresh');
                        $('.slides').slick('refresh');
                        toast('Сохранено', {type: 'success'});
                    }
                } else {
                    toast('Ошибка сохранения', {type: 'danger'})
                }
            },
            error: function () {
                toast('Ошибка сохранения', {type: 'danger'})
            }
        });
    });
}


//***************** Backlight frame *****************//

function backLightFrameOn() {
    $('[contenteditable="true"]').on('focusin', function () {
        $(this).addClass('backLightFrame');
    })
}

function backlightFrameOff(e) {
    $(e).removeClass('backLightFrame');
}


//***************** Toast *****************//

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

