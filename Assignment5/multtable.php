<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Assingment 4</title>
</head>
<body>
<?php
$sum = 0;
$min_multiplicand = (double)$_GET['min_multiplicand'];
$max_multiplicand = (double)$_GET['max_multiplicand'];
$min_multiplier = (double)$_GET['min_multiplier'];
$max_multiplier = (double)$_GET['max_multiplier'];
echo '<p>Min Multiplication: ' . htmlspecialchars($_GET["min_multiplicand"]) . '.';
echo '<p>Max Multiplication: ' . htmlspecialchars($_GET["max_multiplicand"]) . '.';
echo '<p>Min Multiplier: ' . htmlspecialchars($_GET["min_multiplier"]) . '.';
echo '<p>Max Multiplier: ' . htmlspecialchars($_GET["max_multiplier"]) . '.';
echo '<p>';
	
if(empty($min_multiplicand)){
	print "Missing parameter for min multiplicand";
}
if(empty($min_multiplier)){
	print "Missing parameter for min multiplicand";
}
if(empty($max_multiplicand)){
	print "Missing parameter for min multiplicand";
}
if(empty($max_multiplier)){
	print "Missing parameter for min multiplicand";
}
if(!is_numeric($min_multiplicand)){
	print "Min multiplicand must be an integer";
}
if(!is_numeric($min_multiplier)){
	print "Min multiplier must be an integer";
}
if(!is_numeric($max_multiplicand)){
	print "Max multiplicand must be an integer";
}
if(!is_numeric($max_multiplier)){
	print "Max multiplier must be an integer";
}
	
if($min_multiplicand>$max_multiplicand){
		print "Min multiplicand larger than Max";
		}
	if($min_multiplier>$max_multiplier){
		print "Min multiplier larger than Max";
		}

?>		

<p><h2>Multiplication Table</h2>

<table border="1">
<tr>
<td>
<?php
	for ($w=$min_multiplier; $w<=$max_multiplier; $w++){
		echo "<td> $w";
		}
		echo "<tr><br>";
	
	for ($x=$min_multiplicand; $x<=$max_multiplicand; $x++) {
			echo "<td> $x ";
		for ($y=$min_multiplier; $y<=$max_multiplier; $y++){
			$prod = $x * $y;
			echo "<td> $prod";
		} 
		echo "<tr><br>";
		
}
?>
</table>
</body>
</html>

