<?php
    session_start();
    unset($_SESSION["username"]);
    setcookie("username","");
    setcookie("password","");
    header("Location:http://localhost:63342/htdocs/ch04/login_form.php");
    ?>