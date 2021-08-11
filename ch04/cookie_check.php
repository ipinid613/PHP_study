<?php
    // cookie_setcookie&login.php 실행하여 쿠키 생성 -> 클라이언트 로컬에 쿠키 저장됨 -> 따라서 cookie_check.php를 실행해서 쿠키를 확인하면
    // 클라이언트 로컬에 저장되어있는 쿠키가 유효하므로 불러와서 사용이 가능함.

    session_start();
    print $_SESSION['username']."님의 방문을 환영합니다."; // $_SESSION은 전역변수이므로 다른 php파일에서 선언한 $_SESSION['username']
    //이 이 php 파일에서도 동일하게 불러와지는 것을 확인
    // 쿠키 사용 방법 #2(Off인 경우)
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];
    print "쿠키 'userId' : $username <br>";
    print "쿠키 'username' : $password <br>";

?>