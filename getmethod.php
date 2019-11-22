<?php 
	if(isset($_GET["name"]) || isset($_GET["age"]))

	 {
		echo "Welcome" .$_GET['name']. "<br/>";
		echo "You are" .$_GET['age']."Years Old";
		echo "My password" .$_GET['pass']. "This is unsecured";
	}
?>
<html>
<head>
	<title>Get Method</title>
</head>
<body>	
<center>
	<form action="<?php $_PHP_SELF ?>" method  = "GET">
	Name: <input type="text" name="name" />
	Age: <input type="text" name="age"/>
	Password: <input type="password" name="pass"/>
	<input type="submit" value="submit"/>
	</form>	 	
	<br><br><br><a href="index.php"> <button style="font-size: 10px;border-radius: 3px; background: gray ; "> BACK </button> </a>
</body>
</center>
</html>