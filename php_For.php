<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP 제어문 대체 구문</title>
</head>
<body>
    <?php for ($i = 0; $i<3; $i++): //대채구문으로 {가 여기서는 : 으로 사용됨.?>
        <p><?= $i ?>번째 반복</p>
    <?php endfor; //닫는 }는 end(제어문);로 바뀜.?>
</body>
</html>