<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script>
		var x = "javascript";
		document.write{x};
		document.write{"<br>"};
		document.write{"나는"+ x +"를 배우고 있습니다."};
		document.write{"<br><br>"};
	</script>
</head>
<body>
	<?php
      $javascript = "php";
      echo $javascript;
      echo "<br>";
      echo "나는 ".$javascript."를 배우고 있습니다. ";
      echo "<br>";
      echo "나는 {$javascript}를 배우고 있습니다. ";
      echo "<br>";
      //큰 따옴표는 역슬래시 사용
      echo "나는 \"PHP\"를 배우고 있습니다.";
      echo "<br>";
      echo "나는 \$15를 사용했습니다.";
   	?>
</body>
</html>