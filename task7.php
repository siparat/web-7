<!--Повторите предыдущее задание, но выводите на экран только города, начинающиеся с буквы «К».-->

<?php
$regions = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Касимов", "Сасово"]
];

foreach ($regions as $region => $cities) {
    $filteredCities = array_filter($cities, fn($city) => mb_substr($city, 0, 1) === 'К');
    $cities = join(", ", $filteredCities);
    echo "$region: $cities\n";
}