<!DOCTYPE html>
<html>
<head>
	<!--meta tags for characters, description, keywords for search engines, and authors-->
	<meta charset="utf-8">
	<meta name="description" content="College Application Essay Help">
	<meta name="keywords" content="college essay, essay help, application help">
	<meta name="author" content="Diana, Nesiah, Jada">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="siahstyle2.css" type="text/css" />
	
	<title> StepAhead </title>

	<script>
	</script>
</head>

<body>			
	<!--<section class="intro" id="stepahead-intro">
	<header role="banner">-->

	<header id="first">
		<div class="header-content">
			<div class="inner">
				<h1 class="cursive"> StepAhead </h1>
				<h4>Get tips and tricks to excel in the college process</h4>
				<hr>
				<a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-primary btn-xl">End Video</a> &nbsp; <a href="#one" class="btn btn-primary btn-xl page-scroll">Get Started</a>
			</div>
		</div>

		<video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
			<source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/Traffic-blurred2.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
		</video>
	</header>
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
			
		
		
		


	//$sql = "SELECT * FROM submissions";
	//$result = mysqli_query($conn, $sql);

	//if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //while($row = mysqli_fetch_assoc($result)) {
      //  echo "USERNAME " . $row["username"]. " - PROMPT: " . $row["prompt"]. "ESSAY " . $row["essay"]. "<br>";
    //}
	//} else {
    //echo "0 results";
//}

	//mysqli_close($conn);
	
	
	$queryType = strtoupper(substr($query,0,stropos($query, ' ' )));
	if (!strcomp($queryType, 'SELECT') && !strcmp($queryType, 'SHOW')){
	exit;
	}
	
	print"<table><caption><h2>QUERY RESULTS </h2></caption>";
	print "<tr align = 'center'";
	
	$num_rows = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	$num_fields = mysql_num_fields($result);
	
	$key = array_keys($row);
	for ($index = 0; $index < $num_fields; $index++)
		print "<th>" . $keys [2* $index + 1 ] . "</th>";
		
	print "</tr>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
	
</body>
</html>