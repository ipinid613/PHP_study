<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head lang="ko">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>
        관리자 로그인 페이지
        </title>
    </head>
    <body>
    <?php
    if(isset($_COOKIE["username"])){ // 로그인 유지가 되어있는 경우(쿠키가 있는 경우)
        $_SESSION["username"] = $_COOKIE["username"]; // 세션에 쿠키값을 할당해줌. (아래 38번째 줄)에서 유저명을 필요로 하기 때문
    }

    if (!isset($_SESSION['username'])){ // 세션이 없는 경우, 로그인 폼을 표시해줌.
    ?>
    <form action="cookie_setcookie&login.php" method="post">
        <table border="1">
            <tr>
                <td><input type="text" required placeholder="아이디" name="username"></td>
            </tr>
            <tr>
                <td><input type="password" required placeholder="비밀번호" name="password"></td>
            </tr>
            <tr align="center">
                <td>
                    <input type="checkbox" value="yes" name="chkbox">로그인 상태 유지
                    <input type="submit" value="로그인">
                </td>
            </tr>
        </table>
    </form>
    <?php } else { // 세션이 있는 경우
        print $_SESSION["username"]."님 환영합니다.";?>
<!--로그인한 유저의 이름이 필요하므로 세션에 유저명을 담은 쿠키를 할당(로그인 유지기능 때문에 쿠키가 있는 경우, 15번째 줄에서 처럼 처리)해주고,
    쿠키가 없는 경우는 세션 그 자체를 그냥 표시. 즉, 쿠키가 있든 없든 세션을 표기해주기 위해 38번줄 코드가 필요함 (admin이라고 표시됨)-->
        <button><a href="logout.php">로그아웃</a></button>
           <?php } ?>
    </body>
</html>