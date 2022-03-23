<?php
require_once('inc/db.php');
require_once('inc/connect.php');


date_default_timezone_set('Asia/Bangkok');

$messages = getData();
if (!empty($_POST['name']) && !empty($_POST['message'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $sendingDate = date_format(date_create(date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME'])), 'Y-m-d H:i:s');

    write2Db($name, $message);
    // редирект для сброса запроса при обновлении стр
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
} else {
    echo '<span>Заполните все поля</span>';
}

// echo '<br>';
$messages = getData();    // Получить данные из БД
// print_arr($messages);    // Распечатать массив
// updateData(6, 'Юсуф', 'О, привет!');
// deleteData(6);
?>

<?php
if (isset($_POST['edit-id']) && isset($_POST['edit-name']) && isset($_POST['edit-message'])) {
    if (!empty($_POST['edit-name']) && !empty($_POST['edit-message'])) {
        $id = $_POST['edit-id'];
        $name = $_POST['edit-name'];
        $message = $_POST['edit-message'];
        // $sendingDate = date_format(date_create(date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME'])), 'Y-m-d H:i:s');

        updateData($id, $name, $message);
        // редирект для сброса запроса при обновлении стр
        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    } else {
        echo '<span>Заполните все поля</span>';
    }
}
?>

<?php
if (isset($_POST['del-btn'])) {
    $id = $_POST['del-mes-id'];
    deleteData($id);
    // редирект для сброса запроса при обновлении стр
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
}
?>

<div class="messages">
    <?php if (!empty($messages)) : ?>
        <?php foreach ($messages as $message) : ?>
            <div class="message" data-mesid="<?= $message['id'] ?>">
                <div class="message__body">
                    <div class="date">
                        Дата: <?= $message['date'] ?>
                    </div>
                    <div class="name">
                        Автор: <span class="name__text"><?= $message['name'] ?></span>
                    </div>
                    <div class="text">
                        Сообщение: <span class="text__text"><?= nl2br(htmlspecialchars($message['message'])) ?></span>
                    </div>
                </div>
                <div class="message__btn">
                    <button type="submit" class="btn btn-action btn-edit" data-bs-toggle="modal" data-bs-target="#editMessageForm" data-mesid="<?= $message['id'] ?>" name=" btn-edit">
                        <i class="fa-solid fa-pencil"></i>
                    </button>
                    <button type="submit" class="btn btn-action btn-delete" data-bs-toggle="modal" data-bs-target="#deleteMessageForm" data-mesid="<?= $message['id'] ?>" name=" btn-delete">
                        <i class="fa-solid fa-circle-minus"></i>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>



<?php require_once('inc/forms/editForm.php'); ?>
<?php require_once('inc/forms/deleteForm.php'); ?>