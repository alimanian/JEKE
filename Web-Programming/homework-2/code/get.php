<?php

if (empty($_GET['count']))
    exit("تعداد آرایه نمی‌تواند خالی باشد.");

$count = $_GET['count'];

$indexed_array = [];
for ($i = 0; $i < $count; $i++) {
    $indexed_array[$i] = rand(1000, 2000);
}

foreach ($indexed_array as $key => $value) {
    echo $key . ' ==> ' . $value . '<br>';
}