<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

	//mysql 접속 소스를 include
	include_once "../connectDB.php";

	//post 방식으로 전달 받은 값 확인
	echo "<pre>";
	var_dump($_POST);

	//이름 검증
	if($_POST['name'] == '' || $_POST['name'] == null){
	echo "해당 값을 사용할 수 없습니다. ";
	exit;
	}
	$name = $_POST['name'];
	//앞 뒤 공백제거
	$name = trim($name);
	//쿼리문의 따옴표 처리를 위해 real_escape_string 메소드 사용
	$name = $dbConnect->real_escape_string($name);

	//phone
	if($_POST['phone'] == '' || $_POST['phone'] == null){
	echo "해당 값을 사용할 수 없습니다. ";
	exit;
	}
	$phone = $_POST['phone'];


	//message
	if($_POST['message'] == '' || $_POST['message'] == null){
	echo "해당 값을 사용할 수 없습니다.";
	exit;
	}
	$message = $_POST['message'];


	//쿼리문 작성
	$sql = "INSERT INTO sample(userID, name, phone, message) VALUES";
	$sql .= "('{$userID}', '{$name}', '{$phone}', '{$message}')";

	//쿼리문 전송 및 전송값을 result 변수에 대입
	$result = $dbConnect->query($sql);

	if($result){
	echo "메세지 전송 성공";
	} else {
	echo "메세지 전송 실패";
	}
?>
</body>
</html>