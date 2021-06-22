<!-- Modal -->
<div class="modal fade" id="modalTrainerVideo" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalTrainerVideo').modal('hide')"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="text">Ссылка на видео</label>
                        <input type="text" class="form-control" id="text" name="video" placeholder="Введите ссылку" >
                        <small id="emailHelp" class="form-text text-muted">(Ссылка вида: https://www.youtube.com/watch?v=XXXXXXXXXXX или https://youtu.be/XXXXXXXXXXX)</small>
                        <div class="invalid-feedback"></div>
                    </div>
                    <br />
                </form>
            </div>
            <div class="modal-footer">
                <a class="btn aos-init aos-animate" data-aos="zoom-in" id="trainerVideoSaveBtn" style="padding: 20px 30px">Сохранить</a>
            </div>
        </div>
    </div>
</div>
