<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<select id="birthMonnth" name="birthMonnth">
		<?php
			//8월에 기본 선택되도록 변수 선언
			$selectMonth = 8;

			for($i = 1; $i <=12; $i++){
			
			$selected = '';

			if($i == $selectMonth){
				$selected = "selected";
			}
		?>
			<option value="<?=$i?>" <?=$selected?>><?=$i?></option>
		<?php } ?>
	</select>
	<label for="birthMonnth">월</label>
</body>
</html>