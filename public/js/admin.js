$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();



    let initialText;




    /// Frame around text
    $('[contenteditable="true"]').on('focusin', function () {
        $(this).addClass('backLightFrame');
    })


    /// Update text
    $('[contenteditable="true"][id^="text_"]').on('focusin', function () {
        initialText = $(this).html();
    }).on('focusout', function () {
        frameAroundTextOff(this);
        saveText(this);
        initialText = null;
    });


    /// Update trainer text
    $('[id^= "trainer_"][contenteditable="true"]').on('focusin', function () {
        initialText = $(this).html();
    }).on('focusout', function () {
        frameAroundTextOff(this);
        saveTrainerText(this);
        initialText = null;
    });


    /// Delete trainer
    $('[id="trainer_delete_btn"]').on('click', function () {
        deleteTrainer(this);
    });









    updateTrainerImage();

    addTrainer();



    function saveText(element) {
        let text = $(element).html();

        if (text !== initialText) {
            let textId = $(element).attr('id').split('_')[1];
            let url = 'admin/edittext';
            let data = {'id': textId, 'text': text};

            ajax('PUT', url, data);
        }
    }

    function saveTrainerText(element) {
        let text = $(element).html();

        if (text !== initialText) {
            let trainerId = $(element).parents('div[id^="trainer_"]').attr('id').split('_')[1];
            let fieldName = $(element).attr('id').split('_')[1];
            let url = 'admin/trainers/' + trainerId;
            let data = {'field': fieldName, 'text': text};

            ajax('PUT', url, data);
        }
    }

    function deleteTrainer(element) {
        let trainerId = $(element).parents('div[id^="trainer_"]').attr('id').split('_')[1];
        let slickIndex = $(element).parents('div[id^="trainer_"]').attr('data-slick-index');
        let url = 'admin/trainers/' + trainerId;

        ajax('DELETE', url, null, function () {
            trainerSlickRemove(slickIndex);
            trainersSlickRefresh();
        });
    }

    function ajax(type, url, data, successCallback) {
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: type,
            url: url,
            data: data,
            success: function (response) {
                if (response.status) {
                    if (response.status === true) {
                        successCallback();
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
    }

    function frameAroundTextOff(e) {
        $(e).removeClass('backLightFrame');
    }
});



//***************** Update trainer image *****************//

function updateTrainerImage() {
    let $modalCropper = $('#modal_cropper');
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
            $modalCropper.modal('show');
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

    $modalCropper.on('shown.bs.modal', function () {
        cropper = new Cropper(cropperImage, {
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
        $modalCropper.modal('hide');

        let data = new FormData();
        let imageData = JSON.stringify(cropper.getData());
        data.append('_method', 'PUT');
        data.append('image', file);
        data.append('image-data', imageData);

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'POST',
            url: 'admin/trainers/' + trainerId,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status) {
                    if (response.status === true) {
                        $('div[id="trainer_' + trainerId + '"]').find('img').attr('src', '../storage/trainers/' + response.image);
                        trainersSlickRefresh();
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





//***************** Add trainer *****************//

function addTrainer() {
    let $modalAddTrainer = $('#modal_add_trainer');

    $('#trainer_add_btn').on('click', function () {
        $modalAddTrainer.modal('show');
        loadTrainerImage();
    });

    $('#trainer_save_btn').on('click', function () {

        let formData = new FormData($modalAddTrainer.find('form')[0]);

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'POST',
            url: 'admin/trainers',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response.errors);
            },
            error: function (error) {
                console.log(error.status);
                if (error.status === 422) {

                }
            }
        })
    })

    $modalAddTrainer.on('hidden.bs.modal', function () {
        console.log();
    });

    function loadTrainerImage() {
        let preview = document.getElementById('preview');
        let $modalCropper = $('#modal_cropper');
        let cropper;

        $modalAddTrainer.find('input[name="image"]').on('change', function (e) {
            let cropperImage = document.getElementById('cropper_image');

            let files = e.target.files;
            let done = function (url) {
                e.target.value = '';
                cropperImage.src = url;
                $modalCropper.modal('show');
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

            $modalCropper.on('shown.bs.modal', function () {
                cropper = new Cropper(cropperImage, {
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
                let canvas;

                $modalCropper.modal('hide');

                ///////


                if (cropper) {
                    canvas = cropper.getCroppedCanvas();
                    preview.src = canvas.toDataURL();

                }
            });
        });


    }
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

function trainersSlickRefresh() {
    $('.slides_pagination').slick('refresh');
    $('.slides').slick('refresh');
}

function trainerSlickRemove(slickIndex) {
    $('.slides_pagination').slick('slickRemove', slickIndex);
    $('.slides').slick('slickRemove', slickIndex);
}

