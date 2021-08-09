<!--for문 문법
    for(int $a; $a <= 9; $a++;) {
    실행문
    }-->

<!-- while문을 for문으로 변환해보기 -->
<!-- 구구단 만들기 -->
<?php
$front_number = $_REQUEST["front_number"];

if ($front_number > 99){
    print "최대 99단까지 지원합니다.";
    return false;
} else {
    print "<h3>$front_number"."단 생성결과</h3>";
}

for ($back_number = 1; $back_number <= 99; $back_number ++){
    $result = $front_number * $back_number;
    print "
           <table border='1'>
            <tr><td>$front_number X $back_number = $result</td></tr>
           </table>";
}
?>