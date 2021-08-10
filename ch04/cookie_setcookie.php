<?php
    $a=setcookie("userId", "kildong");
    $b=setcookie("username","홍길동", time()+60); //time() = expire 시간 설정하는 것)

    if ($a && $b){
        print "쿠키 'userId'와 'username' 생성 완료!<br>";
        print "쿠키 'username은 60초(1분) 간 지속됨!";
    }

    // 쿠키 사용 방법 #1(php.ini에서 register_globals가 On인 경우)
    // print "쿠키 'userId' : $userId <br>";
    // print "쿠키 'username' : $username <br>";

    // 쿠키 사용 방법 #2(Off인 경우)
    // $userId = $_COOKIE["userId"];
    // $username = $_COOKIE["username"];

    // print "쿠키 'userId' : $userId <br>";
    // print "쿠키 'username' : $username <br>";
?>