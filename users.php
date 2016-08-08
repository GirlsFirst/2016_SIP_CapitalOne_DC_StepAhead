	<?php
	
	$db_user = 'sunnyba1_gwc5';
	$db_password = 'SIP2016-e';
	$db_host = 'localhost';
	$db_name = 'sunnyba1_gwc5';
	
	
		echo "<p>Connecting to MySQL server.</p>";
		$dbc = mysql_connect ($db_host, $db_user, $db_password)
			OR die ('Could not connect to MySQL: ' . mysql_error () );
					
		echo "<p>Connecting to database </p>";
		mysql_select_db ($db_name)
			OR die ('Could not select the database: ' . mysql_error() );
			
			
			
		//$firstname = trim($_POST['first']);
		//$lastname = trim($_POST['last']);
		//$email = trim($_POST['email']);
		//$password = trim($_POST['password']);

		
		$username = $_POST["usr"];
		$password = $_POST["pswrd"];
		
		$insert_sql = "INSERT INTO users (user_name, user_pass) VALUES ('$username', '$password')";


			
			
			?>