<?php
$colors = array(
    array(
        'color' => 'black',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#000',
        ),
    ),
    array(
        'color' => 'white',
        'category' => 'value',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FFF',
        ),
    ),
    array(
        'color' => 'red',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'blue',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#00F',
        ),
    ),
    array(
        'color' => 'yellow',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'green',
        'category' => 'hue',
        'type' => 'secondary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#0F0',
        ),
    ),
    array(
        'color' => 'gray',
        'category' => 'value',
        'type' => 'secondary',
        'code' => array(
            'rgba' => array(
                0 => 128,
                1 => 128,
                2 => 128,
                3 => 1,
            ),
            'hex' => '#808080',
        ),
    ),
);

//Добавил в основной массив серый цвет с категорией value и типом secondary, чтобы проверить работу кода с массивом с любым объемом данных

// Копирую массив colors в переменные
$hueCategory = $colors;
$valueCategory = $colors;

// удаляю из новых массивов ненужную информацию. Получаю два новых массива $hueCategory и $valueCategory с требуемой выборкой
for ($i = 0; $i < count($colors); $i++) {
    foreach ($hueCategory[$i] as $key => $category) {
        if ($key == "category" && $category == "value") {
            unset($hueCategory[$i]);
        }
    }
    foreach ($valueCategory[$i] as $key => $category) {
        if ($key == "category" && $category == "hue") {
            unset($valueCategory[$i]);
        }
    }
}

// перебираю массив $hueCategory и вывожу из него данные
echo "<h3>Вывод информации по цветам из массива \$hueCategory:</h3> <br>";
foreach ($hueCategory as $key => $category) {
    foreach ($hueCategory[$key] as $key_2 => $find_value) {
        if ($key_2 == "color") {
            $color = $find_value;
        }
        if ($key_2 == "type") {
            $type = $find_value;
        }
        if ($key_2 == "code") {
            $hex = $hueCategory[$key]["code"]["hex"];
            $k = 0;
            foreach ($hueCategory[$key]["code"]["rgba"] as $key_3 => $find_value) {
                ${"index_$k"} = $find_value;
                $k++;
            }
        }
    }
    echo "Это цвет " . $color . ", он из категории \$hueCategory. Тип цвета " . $type . "
    . В данном цвете следующие коды rgba: (" . $index_0 . ", " . $index_1 . ", " . $index_2 . ", " . $index_3 . ") 
    и такой hex код: " . $hex . "<br>";
}
unset($type); // уничтожаю переменную, чтобы она не мешала выводу данных из массива $valueCategory. Например в случае отсутствия у цвета параметра "тип"
echo "<br><hr><br>";

echo "<h3>Вывод информации по цветам из массива \$valueCategory:</h3> <br>";
foreach ($valueCategory as $key => $category) {
    foreach ($valueCategory[$key] as $key_2 => $find_value) {
        if ($key_2 == "color") {
            $color = $find_value;
        }
        if ($key_2 == "type") {
            $type = $find_value;
        }
        if ($key_2 == "code") {
            $hex = $valueCategory[$key]["code"]["hex"];
            $k = 0;
            foreach ($valueCategory[$key]["code"]["rgba"] as $key_3 => $find_value) {
                ${"index_$k"} = $find_value; // Динамически создаю переменные и присваиваю им значения rgba
                $k++;
            }
        }
    }
    if (!isset($type)) { // проверяет существование параметра "тип" и при false выводит нижеследующий итог
        $type = "<b>НЕ ЗАДАН</b>";
    };
    echo "Это цвет " . $color . ", он из категории \$valueCategory. Тип цвета " . $type . "
    . В данном цвете следующие коды rgba: (" . $index_0 . ", " . $index_1 . ", " . $index_2 . ", " . $index_3 . ") 
    и такой hex код: " . $hex . "<br>";
}

//echo "<br>";
//echo '<pre>';
//print_r($hueCategory);
//echo '</pre>';