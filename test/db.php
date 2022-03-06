<?php
function connect_db()
{
    $link = mysqli_connect('localhost', 'mysql', '', 'catalog'); //хост/пользователь/пароль/имя бд
    if (mysqli_connect_errno()) {
        echo 'Ошибка в подключении к БД (' . mysqli_connect_errno() . '): ' . mysqli_connect_error();
        exit();
    } else {
        echo 'БД подключено';
    }

    return $link;
}
function select_db($link, $table)
{
    $sql = "SELECT * FROM $table;";
    $result = mysqli_query($link, $sql);
    // $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //Создаем масив где ключ массива является ID меню
    $cat = array();
    while ($row = $result->fetch_assoc()) {
        $cat[$row['id_chapter']] = $row;
    }

    return $cat;
}
//Функция построения дерева из массива от Tommy Lacroix
function getTree($dataset)
{
    $tree = array();

    foreach ($dataset as $id => &$node) {
        //Если нет вложений
        if (!$node['id_parent']) {
            $tree[$id] = &$node;
        } else {
            //Если есть потомки то перебераем массив
            $dataset[$node['id_parent']]['childs'][$id] = &$node;
        }
    }
    return $tree;
}
//Шаблон для вывода меню в виде дерева
function showMenu($catalog)
{
    // <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Добавить новый раздел</button>
    $menu = '<li> <a href="#" title="' . $catalog['name'] . '">' . $catalog['name'] . ' </a>' . '<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">' . '<i class="fa-solid fa-plus"></i>' . '</button>';

    if (isset($catalog['childs'])) {
        $menu .= '<ul>' . showCat($catalog['childs']) . '</ul>';
    }
    $menu .= '</li>';

    return $menu;
}

/**
 * Рекурсивно считываем наш шаблон
 **/
function showCat($data)
{
    $string = '';
    foreach ($data as $item) {
        $string .= showMenu($item);
    }
    return $string;
}
