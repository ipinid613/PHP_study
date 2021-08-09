<!--1차원 배열(array)-->
<?php
//  $score = [78, 83, 97, 88, 78];
//  $score = array(78, 83, 97, 88, 78);
    $score[0] = 78;
    $score[1] = 83;
    $score[2] = 97;
    $score[3] = 88;
    $score[4] = 78;

    $sum = 0;
    for($a = 0; $a <= 4; $a++){
        $sum += $score[$a];
    }
    $avg = $sum/5;
    print "과목별 점수 : $score[0] ,$score[1] ,$score[2] ,$score[3] ,$score[4]<br>";
    print "과목 평균 : $avg";
?>
