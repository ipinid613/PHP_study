<?php
    $start = $_REQUEST["number_start"];
    $finish = $_REQUEST["number_finish"];

    // 더하기 함수(반환값 return 없는 경우)
    function plus($a, $b){
        $c = $a+$b;
        print ("더하기 연산 수행 결과 : $c");
    }

    plus(3, 4);
    print "<br>";
    plus(456, 789);

    // 더하기 함수(return이 있는 경우)
    function plus_return($a, $b){
        $c = $a+$b;
        return $c;
    }
    print "<br>";

    $result = plus_return(484, 137);
    print $result."<br>";

    $result = plus_return(3500, 1348);
    print $result;

    //입력된 범위 내 정수들의 합 계산
    function total_plus($start, $finish){
        $sum = 0;
        while ($start <= $finish){
            $sum += $start;
            $start ++;
        }
        // 또는 for ($i = $start; $i <= $b; $i++)
        return $sum;
    }
    print "<br>";
    $total = total_plus($start, $finish);
    print "입력된 범위 내 정수들의 합 : ".$total;
?>