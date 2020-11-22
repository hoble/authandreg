<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    $password = md5($password."q4EcQS8DfQNdz7r");
    $mysql = new mysqli('localhost', 'root', 'root', 'register-bg');

    $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $user = $result -> fetch_assoc();
    if (count($user) == 0) {
        echo "Пользователь не найден";
        header('Location: /');
        exit();
    }
    setcookie('user', $user['name'], time() + 3600, "/");

    $mysql -> close();
    header('Location: /');
?>