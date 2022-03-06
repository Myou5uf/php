<?php

setcookie('test', 'Password', time() + 3600);
setcookie('tes2', 'Login', time() + 3600);

echo $_COOKIE['test'];
echo '<br>';
echo $_COOKIE['test2'];

var_dump($_COOKIE);
