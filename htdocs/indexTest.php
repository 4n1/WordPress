<?php
$todo_area = array(
    'header' => '今日のメニュー',
    'todo' => array('ジョギングをする', '切手を買う', 'ホテルの予約をする', 'お菓子を買う')
);

function display_list($array)
{
    $list = '<h2>' . $array['header'] . '</h2>';
    $list .= '<ul>';
    
    foreach ($array['todo'] as $v) {
        $list .= '<li>'. $v . '</li>';
    }
    $list .= '</ul>';
    
    return $list;
}
?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>関数の引数に配列を渡す - WordPressのためのPHP入門</title>
    </head>

    <body>
        <ul>
            <?php
                echo display_list($todo_area);
            ?>
        </ul>
    </body>

    </html>
