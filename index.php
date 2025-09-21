<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>echo 사용 예제</title>
</head>
<body>
    <?php
        echo "echo 사용 예제<br>"; //echo ""<-안에 html 태그를 넣어도 활용이 됨.

        echo "시작     끝<br>"; //공백을 많이 넣어도 html 규약으로 인해 하나의 공백으로 출력됨.
        echo "계산 결과 출력 : ";
        echo 3+7;
        echo "<br>";

        echo "한 줄의 echo로 여러 값 출력 : ",3+7,"<br>"; //,이어지는 문자열 출력

        echo "특수한 글자 출력 : \"\$<br>"; //특수 문자열은 \를 사용한 후에 사용하려는 특수문자를 작성하면 됨.

        ECHO "대문자 ECHO도 똑같이 사용 가능<br>";
    ?>
</body>
</html>