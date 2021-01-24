$(document).ready(function () {
    let initialText;
    let $modalCropper = $('#modal_cropper');
    let $modalAddTrainer = $('#modal_add_trainer');
    let $modalAddSecurityItem = $('#modal_add_securityItem');
    let $modalAddVideo = $('#modal_add_video');
    let $modalAboutUsEditVideo = $('#modal_about_us_edit_video');
    let cropperImage = $('#cropper_image')[0];
    let cropperObj;
    let cropperData;
    let trainerId;
    let securityCategoryId;
    let imageFile;
    let cropBtnMode;

    $('[data-toggle="tooltip"]').tooltip();

    /// Update text
    $('[contenteditable="true"]').focusin(onTextFocusinListener)
        .focusout(onTextFocusoutListener);

    /// Delete trainer
    $(document).on('click', '#trainer_delete_btn', onTrainerDeleteBtnClickListener);

    /// Delete security item
    $(document).on('click', '#securityItem_delete_btn', onSecurityItemDeleteBtnClickListener);

    /// Delete rule item
    $(document).on('click', '#ruleItem_delete_btn', onRuleItemDeleteBtnClickListener);

    /// Delete video
    $(document).on('click', '#video_delete_btn', onVideoDeleteBtnClickListener);

    /// Cropper
    $modalCropper.on('shown.bs.modal', function () {

        let params = {};

        switch (cropBtnMode) {
            case 'trainer_create':
            case 'trainer_update':
                params.aspectRatio = 1;
                break;
            case 'video_create':
            case 'about_us_video_update':
                params.aspectRatio = 1.454;
                break;
        }
        params.autoCropArea = 1;
        params.movable = false;
        params.rotatable = false;
        params.scalable = false;
        params.zoomable = false;
        params.zoomOnTouch = false;
        params.zoomOnWheel = false;

        cropperObj = new Cropper(cropperImage, params);
    }).on('hidden.bs.modal', function () {
        cropperObj.destroy();
        cropperObj = null;
    });

    $modalAddSecurityItem.on('hidden.bs.modal', function () {
       securityCategoryId = null;
    });

    /// Trainer image edit cropper show
    $('[id^="trainer_image"]').change(onUpdateTrainerImageChangeListener);

    /// Save trainer image
    $('#crop_btn').click(onCropBtnClickListener);

    /// Show add trainer modal
    $('#trainer_add_btn').click(onTrainerAddBtnClickListener);

    /// Show add securityItem modal
    $('[id="securityItem_add_btn"]').click(onSecurityItemAddBtnClickListener);

    /// Show add review video modal
    $('#review_video_add_btn').click(onVideoAddBtnClickListener);

    /// Show edit about us video modal
    $('#about_us_video_edit_btn').click(onAboutUsVideoEditBtnClickListener);

    /// Save new trainer
    $('#trainer_save_btn').click(onTrainerSaveBtnClickListener);

    /// Save new securityItem
    $('#securityItem_save_btn').click(onSecurityItemSaveBtnClickListener);

    /// Save new video
    $('#video_save_btn').click(onVideoSaveBtnClickListener);

    /// Update about us video
    $('#about_us_video_update_btn').click(onAboutUsVideoUpdateBtnClickListener);

    $modalAddTrainer.find('input[id="input"]').change(onCreateTrainerImageChangeListener);

    $modalAddVideo.find('input[id="input"]').change(onVideoPreviewChangeListener);

    $modalAboutUsEditVideo.find('input[id="input"]').change(onAboutUsEditVideoPreviewChangeListener);


    /// Functions
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

    function saveSecurityText(element, model) {
        let text = $(element).html();
        let data = {'text': text};
        let id = $(element).parents('[id^="security"]').attr('id').split('_')[1];
        let url = 'admin/security/';

        if (text !== initialText) {
            if (model === 'securityCategory') {
                url += 'categories/';
            } else if (model === 'securityItem') {
                url += 'items/';
            }
            url += id;

            ajax('PUT', url, data);
        }


    }

    function saveRuleText(element) {
        let text = $(element).html();
        let data = {'text': text};
        let id = $(element).parents('[id^="ruleItem"]').attr('id').split('_')[1];
        let url = 'admin/rules/' + id;

        ajax('PUT', url, data);
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

    function deleteSecurityItem(element) {
        let securityItemId = $(element).parents('[id^="securityItem"]').attr('id').split('_')[1];
        let url = 'admin/security/items/' + securityItemId;

        ajax('DELETE', url, null, function (response) {
            if (response.status === true) {
                $('#securityItem_' + securityItemId).remove();
            }
        });
    }

    function deleteRuleItem(element) {
        let ruleItemId = $(element).parents('[id^="ruleItem"]').attr('id').split('_')[1];
        let url = 'admin/rules/' + ruleItemId;

        ajax('DELETE', url, null, function (response) {
            if (response.status === true) {
                $('#ruleItem_' + ruleItemId).remove();
            }
        })
    }

    function deleteVideo(element) {
        let videoId = null;
        let slickIndex = $(element).parents('div[class*="video_"]').attr('data-slick-index');
        let classes = $(element).parents('div[class*="video_"]').attr('class');
        let classes_arr = classes.split(' ');

        classes_arr.some(function (e) {
            if (e.substr(0, 5) === 'video') {
                videoId = e.split('_')[1];
                return true;
            }
        })

        if (videoId != null) {
            let url = 'admin/videos/' + videoId

            ajax('DELETE', url, null, function (response) {
                videoSlickRemove(slickIndex);
                videosSlickRefresh();
            })
        }
    }

    function saveTrainerImage() {
        let data = new FormData();
        let imageData = JSON.stringify(cropperData);
        data.append('_method', 'PUT');
        data.append('image', imageFile);
        data.append('image-data', imageData);

        let url = 'admin/trainers/' + trainerId;

        ajax('POST', url, data, function (response) {
            $('div[id="trainer_' + trainerId + '"]').find('img').attr('src', '../storage/images/trainers/' + response.image);
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
                clearFields($modalAddTrainer);
            }
        }, function (error) {
            if (error.status === 422) {
                let errors = error.responseJSON.errors;
                addInvalidFeedback($modalAddTrainer, errors);
            }
        },true);
    }

    function saveNewSecurityItem() {
        let data = new FormData($modalAddSecurityItem.find('form')[0]);
        data.append('securityCategoryId', securityCategoryId);
        let url = 'admin/security/items';
        ajax('POST', url, data, function (response) {
            if (response.status === true) {
                let securityItem = response.securityItem;
                securityItemAdd(securityItem);
                $modalAddSecurityItem.modal('hide');
                clearFields($modalAddSecurityItem);
            }
        }, function (error) {
            if (error.status === 422) {
                let errors = error.responseJSON.errors;
                addInvalidFeedback($modalAddSecurityItem, errors);
            }
        }, true);
    }

    function saveNewVideo() {
        let data = new FormData($modalAddVideo.find('form')[0]);
        data.append('image-data', JSON.stringify(cropperData))
        let url = 'admin/videos';
        ajax('POST', url, data, function (response) {
            if (response.status === true) {
                let video = response.video;
                videoSlickAdd(video);
                videosSlickRefresh()
                $modalAddVideo.modal('hide');
                clearFields($modalAddVideo);
            }
        }, function (error) {
            let errors = error.responseJSON.errors;
            addInvalidFeedback($modalAddVideo, errors);
        }, true);
    }

    function updateAboutUsVideo() {
        let data = new FormData($modalAboutUsEditVideo.find('form')[0]);
        data.append('_method', 'PUT');
        data.append('image-data', JSON.stringify(cropperData))
        let url ='admin/videos/1'
        ajax('POST', url, data, function (response) {
            if (response.status === true) {
                let video = response.video;
                aboutUsVideoUpdate(video);
                $modalAboutUsEditVideo.modal('hide');
                clearFields($modalAboutUsEditVideo);
            }
        }, function (error){
            if (error.status === 422) {
                let errors = error.responseJSON.errors;
                addInvalidFeedback($modalAboutUsEditVideo, errors);
            }
        }, true);
    }

    function updatePreview(modal) {

        let previewImg = modal.find('#preview')[0];

        if (cropperObj) {
            let canvas = cropperObj.getCroppedCanvas();
            previewImg.src = canvas.toDataURL();
        }
    }

    function showCropperImage(element) {
        let files = element.files;
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

    function trainerSlickAdd(trainer) {
        $('.slides_pagination').slick('slickAdd', '<div id="trainer_' + trainer.id + '"><img src="storage/images/trainers/' + trainer.image + '" /></div>');


        let slide = $('<div id="trainer_' + trainer.id + '">' +
                        '<div class="flex jcsb">' +
                            '<div class="trainer_foto">' +
                                '<label class="label" data-toggle="tooltip" title="Загрузить фото">' +
                                    '<img src="storage/images/trainers/' + trainer.image + '" />' +
                                '</label>' +
                            '</div>' +
                            '<div class="trainer_caption"></div>' +
                            '<div style="max-width: 90%; width: 100%; margin: auto; height: 100px"></div>' +
                        '</div>' +
                    '</div>');

        let imgInput = $('<input style="display: none" type="file" class="sr-only" id="trainer_image" name="image" accept="image/*">');
        let name = $('<h4 id="trainer_name" contenteditable="true">' + trainer.name + '</h4>');
        let description = $('<p id="trainer_description" contenteditable="true">' + trainer.description + '</p>');
        let deleteBtn = $('<a id="trainer_delete_btn" class="btn" style="padding: 20px 30px; float: right; box-shadow: none">Удалить тренера</a>');

        imgInput.change(onUpdateTrainerImageChangeListener);

        name.focusin(onTextFocusinListener)
            .focusout(onTextFocusoutListener);

        description.focusin(onTextFocusinListener)
            .focusout(onTextFocusoutListener);

        //deleteBtn.click(onTrainerDeleteBtnClickListener);

        let trainerCaptionContainer = slide.find('.trainer_caption');
        let trainerDeleteBtnContainer = trainerCaptionContainer.next('div');
        let trainerInputContainer = slide.find('label[class="label"]');

        trainerInputContainer.append(imgInput);
        trainerCaptionContainer.append(name).append(description);
        trainerDeleteBtnContainer.append(deleteBtn);
        if (trainer.video !== null)
            trainerCaptionContainer.append('<div><a data-fancybox href="' + trainer.video + '">Смотреть занятие</a></div>');

        $('.slides').slick('slickAdd', slide);
    }

    function videoSlickAdd(video) {
        let slide = $('<div class="slider video_' + video.id + '" style="text-align: center">' +
                        '<div class="review_block">' +
                            '<div class="play_block">' +
                                '<img src="storage/images/videos/' + video.image + '" />' +
                                '<a id="play-video-review" class="video-play-button" href="' + video.url + '"><span></span></a>' +
                            '</div>' +
                        '</div>' +
                    '</div>');

        let deleteBtn = $('<svg id="video_delete_btn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">' +
                            '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>' +
                            '<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>' +
                        '</svg>');

        //deleteBtn.click(onVideoDeleteBtnClickListener);

        slide.append(deleteBtn);

        slide.find('#play-video-review').click(onPlayVideoReviewIdClickListener);
        slide.find('.review_block .video-play-button').click(onVideoPlayButtonClassClickListener);

        $('.slider-slick').slick('slickAdd', slide);
    }

    function securityItemAdd(securityItem) {
        let container = $('div[id="securityCategory_' + securityCategoryId + '"]').children('ul');


        let content = '<div id="securityItem_' + securityItem.id + '" >' +
                            '<li>' +
                                '<span id="securityItem_text" contenteditable="true">' + securityItem.text + '</span>' +
                                '<svg style="float: right" id="securityItem_delete_btn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">' +
                                    '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>' +
                                    '<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>' +
                                '</svg>' +
                            '</li>' +
                        '</div>';

        container.append(content);
    }

    function aboutUsVideoUpdate(video) {
        let container = $('div[class*="about-image"]');
        container.find('img').attr('src', 'storage/images/videos/' + video.image);
        container.find('a[id="play-video"]').attr('href', video.url);
    }


    /// Handlers
    function onTextFocusinListener() {
        $(this).addClass('backLightFrame');
        initialText = $(this).html();
    }

    function onTextFocusoutListener() {
        frameAroundTextOff(this);
        let id = $(this).attr('id').split('_')[0];

        switch (id) {
            case 'text':
                saveText(this);
                break
            case 'trainer':
                saveTrainerText(this);
                break
            case 'securityCategory':
            case 'securityItem':
                saveSecurityText(this, id);
                break;
            case 'ruleItem':
                saveRuleText(this);
        }

        initialText = null;
    }

    function onTrainerDeleteBtnClickListener() {
        deleteTrainer(this);
    }

    function onSecurityItemDeleteBtnClickListener() {
        console.log(this);
        deleteSecurityItem(this);
    }

    function onRuleItemDeleteBtnClickListener() {
        deleteRuleItem(this);
    }

    function onVideoDeleteBtnClickListener() {
        deleteVideo(this);
    }

    function onCreateTrainerImageChangeListener() {
        cropBtnMode = 'trainer_create';
        showCropperImage(this);
    }

    function onUpdateTrainerImageChangeListener() {
        cropBtnMode = 'trainer_update';
        trainerId = $(this).parents('div[id^="trainer_"]').attr('id').split('_')[1];
        showCropperImage(this);
    }

    function onVideoPreviewChangeListener() {
        cropBtnMode = 'video_create';
        showCropperImage(this);
    }

    function onAboutUsEditVideoPreviewChangeListener() {
        cropBtnMode = 'about_us_video_update';
        showCropperImage(this);
    }

    function onCropBtnClickListener() {
        cropperData = cropperObj.getData();

        switch (cropBtnMode) {
            case 'trainer_update':
                saveTrainerImage();
                break;
            case 'trainer_create':
                updatePreview($modalAddTrainer);
                break;
            case 'video_create':
                updatePreview($modalAddVideo);
                break;
            case 'about_us_video_update':
                updatePreview($modalAboutUsEditVideo);
                break
        }

        $modalCropper.modal('hide');
        cropBtnMode = null;
    }

    function onTrainerAddBtnClickListener() {
        $modalAddTrainer.modal('show');
    }

    function onSecurityItemAddBtnClickListener() {
        securityCategoryId = $(this).parents('[id^="securityCategory_"]').attr('id').split('_')[1];
        $modalAddSecurityItem.modal('show');
    }

    function onVideoAddBtnClickListener() {
        $modalAddVideo.modal('show');
    }

    function onAboutUsVideoEditBtnClickListener() {
        $modalAboutUsEditVideo.modal('show');
    }

    function onTrainerSaveBtnClickListener() {
        saveNewTrainer();
    }

    function onSecurityItemSaveBtnClickListener() {
        saveNewSecurityItem();
    }

    function onVideoSaveBtnClickListener() {
        saveNewVideo();
    }

    function onAboutUsVideoUpdateBtnClickListener() {
        updateAboutUsVideo();
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

function videosSlickRefresh() {
    $('.slider-slick').slick('refresh');
}

function trainerSlickRemove(slickIndex) {
    $('.slides_pagination').slick('slickRemove', slickIndex);
    $('.slides').slick('slickRemove', slickIndex);
}

function videoSlickRemove(slickIndex) {
    $('.slider-slick').slick('slickRemove', slickIndex);
}

function addInvalidFeedback (modal, errors) {
    let modalId = modal.attr('id');
    let fields = modal.find('input')

    switch (modalId) {
        case 'modal_add_trainer':
            fields = fields.add(modal.find('textarea'));
            break;
    }

    $(fields).each(function (i, e) {
        let fieldName = $(e).attr('name');
        if (Object.keys(errors).includes(fieldName)) {
            $(e).addClass('is-invalid');
            $(e).parent().find('div[class="invalid-feedback"]').text(errors[fieldName]);
        } else {
            if ($(e).hasClass('is-invalid')) {
                $(e).removeClass('is-invalid');
                $(e).parent().find('div[class="invalid-feedback"]').text('');
            }
        }
    });
}

function clearFields(modal) {
    let modalId = modal.attr('id');
    let fields = modal.find('input')

    switch (modalId) {
        case 'modal_add_trainer':
            fields = fields.add(modal.find('textarea'));
            break;
    }

    $(fields).each(function (i, e) {
        if ($(e).hasClass('is-invalid')) {
            $(e).removeClass('is-invalid');
            $(e).parent().find('div[class="invalid-feedback"]').text('');
        }

        if (modalId === 'modal_add_trainer' || modalId === 'modal_add_securityItem' || modalId === 'modal_add_video')
            $(e).val('');

        if ($(e).attr('type') === 'file') {
            switch (modalId) {
                case 'modal_add_trainer':
                    $(e).prev('img').attr('src', 'https://svgsilh.com/svg/159236-9e9e9e.svg');
                    break;
                case 'modal_add_video':
                    $(e).prev('img').attr('src', 'https://svgsilh.com/svg/159236-9e9e9e.svg');
                    break;
            }
        }
    });
}
