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

			
		$prompt = trim($_POST["prompt"]);
		$essay = trim($_POST["essay"]);
			
		$create_table_string = "INSERT INTO submissions (prompt, essay)
		VALUES ($prompt, $essay);"
		
			
			
			
		echo "query: " . $insert_sql;
		//insert user into database
		mysql_query($insert_sql, $con)
			or die(mysql_error());

	header('Location: gwc5.sunny-banana.com/fpsubmission.html');
	//. mysql_insert_id()
	exit();
			
			
			
?>