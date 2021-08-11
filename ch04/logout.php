<?php
    session_start();
    unset($_SESSION["username"]); // 세션 삭제
    setcookie("username",""); // 쿠키 삭제
    setcookie("password",""); // 쿠키 삭제
    header("Location:http://localhost:63342/htdocs/ch04/login_form.php");
    ?>