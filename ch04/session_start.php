<?php
    session_start();

    print "세션 시작!<p>";

    // SESSION의 변수명은 [ ] 안에. 변수명에 할당된 값은 = 이후에 입력.
    // SESSION은 전역변수이므로, 다른 문서에서도 여기서 할당한 SESSION을 활용할 수 있음.
    $_SESSION['userid'] = "kdhong";
    $_SESSION['username'] = "홍길동";
    $_SESSION['time'] = time(); // 현재시간

    print "3개의 세션 변수 등록 완료. <br>";
    print $_SESSION['userid']."<br>";
    print $_SESSION['username']."<br>";
    print $_SESSION['time'];