<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	setcookie('myCookie','itIsMyCookie',time()+10000,'/');

	if(isset($_COOKIE['myCookie'])){
		echo "쿠키 생성 완료 쿠키 값은 {$_COOKIE['myCookie']}";
	} else {
		echo "쿠키 생성 실패";
	}
?>
</body>
</html>