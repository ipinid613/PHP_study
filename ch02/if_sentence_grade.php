<?php
$score = $_REQUEST["score-input"];
// html에서 target의 id와 일치하는 부분에 한해 php 명령 실행

if ($score <= 100 && $score >= 90)
    $grade = "A등급";
elseif ($score <= 89 && $score >= 80)
    $grade = "B등급";
elseif ($score <= 79 && $score >= 70)
    $grade = "C등급";
elseif ($score <= 69)
    $grade = "낙제";
print "등급 : $grade";
//////
/// 그.. 100점 이상은 입력 못하게 막아보기