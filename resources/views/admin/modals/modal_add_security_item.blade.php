<!-- Modal -->
<div class="modal fade" id="modal_add_securityItem" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Добавить пункт</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modal_add_securityItem').modal('hide')"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Текст</label>
                        <input type="text" class="form-control" id="text" name="text" placeholder="Введите текст" >
                        <div class="invalid-feedback"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a class="btn aos-init aos-animate" data-aos="zoom-in" id="securityItem_save_btn" style="padding: 20px 30px">Сохранить</a>
            </div>
        </div>
    </div>
</div>
