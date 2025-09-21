<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>파일 업로드</title>
</head>
<body>
    <?php 
        if ($_FILES["upload"]["error"] == UPLOAD_ERR_OK){
            //전송이 성공했을 때 실행할 코드
            //name속성 -> upload
            $temp_name = $_FILES["upload"]["tmp_name"];
            $file_name = $_FILES["upload"]["name"];
            //iconv(현재인코딩,대상인코딩,본래문자열)
            $save_name = iconv("UTF-8","cp949",$file_name);

            $part = pathinfo($save_name);
            $ext = isset($part["extension"]) ? ".$part[extension]" : "";

            for($i = 1; file_exists("files/$save_name"); $i++){
                $save_name = "{$part['filename']} ($i)$ext";
            }
            if(move_uploaded_file($temp_name,"files/$save_name")){
                echo "업로드 성공<br>";
                echo "업로드한 파일명 : $file_name<br>";
                $save_name_utf8 = iconv("cp949","UTF-8",$save_name);
                echo "저장한 파일명 : $save_name_utf8<br>";
            }else{
                echo "파일 저장 실패";
            }
        }else{
            //에러 발생시 실행할 코드
            echo "파일 전송 실패";
        }
    ?>
</body>
</html>