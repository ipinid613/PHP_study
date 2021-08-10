<?php
// 기존 setcookie에 할당했던 값을 없애면 됨
$a=setcookie("userId", "");
$b=setcookie("username","");

if ($a && $b){
    print "쿠키 'userId'와 'username' 삭제 완료!<br>";
}
