<?php
error_reporting(E_All);
ini_set('display_errors', 1);
header('Content-Type: text/plain');

session_start();
if(isset($_POST['action']) && $_POST['action'] == 'end'){
	$_SESSION = array();
	$location = $_SERVER['HTTP_REFERER'];
	$path = explode('/',$_SERVER['HTTP_REFERER']);
	session_destroy();
	header("Location: loopback.php", true);
	die();
}

$output = '';
switch($_SERVER['REQUEST_METHOD']){
	case 'GET':
			echo "{\"Type\":\"[GET]\",\"parameters\":";
				foreach ($_GET as $key => $value) {
					echo"$key: $value";
					if(is_null($key)){
						$output."null,";
						}
					if (is_null($value)){
						$output."\".$key. / ,null,";
						}
					}
					
				rtrim($output,",");
				$output."}}";
				
				break;
	case 'POST':
			echo "{\"Type\":\"[POST]\",\"parameters\":{";
				foreach ($_POST as $key => $value) {
					echo"$key: $value";
					if(is_null($key)){
						$output."null,";
						}
					if (is_null($value)){
						$output."\"'.$key.\,null,";
						}
					}
					
				rtrim($output,",");
				$output."}}";
				break;
				default:
}
	echo $output;
	echo "}";
?>
