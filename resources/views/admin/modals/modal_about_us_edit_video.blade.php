<!-- Modal -->
<div class="modal fade" id="modal_about_us_edit_video" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Изменить видео</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modal_about_us_edit_video').modal('hide')"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Ссылка на видео</label>
                        <input type="text" class="form-control" id="text" name="url" placeholder="Введите ссылку" >
                    </div>
                    <br />
                    <div class="form-group">
                        <label class="label" data-toggle="tooltip" title="Выберите превью">
                            <img class="rounded" id="preview" src="https://svgsilh.com/svg/159236-9e9e9e.svg" alt="preview" width="100px">
                            <input type="file" class="sr-only" id="input" name="image" accept="image/*" style="position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0">
                            <div class="invalid-feedback"></div>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a class="btn aos-init aos-animate" data-aos="zoom-in" id="video_save_btn" style="padding: 20px 30px">Сохранить</a>
            </div>
        </div>
    </div>
</div>
