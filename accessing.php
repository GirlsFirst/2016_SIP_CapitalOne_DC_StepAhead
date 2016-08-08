<!DOCTYPE html>
<html <!--xmlns="http:/ww.w3.org/1999/xhtml"-->>
<head>
	<title>accessing i think i found my error.............. nvm</title>
	<!--<meta http-equiv="content-type" content="text/html;charset=utf-8"/>-->
</head>
<body>

<?php
$stage = $_POST["stage"];
if (!IsSet ($stage)) {
?>
	<p>
		<form method = "POST" action = "accessing.php" <!--don't know what this means... ask tom-->
			Database Name:
			<input type = "text" name="users" /><br />
			Submissions <!--is this like a subtitle? e.g username-->
			<br />
			<textarea rows= "2" cols = "80" name= "query"> <!--SUBMISSION GOES HERE-->
			</textarea>
			<br /><br/>
			<input type="hidden" name = "stage" value ="1"  /><!--don't know what this means... ask tom-->
			<input type = "submit" value ="Submit Request" /> <!--submit button.. probably enters the data onto database-->
			<input type = "reset" /> <!--resets the text box????-->
		</form>
	</p>
<?php
} else {

	$db = mysql_connect ("localhost", "sunnyba1_gwc5", "SIP2016-e"); //connecting to mysql 
	if (!$db) {
		print "Error - Could not connect to MySQL";
		$error = mysql_error();
		print "<p>" .  $error . "</p>";
			exit;	
	}
	
//selecting the database

	$dbname = $_POST['users']; //do i place the actual database name or just dbname
	$er = mysql_select_db($dbname);
	if (!$er) {
		print "Error - Could not select the database";
		$error = mysql_error();
		print "<p>" . $error . "</p>";
		exit;
	}
	
	else {
		print "using database $dbname";
	}

	

//cl	
	
	$query = stripslashes($_POST['query']); //what does the query mean?
	trim($query);
	
//fix
	
	$query_html = htmlspecialchars($query); //what does htmlspecialchars mean
	print "<p> <b> the query is: </br> " . $query_html  .  "</p>";
	
//execute
	$result = mysql_query($query);
	if (!$result) {
		print "Error - the query could not be executed";
		$error = mysql_error ();
		print "<p>" . $error . "</p>";
		exit;
	}
	else {
		print "Query done.";
	}
	
//determine	

	$queryType = strtoupper(substr($query,0,strpos($query, ' ')));
	if (!strcmp ($queryType, 'SELECT') && !strcmp($queryType, 'SHOW') ) {
		exit;
	}
	
//display in a table

	print"<table><caption> <h2> Query Results </h2></caption>";
	print "<tr align = 'center'>";
	
//
//
	$num_rows = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	$num_fields = mysql_num_fields($result);
	
//produce
	
	$keys = array_keys($row);
	for ($index = 0; $index < $num_fields; $index++)
		print"<th>" . $keys[2 * $index + 1 ] . "</th>";
	
	print "</tr>";
	
//output 


	for ($row_num = 0; $row_num < $num_rows; $row_num++) {
		print "<tr align = 'center'>";
		$values = array_values($row);
		for ($index = 0; $index < $num_fields; $index++) {
			$value = htmlspecialchars($values[2 * $index + 1 ]);
			print "<td>" . $value . "</td>";
		}
		
		print "</tr>";
		$row = mysql_fetch_array($result);
	}
	
	print "</table>";




?>
</body>
</html>





















