<!--Напишите функцию, которая вычисляет текущее время и возвращает -->
<!--его в формате с правильными склонениями, например: 22 часа 15 минут 21 час 43 минуты.-->

<?php

function getCurrentTime() {
    $hours = 22;
    $minutes = 30;

    $hourWord = getWord($hours, ['час', 'часа', 'часов']);
    $minuteWord = getWord($minutes, ['минута', 'минуты', 'минут']);

    return "$hours $hourWord $minutes $minuteWord";
}

function getWord($num, $forms) {
    $num = abs($num) % 100;
    $n1 = $num % 10;

    if ($num > 10 && $num < 20) return $forms[2];
    if ($n1 > 1 && $n1 < 5) return $forms[1];
    if ($n1 == 1) return $forms[0];

    return $forms[2];
}

echo getCurrentTime();

