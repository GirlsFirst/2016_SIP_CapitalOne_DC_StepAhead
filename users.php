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
		


		
		//$username = $_POST["usr"];
		//assword = $_POST["pswrd"];
		
		//$insert_sql = "INSERT INTO users (user_name, user_pass) VALUES ('$username', '$password')";
		
		
		
		
		/////////////////
		
		
		
		if(isset($_POST['usr'])) {
			$username = trim($_POST['usr']);
			$password = trim($_POST['pswrd']);
			
			//look up user
			$user_query = sprintf("SELECT user_name, user_password FROM users WHERE usr = '%s' AND password = '%s'", $username, $password);
			
			echo "query: " . $user_query;
			$results = mysql_query($user_query, $con);
			
			echo "results: " . mysql_num_rows($results);
			
			if (mysql_num_rows($results) == 1) {
				echo "logged in";
				$result = mysql_fetch_array($results,$con);
				$user_id = $result['user_id'];
				//setcookie('user_id', $user_id);
				//setcookie('username', $result['email']);
				header('Location: http://www.gwc5.sunny-banana.com/fpsubmission.html');
				exit();
			} else {
				$errormessage = "Incorrect email/username or password";
				exit();
			}
		}
	} else {
		
	header('Location: http://www.gwc5.sunny-banana.com/fpsubmission.html'); //redirect to home page
	}

?>


			
			
			?>