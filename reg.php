
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="wrapper">
	<div id="nav">

	</div><!-- end #nav -->
	<div id="main_one">
		<div class="mes">
		<?php
			require "config.php";

			$username = $_POST['tbUsername'];
			$password = $_POST['tbPassword'];

			$username = str_replace("'","",$username);
			$username = str_replace("-","",$username);
			$password = str_replace("'","",$password);
			$password = str_replace("-","",$password);


			$user = new User;
			$user->username = $username;
			$user->password = $password;
			$user->save();

			echo "<h3>Successful registration</h3>";
		?>
		<a href="log.php">Log In...</a>
		</div>
	</div><!-- end #main -->	
</div>
</body>
</html>
