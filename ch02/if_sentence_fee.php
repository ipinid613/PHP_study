<?php
    $age = $_REQUEST["age"];
    $welfare = $_REQUEST["welfare"];
    $yukong = $_REQUEST["yukong"];
    $after1710 = $_REQUEST["after1710"];

    // 3살~13세 = 4000, 1710이후입장 4000
    // 14세~18세 = 8000, 70세 이상, 복지카드, 국가유공자도 8000
    // 전부 해당 없으면 10000


    if ($age <= 3){
        $fee = "무료";
    } elseif ($age >= 3 && $age <= 13 || $after1710 == true){
        $fee = "4,000원";
    } elseif ($age >= 14 && $age <= 18 || $age >= 70 || $welfare == true || $yukong == true) {
        $fee = "8,000원";
    } else {
        $fee = "10,000원";
    }

    print "귀하의 입장료는 ".$fee." 입니다.";
?>