<!--2차원 배열(array)-->
<!--2차원 배열을 이용하여 세 학생이 받은 다섯 과목 점수의 합계와 평균 계산-->
<?php
$score = array(array(88, 98, 96, 77, 63), array(86, 77, 66, 86, 93), array(74, 83, 95, 86, 97));

for($a = 0; $a <= 2; $a++){ // 몇번째 학생인지 선택하는 조건
    $sum = 0; // sum이 for문 안에 있어야 하는 이유 : 0번째 학생의 sum, 1번째/2번째 학생의 sum을 각각 구해야 하므로!! for문 밖에 있으면
                // 각각 구해지는 것이 아니라 0번째 학생의 점수에 1번째 학생의 점수를 더하고, 거기에 2번째 학생의 점수를 더하는 꼴이 됨.
    for($b = 0; $b <= 4; $b++){
        $sum += $score[$a][$b];
    }
    $avg = $sum / 5; // 평균점수
    $student_num = $a+1;
    print "$student_num 번째 학생의 점수 -> 합계 : $sum, 평균 : $avg <br>";
}
?>