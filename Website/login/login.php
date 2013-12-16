<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log in</title>
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="../css/reset.css">
</head>
<?php include("../navbar.php"); ?>
<?php 

	include("../config.php");
	if (isset($username)){
	?>
    
<body>
</body>

<?php
	}
	else{
		?>


<?php

$signinSuccess = false;

echo '
<body>
	<div id="main">';

if (isset($_POST['name'])) {
	$name = htmlspecialchars($_POST['name']);
	if ($name == 'test'){ // Check if signed in, not if it equals test
		$signinSuccess = true;
	}
}
if ($signinSuccess){
    echo 'FUCKING SUCCESS!!!';
}
else {
  echo '
			<form action="" method="post">
				<fieldset>
				<legend>Name</legend>
				Name:
				<input type="text" name="name">
				<br>
				E-mail:
				<input type="email" name="email">
				<br>
				Password:
				<input type="password" name="password">
				<br>
				<input type="submit" name="button" id="button" value="Submit">
				</fieldset>
			</form>';
}
echo '
	</div>
</body>';
?>


<?php
	}
?>

</html>