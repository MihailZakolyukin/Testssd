<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
if ($_SESSION['user']['age'] < 18){
    echo "<a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' style='position: absolute; top: 10%; color: red;'> Акция такая-то для всех моложе 18 лет</a>";
}
if ($_SESSION['user']['age'] > 50){
    echo "<a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' style='position: absolute; top: 10%; color: red;'>Акция другая для всех старше 50</a>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name']?></h2>
        <h3 style="margin: 10px 0;"><?= "Возраст: ", $_SESSION['user']['age']?></h3>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>