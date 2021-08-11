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
    if(isset($_COOKIE["username"])){
        $_SESSION["username"] = $_COOKIE["username"];
    }

    if (!isset($_SESSION['username'])){
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
    <?php } else {
        print $_SESSION["username"]."님 환영합니다.";?>
        <button><a href="logout.php">로그아웃</a></button>
           <?php } ?>
    </body>
</html>