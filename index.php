<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="container mt-4">
        <?php
            if ($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <form action="validation-form/check.php" method="POST">
                    <h1 class="title">Регистрация</h1>
                    <input type="text" class="form-control mb-2" name="login" id="login" placeholder="Придумайте логин">
                    <input type="text" class="form-control mb-2" name="name" id="name" placeholder="Введите Ваше имя">
                    <input type="password" class="form-control mb-2" name="pass" id="pass" placeholder="Придумайте пароль">
                    <button class="btn btn-success" type="submit">Зарегестрироваться</button>
                </form>
            </div>
            <div class="col">
                <form action="validation-form/auth.php" method="POST">
                    <h1 class="title">Авторизация</h1>
                    <input type="text" class="form-control mb-2" name="login" id="login" placeholder="Введите ваш логин">
                    <input type="password" class="form-control mb-2" name="pass" id="pass" placeholder="Введите ваш пароль">
                    <button class="btn btn-success btn-signin" type="submit">Войти</button>
                </form>
            </div>
        </div> 
        <?php else:?>
            <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="validation-form/exit.php">здесь</a></p>
        <?php endif;?>
    </div>
</body>
</html>