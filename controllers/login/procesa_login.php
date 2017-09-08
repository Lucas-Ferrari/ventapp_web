<?php
	require $_SERVER['DOCUMENT_ROOT'] ."/ventapp_web_desa/controllers/connect.php";

	if (isset($_POST['usr'])) {
		$usr = mysqli_escape_string($cn , $_POST['usr']);

		$query = "select passwordHash, userId from login where user = " .$usr;
		
		$rSet = mysqli_query($cn,$query);
		var_dump($rSet);
		$nRow = mysqli_num_rows($rSet);
		echo $nRow;
		if( $nRow = 1 ){
			$hash = mysqli_fetch_assoc($rSet);
			if (password_verify($pwd , $hash['passwordHash'])){
				session_start();
				$_SESSION['userId'] = $hash['userId'];
				header("location:".$_SERVER['DOCUMENT_ROOT']."'/ventapp_web_desa/html/login/loginOK.php'");
			}
		} 
		else die("Error usuarios");

	}


?>