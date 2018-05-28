<?php
include "header.php";

if(isset($_GET['logout'])){
	if($_GET['logout']){
		session_destroy();
		header("Location: login.php");

	}
}


if(isset($_SESSION['user'])){

	header("Location: index.php");
	Exit;

}

?>


<!DOCTYPE html>
<html>
<head>
<title>Team Effect | Anmelden</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style_login.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>
<!-- //web font -->
</head>

<?php

if(isset($_POST['username'])){

	if($_POST['username']=="effect"){
		if($_POST['password']=="teameffect"){
			$_SESSION['user'] = "Effect";
			header("Location: index.php");



		}
	}

}

if(isset($_POST['username'])){

	if($_POST['username']=="senya"){
		if($_POST['password']=="iwnl"){
			$_SESSION['user'] = "Senya";
			header("Location: index.php");
		}
	}
}


?>




<body>
	<!-- main -->
	<div class="main">
		<h1>Team Effect | Anmelden</h1>

		<div class="main-row">
			<div class="agileits-top">
				<form method="post">
					<input class="text" type="text" name="username"  placeholder="Name:" required>
					<input class="text" type="password" name="password"  placeholder="Passwort:" required>
					<input type="submit" value="LOGIN">
				</form>

			</div>
		</div>

		<?php echo $footerk; ?>

	</div>
	<!-- //main -->
</body>
</html>
