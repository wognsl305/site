<?php
	//mysql 접속 소스를 include
	include_once "../connectDB.php";

	//이름 정보를 int로 형 변환
	$myMemberID = (int) $_POST['memberID'];

	if($myMemberID == 0){
		echo "값이 유효하지 않습니다.";
		exit;
	} 

	if($_POST['cn'] == '' || $_POST['cn'] == null){
		echo "값이 유효하지 않습니다.";
		exit;
	} else {
		$cn = $dbConnect->real_escape_string($_POST['cn']);
	}

	$sql = "UPDATE myMember SET name = '{$cn}' WHERE myMemberID = {$myMemberID}";
	$result = $dbConnect->query($sql);

	if ($result) {
		echo "회원번호 {$myMemberID}의 이름이 {$cn}으로 변경되었습니다.";
	} else {
		echo "이름 변경 실패";
	}
?>