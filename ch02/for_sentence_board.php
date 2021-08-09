<!DOCTYPE html>
<html>
<head lang="ko">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
    <title>게시판</title>
</head>
<body>
  <h3>게시판 목록보기</h3>
  <table border="1">
    <tr bgcolor="#f0ffff" align="center">
        <td>번호</td>
        <td>제목</td>
        <td>글쓴이</td>
        <td>날짜</td>
    </tr>
    <?php
        $title = "게시판 제목";
        $writer = "전영진";
        $date = date("Y-m-d", time()); // PHP의 내장함수

        for ($num = 1; $num <= 10; $num ++){
            print "<tr align='center'>
                        <td>$num</td>
                        <td>$title $num</td>
                        <td>$writer</td>
                        <td>$date</td>
                    </tr>";
        }
    ?>
  </table>
</body>
</html>