<?php
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Недопустимая длина логина";
        exit();
    } else if(mb_strlen($name) < 1 || mb_strlen($name) > 50) {
        echo "Недопустимая длина имени";
        exit();
    } else if(mb_strlen($surname) < 2 || mb_strlen($surname) > 40) {
        echo "Недопустимая длина пароля (от 2 до 11 символов)";
        exit();
    } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 11) {
        echo "Недопустимая длина пароля (от 2 до 11 символов)";
        exit();
    } else if(mb_strlen($email) < 2 || mb_strlen($email) > 40) {
        echo "Недопустимая длина пароля (от 2 до 11 символов)";
        exit();
    }
    
    $pass = md5($pass."gadfg1244126");

    $mysql = new mysqli('localhost', 'root', '', 'register-bd');
    $mysql->query("INSERT INTO `users` (`name`, `surname`, `login`, `email`, `pass`)
    VALUES('$name', '$surname', '$login', '$email', '$pass')");

    $mysql->close();

    header('Location: /');
?>