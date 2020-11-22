<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    
    if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
        echo "Недопустимая длина логина";
        exit();
    }else if(mb_strlen($name) < 5 || mb_strlen($name) > 90){
        echo "Недопустимая длина имени";
        exit();
    }else if(mb_strlen($password) < 8){
        echo "Пароль должен содержать не менее 8 символов";
        exit();
    }
    
    $password = md5($password."q4EcQS8DfQNdz7r");

    $mysql = new mysqli('localhost', 'root', 'root', 'register-bg');
    $mysql -> query("INSERT INTO `users` (`login`, `password`, `name`) VALUES('$login', '$password', '$name')");

    $mysql -> close();
    header('Location: /');

?>