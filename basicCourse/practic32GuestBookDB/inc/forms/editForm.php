<div class="modal fade" id="editMessageForm" tabindex="-1" aria-labelledby="editMessage" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="form-title">Редактировать сообщение</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 form-edit" method="post" action="">
                    <div class="col-md-12 ">
                        <label for="input-name" class="form-label">Автор</label>
                        <input type="hidden" class="form-control" id="input-edit-id" name="edit-id" data-id="">
                        <input type="text" class="form-control" id="edit-name" name="edit-name">
                    </div>
                    <div class="col-md-12 ">
                        <label for="textarea-message" class="form-label">Сообщение</label>
                        <textarea class="form-control form-textarea" id="edit-message" name="edit-message"></textarea>
                        <div class="col-12 btn-block">
                            <button type="submit" class="btn btn-primary form-edit-btn">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>