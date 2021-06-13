<meta charset="utf-8"><link rel="stylesheet" href="//kodaktor.ru/css/formstyle1">
<h1>Работа с отзывами</h1>
<?php
    $conn = require_once('bd.php');
    $conn -> exec('SET CHATACTER SET utf8');
    $f = '<h2>Форма для заполнения</h2>';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $r = array_map(function($x){return htmlentities($x);},
            [
                $_POST['name'] ?? 'Unknown user',
                $_POST['email'] ?? 'anon@mail.ru',
                $_POST['text'] ?? 'Пустое сообщение'
            ]
        );
        $sql = "INSERT INTO `reviews` (`name`, `email`, `text`) VALUES (?, ?, ?);";
        $result = $conn -> prepare($sql);
        $result -> execute($r);
        if ($result) {
            $f = '<style>.right {width: 60%; margin-left: 35%; zoom: 80%}</style>';
            $f .= '<div class="right"><h2>Добавить ещё один отзыв</h2></div>';
            $i = '<h3>Данные успешно добавлены, спасибо!</h3>';
            $log = fopen('log.txt', 'a'); fwrite($log, $conn -> lastInsertId());
            fwrite($log, "\n"); fclose($log);
        } else {
            $i = '<h4>Что-то не так!</h4>';
        }
        echo $i;
    }
    echo $f;
    echo "<div class=\"right\">";
    echo "<form method=\"post\" action=\"{$_SERVER['SCRIPT_NAME']}\">";
    echo require_once('form.php');
    echo "</form><div>";
    echo "<h2>Список отзывов</h2>\n";
    echo require_once('table.php');