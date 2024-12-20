<!--Создайте калькулятор, который будет определять тип выбранной пользователем операции,-->
<!--ориентируясь на нажатую кнопку операции. Данные, введённые пользователем в поля, должны-->
<!--сохраняться и выводиться вместе с результатом вычисления.-->

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = null;

    switch ($operation) {
        case '+': $result = $num1 + $num2; break;
        case '-': $result = $num1 - $num2; break;
        case '*': $result = $num1 * $num2; break;
        case '/': $result = $num2 != 0 ? $num1 / $num2 : 'Деление на ноль'; break;
    }

    echo "Результат: $result";
}
?>
<form method="post">
    <input type="number" name="num1" required>
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="num2" required>
    <button type="submit">Посчитать</button>
</form>
