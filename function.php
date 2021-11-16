<?php

function t1()
{
    $book1_json_string = file_get_contents('./one/book1.json');
    $book1_array = json_decode($book1_json_string, true);
    $new_string = '';
    $count = 0;
    foreach ($book1_array as $key => $value) {
        if (count($book1_array) - 1 > $count++) {
            $new_string .= $key . ' ' . $value . "<br>";
        } else {
            $new_string .= $key . ' ' . $value;
        }
    }
    echo $new_string;
}

function t2($path)
{
    $book2_json_string = file_get_contents($path);
    return json_decode($book2_json_string, true);
}

function t3($path)
{
    $book2_json_string = file_get_contents($path);
    $book2_array = json_decode($book2_json_string, true);
    $out = "";
    for ($i = 0; $i < count($book2_array); $i++) {
        $out .= $book2_array[$i]['name'] . ' ';
    }
    return $out;
}

function t4($arr, $path)
{
    // преобразование массива в json-строку
    $book3_json_string = json_encode($arr);
//    Запись json-строки в файл
    file_put_contents($path, $book3_json_string);
    //далее все, что касается вывода на страницу....
    $book3_new_json_string = file_get_contents($path);
    var_dump(json_decode($book3_new_json_string, true));


}

function t5($path)
{
    // строка
    $json_string = file_get_contents($path);
    // в массив
    $json_array = json_decode($json_string, true);
    //возвращаем соличество
    return count($json_array);
}
