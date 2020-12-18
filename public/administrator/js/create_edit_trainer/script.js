$(document).ready(function () {
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
           // viewMode: 1,
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    $('#crop').on('click', function () {
        let initialPreviewURL;
        var canvas;

        $modal.modal('hide');

        ///////


        if (cropper) {
            canvas = cropper.getCroppedCanvas();
            initialPreviewURL = preview.src;
            preview.src = canvas.toDataURL();

            let cropData = cropper.getData();
            cropData = JSON.stringify(cropData);

            $('#image-data').attr('value', cropData);
        }


    })
})




















/*$(document).ready(function () {
    $('#imageInput').on('change', function () {

        if (this.files && this.files[0]) {
            let reader = new FileReader();

            reader.onload = function (e) {
                $('#imageImg').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }

        $('#modal').modal('show');
    })


    window.addEventListener('DOMContentLoaded', function () {

        var image = document.getElementById('imageImg');
        var cropBoxData;
        var canvasData;
        var cropper;

        $('#modal').on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                autoCropArea: 1,
                ready: function () {
                    //Should set crop box data first here
                    //cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
                    croppable = true;
                }
            });
        }).on('hidden.bs.modal', function () {
            cropBoxData = cropper.getCropBoxData();
            canvasData = cropper.getCanvasData();

            $('#imagePreview').attr('src', canvasData.toDataURL())
            console.log(cropper.getCroppedCanvas());
            console.log(canvasData);
            cropper.destroy();
        });


    });
});*/






















