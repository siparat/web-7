<!--С помощью цикла do…while напишите функцию для вывода чисел от 0 до 10, чтобы результат выглядел -->
<!--так: 0 – это ноль 1 – нечетное число 2 – четное число 3 – нечетное число … 10 – четное число.-->

<?php

$number = 0;
do{
    echo $number;
    $descr = match(true){
        $number == 0 => " – это ноль.",
        $number % 2 == 0 => " – четное число.",
        default => " – нечетное число."
    };
    echo "$descr\n";
    $number++;
} while($number <= 10);