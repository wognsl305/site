<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		ini_set('date.timezone','Asia/Seoul');

		//echo "2018년 8월 2일 11시 15분 14초의 타임스태프? <br>";
		//echo mktime(11, 15, 14, 8, 2, 2018);

		$strartTime = mktime(11, 15, 14, 8, 2, 2018);

		$endTime = mktime(11, 20, 14, 8, 2, 2018);

		if($strartTime <= time() && $endTime > time()){
			echo "지금은 수업 시간입니다.";
		}else {
			echo "지금은 쉬는 시간입니다.";
		}
	?>
</body>
</html>