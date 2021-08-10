<?php
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $chkbox = $_REQUEST["chkbox"];

    if ($chkbox == true){
        $a=setcookie("username", $username, time()+60);
        $b=setcookie("password", $password, time()+60); //time() = expire 시간 설정하는 것)

        if ($a && $b){
            print "쿠키 'username'과 'password' 60초 유효로 생성 완료!<br>";
        }
    }else {
        print "로그인이 유지되지 않습니다.";
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