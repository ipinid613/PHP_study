<?php
$score = $_REQUEST["score-input"];
// html에서 target의 id와 일치하는 부분에 한해 php 명령 실행
$grade = "기본값";

if ($score > 100){
    print "성적은 100점을 초과할 수 없습니다";
} elseif ($score >= 90){
    $grade = "A등급";
    print "귀하의 등급은 ".$grade." 입니다.";
} elseif ($score >= 80){
    $grade = "B등급";
    print "귀하의 등급은 ".$grade." 입니다.";
} elseif ($score >= 70){
    $grade = "C등급";
    print "귀하의 등급은 ".$grade." 입니다.";
} else {
    $grade = "낙제";
    print "귀하의 등급은 ".$grade." 입니다.";
}
?>