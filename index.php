<?php
echo 'ДЗ з прізвищем <br><br>';
$last_name = "BondarenkoAndri";
$length_name = strlen($last_name);
const SMALL_SURNAME = 5;
const MEDIUM_SURNAME = 10;
const LARGE_SURNAME = 15;

if ($length_name <= SMALL_SURNAME) echo "Довжина вашого прізвища дорівнює " . $length_name . " і вона менше або дорівнює " . SMALL_SURNAME;
elseif ($length_name <= MEDIUM_SURNAME) echo "Довжина вашого прізвища дорівнює " . $length_name . " і вона менше або дорівнює " . MEDIUM_SURNAME . " i бiльша нiж " . SMALL_SURNAME;
elseif ($length_name <= LARGE_SURNAME) echo "Довжина вашого прізвища дорівнює " . $length_name . " і вона менше або дорівнює " . LARGE_SURNAME. " i бiльша нiж " . MEDIUM_SURNAME;
else echo "Довжина вашого прізвища дорівнює " . $length_name . " і вона бiльша за " . LARGE_SURNAME;
echo "<hr><br>";

echo 'ДЗ з вiком<br><br>';
$age = 41;
const AGE_VAR_1 = 20;
const AGE_VAR_2 = 40;
const AGE_VAR_3 = 60;
const AGE_VAR_4 = 80;

switch ($age){
    case $age <= AGE_VAR_1:
        echo "Ваш вiк менше або дорівнює " . AGE_VAR_1;
        break;
    case $age > AGE_VAR_1 && $age <= AGE_VAR_2:
        echo "Ваш вiк бiльше " . AGE_VAR_1 . " але менше або дорівнює " . AGE_VAR_2;
        break;
    case $age > AGE_VAR_2 && $age <= AGE_VAR_3:
        echo "Ваш вiк бiльше " . AGE_VAR_2 . " але менше або дорівнює " . AGE_VAR_3;
        break;
    case $age > AGE_VAR_3 && $age <= AGE_VAR_4:
        echo "Ваш вiк бiльше " . AGE_VAR_3 . " але менше або дорівнює " . AGE_VAR_4;
        break;
    default:
        echo "Ваш вiк бiльше " . AGE_VAR_4;
}
