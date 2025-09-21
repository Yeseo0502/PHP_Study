<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>다중 선택 입력의 처리</title>
</head>
<body>
    <form action="result.php" method="post">
        <table>
            <tr>
                <td>관심언어</td>
                <td>
<!-- 체크박스는 입력값이 배열로 전달되므로 name에 반드시 []를 붙어야한다. -->
                    <input type="checkbox" name="lang[]" value="PHP">PHP
                    <input type="checkbox" name="lang[]" value="JSP">JSP
                    <input type="checkbox" name="lang[]" value="ASP">ASP
                </td>
            </tr>
            <tr>
                <td>취미</td>
                <td>
                    <select name="hobby[]" size="4" multiple>
                        <option value="영화">영화</option>
                        <option value="운동">운동</option>
                        <option value="독서">독서</option>
                        <option value="기타">기타</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="전송" >
    </form>
</body>
</html>