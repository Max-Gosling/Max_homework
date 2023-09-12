<?php
$number1 = 20;
$number2 = 5;
if ($number1 > 0 && $number2 > 0){
    echo 'Оба положительные';
}
echo $number1 + $number2;
echo $number1 - $number2;
echo $number1 * $number2;
if ($number2 == 0){
    echo 'Деление на ноль невозможно';
}
else{
    echo $number1 / $number2;
}
?>