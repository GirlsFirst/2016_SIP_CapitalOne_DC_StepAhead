<!DOCTYPE html>
<html>
<head>
<title>plswork</title>
</head>
<body>		
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

		$username = trim($_POST["usrn"]);
		$prompt = trim($_POST["prmt"]);
		$essay = trim($_POST["subm"]);
			
		$insert_sql = "INSERT INTO submissions(username, prompt, essay)
		VALUES ('$username', '$prompt', '$essay');"
			
			
		echo "query: " . $insert_sql;
		//insert user into database
		mysql_query($insert_sql, $con)
			or die(mysql_error());

	//header('Location: http://www.gwc5.sunny-banana.com/fpessays.html');
	//. mysql_insert_id()
	//exit();
					
	?>
</body>
</html>