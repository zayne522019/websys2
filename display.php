<?php 
	if(isset($_REQUEST["name"]) || isset($_REQUEST["age"]) || isset($_REQUEST['pass']))
		if (preg_match("/[^A-Za-z'-]",$_REQUEST['pass'])) {
			# code...
	
		echo "Welcome" .$_REQUEST['name']. "<br/>";
		echo "You are" .$_REQUEST['age']."Years Old";
		echo "My password" .$_REQUEST['pass']. "This is unsecured";
	}
	else  {
		die("Sayop ka ");
	}

?>
<center>
<br><br><br><a href="index.php"> <button style="font-size: 10px;border-radius: 3px; background: gray ;"> BACK </button> </a>
</center>

