<?php
    $sql = "SELECT `name`, `email`, `text` FROM `reviews` ORDER BY `id` DESC;";
    $result = $conn -> query($sql);
    $list = '';
    $list .= '<table>';
    while ($row = $result->fetch(PDO::FETCH_NUM)) {
        $list .= '<tr>'.implode('', array_map(function($x){return '<td>'.$x.'</td>';}, $row)).'</tr>';
    }
    $list .= '</table>';
    return $list;