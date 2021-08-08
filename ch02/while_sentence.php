<!-- While문
    While문의 조건식이 참인 동안에만 반복한다.

    while(조건식) {
    코드1;
    코드2;}-->

<!-- 구구단 만들기 -->
<?php
$front_number = $_REQUEST["front_number"];
$back_number = 1;
if ($front_number > 99){
    print "최대 99단까지 지원합니다.";
    return false;
} else {
    print "<h3>결과</h3>";
}
while($back_number <= 99){
    $result = $front_number * $back_number;
    print "
           <table border='1'>
            <tr><td>$front_number X $back_number = $result</td></tr>
           </table>
           ";
    $back_number ++;
}
?>