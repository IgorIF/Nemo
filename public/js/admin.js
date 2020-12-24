

$(document).ready(function () {

    $('[data-toggle="tooltip"]').tooltip();

    updateText();

    updateTrainerText();

    backLightFrameOn();

    updateTrainerImage();
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
    let trainerEl = $('[id^= "trainer_"]')

    $(trainerEl).find('[contenteditable="true"]').on('focusin', function () {
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

//***************** Update trainer image *****************//

function updateTrainerImage() {
    let input;
    let $modal = $('#modal');
    let cropper;
    let id;
    let form;

    $(trainerEl).find('[name="image"]').on('change', function (e) {
        id = $(this).parents('div[id^="trainer_"]').attr('id').split('_')[1];
        form = $(this).parent();
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
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            // viewMode: 1,
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    $('#crop').on('click', function () {
        $modal.modal('hide');
        //let img = input.files[0];


        let data = new FormData(form[0]);

        console.log(data);


        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'PUT',
            url: './trainers/' + id,
            /*contentType: false,
            cache: false,
            enctype: 'multipart/form-data',
            processData: false,*/
            data: data,
            success: function (response) {
                console.log(response)
                /*if (response == 1) {
                    toast('Сохранено', {type: 'success'});
                } else {
                    toast('Ошибка сохранения', {type: 'danger'})
                }*/
            },
            error: function () {
                /*toast('Ошибка сохранения', {type: 'danger'})*/
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

