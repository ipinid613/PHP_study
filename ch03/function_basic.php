<!--사용자 정의 함수-->
<?php
    function aaa() {
        print ("안녕하세요!");
    }

    aaa();
?>
<br>
<?php
    $tel = "010-1234-5678";
    $tel_long = strlen($tel);

    print "strlen() 내장함수 사용 결과 : $tel_long<br>";

    $tel1 = substr($tel, 0, 3); // 010
    $tel2 = substr($tel, 4, 4); // 1234
    $tel3 = substr($tel, 9, 4); // 5678

    print "substr() 내장함수 사용 결과 : $tel1 $tel2 $tel3 <br>";

    $phone = explode("-", $tel); // array형태로 만들어짐 -> 아래처럼 인덱스로 호출해야 함

    print "explode() 내장함수 사용 결과 : $phone[0], $phone[1], $phone[2]";
?>