<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>파일 업로드</title>
</head>
<body>
    <!-- 전송은 post로 해야함(get은 파일 전송 불가) -->
    <form action="getfiles.php"
        method="post"
        enctype="multipart/form-data">
        업로드할 파일을 선택하세요.<br>
        <input type="file" name="upload"><br><br>
        <input type="submit" value="업로드">
    </form>
</body>
</html>