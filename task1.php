<!--С помощью рекурсии организуйте функцию возведения числа в степень.-->
<!--Формат: function power($val, $pow), где $val – заданное число, $pow – степень.-->

<?php
    function power($val, $pow){
        if($pow == 0) return 1;
        return $val * power($val, $pow - 1);
    }

    echo power(2, 6);
?>