<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<?php
	$name		= isset($_REQUEST["name" ]) ? $_REQUEST["name" ] : "";
	$pw			= isset($_REQUEST["pw" ]) ? $_REQUEST["pw" ] : "";
	$pw_check	= isset($_REQUEST["pw_check" ]) ? $_REQUEST["pw_check" ] : "";
	$email		= isset($_REQUEST["email" ]) ? $_REQUEST["email" ] : "";
	$yyyy		= isset($_REQUEST["yyyy" ]) ? $_REQUEST["yyyy" ] : "";
	$mm			= isset($_REQUEST["mm" ]) ? $_REQUEST["mm" ] : "";
	$dd			= isset($_REQUEST["dd" ]) ? $_REQUEST["dd" ] : "";
	$gender		= isset($_REQUEST["gender" ]) ? $_REQUEST["gender" ] : "";
	$admin		= 1;
	$birth		= "$yyyy" . "-" . "$mm" . "-" . "$dd";
	
	try {
		require("covacDB.php");
		
		$pw = md5($pw);
		if(!($email && $name && $pw && $pw_check && $gender && $yyyy && $mm && $dd)) {
?>
			
			<script>
				alert('빈칸없이 입력해야 합니다.');
				history.back();
			</script>
<?php	
		} else if ($db->query("SELECT COUNT(*) FROM User_info WHERE email='$email'")->fetchColumn() > 0) {
?>
		<script>
				alert('이미 존재하는 아이디 입니다.');
				history.back();
		</script>
<?php
		} else {
			$db->exec("insert into User_info values ('$email', '$name', '$pw', '$birth', '$gender', $admin)");
?>
		<script>
				document.location.href="http://www.covac.news/board_write.php";
		</script>
<?php
		}
	}	catch (PDOException $e) {
		exit($e->getMessage());
	}
?>
			

</body>
</html>