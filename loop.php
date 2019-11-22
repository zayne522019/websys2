<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$a = 0;
	$b = 0;
	for ($i=0; $i < 2; $i++){
			$a += 10;
			$b += 5;
	}
 echo "At the end of the loop a = $a and b is $b";
?>
<br/>
<?php 
$i = 0;
$num = 50;
	while ($i < 2) {
		$num --;
		$i++;
	}
echo "Loop stopped at i = $i and num = $num";
?>
<br/>
<?php
	$i = 0;
	$num = 0;

	do{
		$i++;
	}
	while ($i < 10);
	echo "Loop stopped at i = $i";
?>
<br/>
<?php
	$fruits = array ('guava','apple','mango','orange');
	foreach ($fruits as $fruits) {
		echo "List of fruits: $fruits<br/>";
	}
?>
</body>
</html>