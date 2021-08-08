<!-- if문 기본-->
1번 예제<br>
<?php
    $num = 80;

    if ($num%2 == 0){
        print "$num : 짝수입니다.";
    } else {
        print "$num : 홀수입니다.";
    }
?>
<p>
2번 예제<br>
<?php
    $age = 64;
    $fee = "1,000원";

    if ($age >= 65){
        $fee = "무료";
    }

    print "나이 : $age, 입장료 : $fee";
?>
<p>
3번 예제 : 숫자 3개를 큰 순서로 정렬하기<br>
<?php
    $a = 2;
    $b = 6;
    $c = 8;

    if ($a>$b){
        if($a>$c) {
            $max1 = $a;
            if ($b > $c) {
                $max2 = $b;
                $max3 = $c;
            } else {
                $max2 = $c;
                $max3 = $b;
            }
        }else { // $a가 $b보다 큰 상태에서, $c가 $a보다 큰 경우
            $max1 = $c;
            $max2 = $a;
            $max3 = $b;
        }
    } else { // $b가 $a보다 큰 경우
        if ($a>$c){
            $max1 = $b;
            $max2 = $a;
            $max3 = $c;
        } else { // $c가 $a보다 크면
            if ($b>$c) {
                $max1 = $b;
                $max2 = $c;
                $max3 = $a;
            } else { // b가 c보다 작을 때
                $max1 = $c;
                $max2 = $b;
                $max3 = $a;
            }
        }
    }

    print "입력된 세 정수 : $a $b $c<br>";
    print "큰 순서로 정렬한 결과 : $max1 $max2 $max3";
    ?>