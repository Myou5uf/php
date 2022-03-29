<?php
const login = 'yousuf';

setcookie('test', 'My Cookie', time() + 3600, '/');
setcookie('test2', 'My Cookie2', time() + 3600, '/');

// Удалить куки
setcookie('test2', 'My Cookie2', time() - 3600, '/');
echo '<br>';
var_dump($_COOKIE);
