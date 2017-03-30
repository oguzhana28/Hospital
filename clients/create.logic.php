<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$Firstname = $db->escape_string($_POST["Firstname"]);
		$prefix = $db->escape_string($_POST["prefix"]);
		$Lastname = $db->escape_string($_POST["Lastname"]);
		
		// Prepare query and execute
		$query = "insert into client (Firstname, prefix, Lastname) values ('$Firstname','$prefix','$Lastname')";
		$result = $db->query($query);

	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>