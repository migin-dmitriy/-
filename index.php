<?php require_once "form.php" ?>

<!doctype html>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <title>Главная</title>
    <<link rel="stylesheet" href="assets/css/style.css">

</head>
<body bgcolor="#ffa07a">
<div>

    <form action="./" method="post">
        <label>Введите ваш логин:</label> <input name="login"/><br>
        <label for="password"> Введите пароль:</label><input type="password" name="password"/><br>
        <label>Введите Фамилию:</label> <input name="surname"/><br>
        <label>Введите Имя:</label> <input name="name"/><br>

        <button type="submit">Отправить</button>

    </form>


    <?php $validate = valid($_POST)?>
    <?php if (!empty($validate['error']) and $validate['error']): ?>
        <?php foreach ($validate['messages'] as $message): ?>
            <p style="color: red">
                <?= $message ?>
            </p>
        <?php endforeach;  ?>
    <?php endif;?>
    <?php if (!empty($validate['success']) and $validate['success']):?>
        <?php foreach ($validate['messages'] as $message):?>
            <p style="color: green">
                <?= $message ?>
            </p>
        <?php endforeach;?>
    <?php endif;?>

    <style lang="html">

        .reg-form {
            text-align: left;
            width: 40%;
        }

        .content label, input {
            width: 70%;
            display: block;
            padding: 5px;
        }

    </style>
</div>
</body>
