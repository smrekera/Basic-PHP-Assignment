<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Assingment 4</title>
</head>

<?php
error_reporting(E_All);
ini_set('display_errors', 1);
header('Content-Type: text/plain');

session_start();
if(isset($_POST['action']) && $_POST['action'] == 'end'){
	$_SESSION = array();
	session_destroy();
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/',$filePath);
	header("Location: login.php", true);
	die();
}

if(session_status() == PHP_SESSION_ACTIVE){
	if(isset($_POST[''])){
		echo"A username must be entered. Click <a href='http://web.engr.oregonstate.edu/~smrekera/login.php'>here</a> to return to the login screen";
	}
	if(isset($_POST['name'])){
		$_SESSION['name'] = $_POST['name'];
	}
	if(!isset($_SESSION['visits'])){
		$_SESSION['visits'] = 0;
	}
	
	
	$_SESSION['visits']++;
	echo"Hi $_SESSION[name], you have visited this page $_SESSION[visits] times. \n";
	
}

?>
<body>
	<form name="input" action="content.php" methond="post">
	Click <a href="content.php">here</a> to Logout
	</form>
</body>
</html>