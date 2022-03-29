<?php
require_once('inc/func.php');

date_default_timezone_set('Asia/Bangkok');
if (!empty($_POST['name']) && !empty($_POST['message'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $sendingDate = date_format(date_create(date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME'])), 'Y-m-d H:i:s');

    write2file($name, $message, $sendingDate);
    // редирект для сброса запроса при обновлении стр
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
} else {
    echo '<span>Заполните все поля</span>';
}

echo '<br>';
$message = getMessage();    // Получить все сообщения в виде строки
$message = getArrayFromString($message);    // Получить все сообщения в виде массива
print_arr($message);    // распечатать массив
?>

<?php if (!empty($message)) : ?>
    <?php foreach ($message as $item) : ?>
        <?php $message = getFormatMessage($item); ?>
        <div class="message">
            <div class="name">Автор: <?= $message[0] ?> | Дата: <?= $message[2] ?> </div>
            <div class="text">Сообщение: <?= nl2br(htmlspecialchars($message[1])) ?></div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>