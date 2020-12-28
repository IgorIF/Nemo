$(document).ready(function () {
    let initialText;
    let $modalCropper = $('#modal_cropper');
    let $modalAddTrainer = $('#modal_add_trainer');
    let cropperImage = $('#cropper_image')[0];
    let cropperObj;
    let cropperData;
    let trainerId;
    let imageFile;
    let cropBtnMode = true;

    $('[data-toggle="tooltip"]').tooltip();

    /// Frame around text
    $('[contenteditable="true"]').focusin(frameAroundTextHandler);

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
    $(document).on('click', '#trainer_delete_btn', function () {
        deleteTrainer(this);
    });

    /// Cropper
    $modalCropper.on('shown.bs.modal', function () {
        cropperObj = new Cropper(cropperImage, {
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
        cropperObj.destroy();
        cropperObj = null;
    });

    /// Trainer image edit cropper show
    $(document).on('change', '[id^="trainer_image"]', function (e) {
        trainerId = $(this).parents('div[id^="trainer_"]').attr('id').split('_')[1];
        showCropperImage(e);
    });

    /// Save trainer image
    $('#crop_btn').on('click', function () {
        cropperData = cropperObj.getData();
        if (cropBtnMode) {   /// update image
            saveTrainerImage();
        } else {            /// add trainer
            updatePreview();
        }
        $modalCropper.modal('hide');
    });

    /// Show add trainer modal
    $('#trainer_add_btn').on('click', function () {
        $modalAddTrainer.modal('show');
    });

    /// Save new trainer
    $('#trainer_save_btn').on('click', function () {
        saveNewTrainer();
    })

    $modalAddTrainer.on('shown.bs.modal', function () {
        cropBtnMode = false;
    }).on('hidden.bs.modal', function () {
        cropBtnMode = true;
    });

    $modalAddTrainer.find('input[id="input"]').on('change', function (e) {
        showCropperImage(e);
    })


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

    function saveTrainerImage() {
        let data = new FormData();
        let imageData = JSON.stringify(cropperData);
        data.append('_method', 'PUT');
        data.append('image', imageFile);
        data.append('image-data', imageData);

        let url = 'admin/trainers/' + trainerId;

        ajax('POST', url, data, function (response) {
            $('div[id="trainer_' + trainerId + '"]').find('img').attr('src', '../storage/trainers/' + response.image);
        }, null, true);
    }

    function saveNewTrainer() {
        let data = new FormData($modalAddTrainer.find('form')[0]);
        data.append('image-data', JSON.stringify(cropperData));
        let url = 'admin/trainers';
        ajax('POST', url, data, function (response) {
            if (response.status === true) {
                let trainer = response.trainer;
                trainerSlickAdd(trainer);
                trainersSlickRefresh();
                $modalAddTrainer.modal('hide');
            }
        }, function (error) {
            if (error.status === 422) {
                let errors = error.responseJSON.errors;
                let inputs = $modalAddTrainer.find('input').add($modalAddTrainer.find('textarea'));

                $(inputs).each(function (i, e) {
                    let fieldName = $(e).attr('name');
                    if (Object.keys(errors).includes(fieldName)) {
                        $(e).addClass('is-invalid');
                        $(e).parent().find('div[class="invalid-feedback"]').text(errors[fieldName]);
                    } else {
                        if ($(e).hasClass('is-invalid')) {
                            $(e).removeClass('is-invalid');
                            (e).parent().find('div[class="invalid-feedback"]').text('');
                        }
                    }
                });

            }
        },true);
    }

    function updatePreview() {
        let previewImg = $('#preview')[0];

        if (cropperObj) {
            let canvas = cropperObj.getCroppedCanvas();
            previewImg.src = canvas.toDataURL();
        }
    }

    function showCropperImage(element) {
        let files = element.target.files;
        let done = function (url) {
            //element.target.value = '';
            cropperImage.src = url;
            $modalCropper.modal('show');
        };

        let reader;

        if (files && files.length > 0) {
            imageFile = files[0];

            if (URL) {
                done(URL.createObjectURL(imageFile));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };

                reader.readAsDataURL(imageFile);
            }
        }
    }

    function ajax(type, url, data, onSuccess, onError, form = false) {
        let params = {
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: type,
            url: url,
            data: data,
            success: function (response) {
                if (response.status) {
                    if (response.status === true) {
                        if (onSuccess) {
                            onSuccess(response);
                        }
                        toast('Сохранено', {type: 'success'});
                    }
                } else {
                    toast('Ошибка сохранения', {type: 'danger'})
                }
            },
            error: function (error) {
                if (onError) {
                    onError(error);
                }
                toast('Ошибка сохранения', {type: 'danger'})
            }
        }
        if (form === true) {
            params.cache = false;
            params.contentType = false;
            params.processData = false;
        }

        $.ajax(params);
    }

    function frameAroundTextOff(e) {
        $(e).removeClass('backLightFrame');
    }

    function frameAroundTextHandler() {
        $(this).addClass('backLightFrame');
    }

    function trainerSlickAdd(trainer) {
        $('.slides_pagination').slick('slickAdd', '<div id="trainer_' + trainer.id + '"><img src="storage/trainers/' + trainer.image + '" /></div>');


        let slide = $('<div id="trainer_' + trainer.id + '">' +
                        '<div class="flex jcsb">' +
                            '<div class="trainer_foto">' +
                                '<label class="label" data-toggle="tooltip" title="Загрузить фото">' +
                                    '<img src="storage/trainers/' + trainer.image + '" />' +
                                    '<input style="display: none" type="file" class="sr-only" id="trainer_image" name="image" accept="image/*">' +
                                '</label>' +
                            '</div>' +
                            '<div class="trainer_caption"></div>' +
                            '<div style="max-width: 90%; width: 100%; margin: auto; height: 100px">' +
                                '<a id="trainer_delete_btn" class="btn" style="padding: 20px 30px; float: right; box-shadow: none">Удалить тренера</a>' +
                            '</div>' +
                        '</div>' +
                    '</div>');

        let name = $('<h4 id="trainer_name" contenteditable="true">' + trainer.name + '</h4>');
        let description = $('<p id="trainer_description" contenteditable="true">' + trainer.description + '</p>');


        name.click(frameAroundTextHandler);
        description.click(frameAroundTextHandler);

        let container = slide.find('.trainer_caption');

        container.append(name).append(description);
        if (trainer.video !== null)
            container.append('<div><a data-fancybox href="' + trainer.video + '">Смотреть занятие</a></div>');

        $('.slides').slick('slickAdd', slide);
    }
});


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

