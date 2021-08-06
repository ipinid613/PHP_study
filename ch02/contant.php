<!--상수(CONSTANT)-->
<!--코드가 실행되는 중에 변하지 않는 값을 미리 할당해 두는 것
    상수는 관습적으로 대문자를 사용-
    PHP_VERSION = PHP의 버전
    PHP_OS = PHP가 실행 중인 OS
    __LINE__ = 처리 중인 파일의 현재 줄 번호
    __FILE__ = 처리 중인 파일의 전체 경로와 이름
    __DIR__ = 처리 중인 파일의 디렉토리
    __FUNCTION__ = 함수명
    __CLASS__ = 클래스명
    true = 참
    false = 거짓
    null = 아무 값이 없음
    그 외 내가 지정하는 값을 define 해줄 수 있음.->


<?php
    define("HELLO", "안녕하세요!"); // key : value 형태로 저장
    print HELLO."<p></p>";

    print " PHP버전은 ";
    print PHP_VERSION;
    print " 입니다.";

    print "이 파일의 이름은 ";
    print __FILE__;
    print " 입니다.";
    ?>