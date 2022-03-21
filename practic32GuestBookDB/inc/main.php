<?php
require_once('inc/db.php');
require_once('inc/connect.php');

date_default_timezone_set('Asia/Bangkok');

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

echo '<br>';
$messages = getData();    // Получить данные из БД
// print_arr($messages);    // Распечатать массив
// updateData(6, 'Юсуф', 'О, привет!');
// deleteData(6);
?>

<?php if (!empty($messages)) : ?>
    <?php foreach ($messages as $message) : ?>
        <div class="message">
            <div class="name">Автор: <?= $message['name'] ?> | Дата: <?= $message['date'] ?> </div>
            <div class="text">Сообщение: <?= nl2br(htmlspecialchars($message['message'])) ?></div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>