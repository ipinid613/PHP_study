<!--변수 VARIABLE
    데이터를 메모리에 저장
    PHP 코드가 실행되는 도중 값이 변함
    반드시 $기호 입력 후 영문(대소문자 구분 됨)이나 숫자 사용
    변수명에는 숫자가 가장 앞에 올 수 없음
    올바른 변수명 : $var, $age, $fee, $bus1, $_123
    잘못된 변수명의 예
    $생일, $2day, $email@, #my-school
    변수에 데이터 할당
    $data = "안녕하세요!"; // string 타입으로 저장
    $data = 9;           // int 타입으로 저장
    PHP에서 변수는 지정하기 쉬움. JAVA처럼 타입을 반드시 처음에 선언하고 맞춰야 하는 것이 아니라, 자동으로 변수의 타입이 변화함.-->
<?php
    $kor = 85;
    $eng = 90;
    $math = 98;
    $soc = 80;
    $sci = 90;

    $sum = $kor+$eng+$math+$soc+$sci;
    $avg = $sum/3;
    print "다섯 과목의 합계 : ".$sum."<br>";
    print "다섯 과목의 평균 : ".$avg;
    ?>