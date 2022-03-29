<?php
session_start();
const login = 'yousuf';
// $_SESSION['admin'] = 'andrey';
// $_SESSION['name'] = 'Андрюха';
// session_unset();
// session_destroy();
if (!empty($_POST['login'])) {
    if ($_POST['login'] == login) {
        $_SESSION['admin'] = login;
        $_SESSION['res'] = 'ВЫ успешно вошли';
    } else {
        $_SESSION['res'] = 'Неверный логин';
    }
    header('Location: index.php');
    exit;
}
?>

<?php
if (isset($_SESSION['res'])) {
    echo $_SESSION['res'];
    unset($_SESSION['res']);
}
?>
<form action="" method="post">
    <div>
        <input type="text" name="login" placeholder="Введите логин">
    </div>
    <br>
    <div>
        <button type="submit">Отправить</button>
    </div>
</form>

<ul>
    <li><a href="index.php">index</a></li>
    <li><a href="sess1.php">sess1</a></li>
    <li><a href="sess2.php">sess2</a></li>
</ul>

<!-- <form class="row g-3 form-authorization" method="post" action="authorization.php">
    <div class="col-md-12 ">
        <label for="inputLogin" class="form-label">Логин</label>
        <input type="text" class="form-control" id="inputLogin" name="login" placeholder="Введите логин">
    </div>
    <div class="col-md-12 ">
        <label for="inputPass" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="inputPass" name="pass" placeholder="Введите пароль">
    </div>
    <div class="col-12 btn-block">
        <button type="submit" class="btn btn-primary">Войти</button>
    </div>
</form> -->