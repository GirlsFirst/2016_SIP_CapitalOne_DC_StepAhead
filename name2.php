<!DOCTYPE html>
<html xmlns="http:/ww.w3.org/1999/xhtml">
<head>
	<title>????????????????</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
	<h1>:))))))))</h1>
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
			
		echo "<p>Create a table.</p>";
		$create_table_string = "CREATE TABLE submissions(
		prompt   TEXT NOT NULL,
		essay    TEXT NOT NULL
		)";
		mysql_query ( $create_table_string, $dbc)
			OR die ("Can't create the table: " . mysql_error () );
			
		echo ("<i>$table</i> table created successfully.");

		

	?>

</body>
</head>

	