<!--Создать форму для загрузки файлов на сервер. Загрузить файл на сервер.-->
<!--Вывести имя загруженного файла.-->

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uploadDir = 'uploads/';
    $filename = basename($_FILES['file']['name']);
    $uploadFile = "$uploadDir$filename";
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) echo "Файл успешно загружен. $filename\n";
    else echo "Ошибка при загрузке файла.\n";

}

?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit">Загрузить</button>
</form>
