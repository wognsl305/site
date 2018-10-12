<!DOCTYPE html>
<html lang="ko">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>
<body>
	<?php
		//파일에 쓸 내용
		$content = "새로운 내용을 작성합니다.";

		//내용을 저장할 파일명
		$fileName = "helloWorld.txt";

		//파일 열기
		$fp = fopen('./myFiles/'.$fileName, 'w');

		//파일 쓰기
		$fw = fwrite($fp, $content);

		//파일 쓰기 성공여부
		if($fw == false){
			echo "파일 쓰기에 실패했습니다.";
		} else {
			echo "파일 쓰기 완료";
		}

		//파일 닫기
		fclose($fp);
	?>
</body>
</html>