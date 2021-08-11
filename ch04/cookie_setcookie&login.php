<?php
    // 세션 개념도 추가해보기(3, 11번째 줄)
    session_start();

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
//    $chkbox = $_REQUEST["chkbox"]; // 클라이언트가 chkbox를 안 누르고 요청 보내면 Undefined Index 오류 발생. 이를 위해 isset() 사용





    // -------------------------------

    // isset() -> 'chkbox'라는 변수가 할당된 상태로 왔는지, 안 왔는지를 확인해줌.
    // 기존 =  if ($chkbox != null)
    if ($password == "1234" && $username == "admin"){
        // admin 로그인 성공한 경우에만 쿠키생성 / 세션 생성
        if (isset($_REQUEST['chkbox'])) {
            $a = setcookie("username", $username, time() + 60);
            $b = setcookie("password", $password, time() + 60); //time() = expire 시간 설정하는 것)
        }
        $_SESSION["username"] = $username;
        header("Location:http://localhost:63342/htdocs/ch04/login_form.php");
        exit;
    } else {
        ?>
        <script>
        alert("관리자 아이디와 비밀번호를 다시 확인해주세요.")
        history.back()
        </script>
    <?php } ?>
<!--    // 쿠키 사용 방법 #1(php.ini에서 register_globals가 On인 경우)-->
<!--    // print "쿠키 'userId' : $userId <br>";-->
<!--    // print "쿠키 'username' : $username <br>";-->
<!---->
<!--    // 쿠키 사용 방법 #2(Off인 경우)-->
<!--    // $userId = $_COOKIE["userId"];-->
<!--    // $username = $_COOKIE["username"];-->
<!---->
<!--    // print "쿠키 'userId' : $userId <br>";-->
<!--    // print "쿠키 'username' : $username <br>";-->