<!-- Modal -->
<div class="modal fade" id="modal_cropper" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Обрезать фото</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modal_cropper').modal('hide')"></button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <img id="cropper_image" src="#" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn aos-init aos-animate" data-aos="zoom-in" id="crop_btn" style="padding: 20px 30px">Сохранить</a>
            </div>
        </div>
    </div>
</div>
