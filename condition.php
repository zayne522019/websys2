	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<?php 
	$a = 5;
	if($a < 10){
		echo "$a is less than 10";
	}
	else if($a == 5){
		echo "they are equal";
	}
	else{
		echo "10 is greater than $a";
	}
?>
<?php
	echo "<p>";
	$letter = '2';
	switch ($letter) {
	case 'a':
			echo "It is a";
			break;	
	case 'b':
			echo "It is b";
			break;
	default:
		echo "Not in the list";
	}
	echo "<p>";
 ?>
 <br><br><br><a href="index.php"> <button style="font-size: 10px;border-radius: 3px; background: gray ; "> BACK </button> </a>
</body>
</center>
</html>