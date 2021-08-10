<?php
    // cookie_setcookie.php 실행하여 쿠키 생성 -> 클라이언트 로컬에 쿠키 저장됨 -> 따라서 cookie_check.php를 실행해서 쿠키를 확인하면
    // 클라이언트 로컬에 저장되어있는 쿠키가 유효하므로 불러와서 사용이 가능함.

    // 쿠키 사용 방법 #2(Off인 경우)
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];
    print "쿠키 'userId' : $username <br>";
    print "쿠키 'username' : $password <br>";
?>