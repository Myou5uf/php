const editModalForm = document.getElementById("editMessageForm");
const deleteModalForm = document.getElementById("deleteMessageForm");

const messages = document.querySelectorAll(".message");

const editBtns = document.querySelectorAll(".btn-edit");
const deleteBtns = document.querySelectorAll(".btn-delete");
// const formEdintBtn = document.querySelector(".form-edit-btn");
const formEditInputId = document.getElementById("input-edit-id");
const editNameInput = document.getElementById("edit-name");
const editMessageArea = document.getElementById("edit-message");

const authorLabel = deleteModalForm.querySelector(".author-message");
const delMesIdInput = deleteModalForm.querySelector(".del-mes-id");

console.log(formEditInputId);
// console.log(deleteModal);

editBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        let id = btn.dataset.mesid;
        const message = document.querySelector(`.message[data-mesid="${id}"]`);
        const nameText = message.querySelector(".name__text");
        const messageText = message.querySelector(".text__text");

        formEditInputId.dataset.mesid = id;
        formEditInputId.value = id;

        editNameInput.value = nameText.innerText;
        editMessageArea.value = messageText.innerText;
        message.style.backgroundColor = "#79b8f233";
        // console.log("ЗНачение:", editNameInput.value);
    });
});

deleteBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        let id = btn.dataset.mesid;
        const message = document.querySelector(`.message[data-mesid="${id}"]`);
        const nameText = message.querySelector(".name__text");

        delMesIdInput.dataset.mesid = id;
        delMesIdInput.value = id;
        authorLabel.innerText = `"${nameText.innerText}"`;
        console.log(id);
        console.log(delMesIdInput);
    });
});
