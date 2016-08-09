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
			
		////
		
		


	$sql = "SELECT * FROM submissions";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "USERNAME " . $row["username"]. " - PROMPT: " . $row["prompt"]. "ESSAY " . $row["essay"]. "<br>";
    }
	} else {
    echo "0 results";
}

	mysqli_close($conn);
	?>  



















