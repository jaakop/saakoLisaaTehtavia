<?php

$user = "jaakkeli";
$hash = '$2y$10$RQlTZa//c/IBJYJtgHv0GeZOxqLFAoRZePv3snxVVYl.b7cOtePmS';

if(isset($_POST["submit"])) {
    if($_POST["username"] == $user && password_verify($_POST["password"], $hash)){
        setcookie("loggedin", "true", time() + (3600), "/");
        header('Location: dashboard');

    } else {
        echo "Incorrect Login";
    }
}?>