<div class="modal fade" id="deleteMessageForm" tabindex="-1" aria-labelledby="deleteMessage" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="del-form-title">Удалить сообщение</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 form-edit" method="post" action="">
                    <div class="col-md-12 ">
                        <label class="form-label-del">Вы действильно желаете удалить сообщение от <span class="author-message"></span>?</label>
                        <input class="del-mes-id" type="hidden" id="del-mes-id" name="del-mes-id" data-mesid="">
                    </div>
                    <div class="col-md-12 ">
                        <div class="col-12 btn-block">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить</button>
                            <button type="submit" class="btn btn-primary btn-del" name="del-btn">Удалить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>