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
	<div id="nav"></div><!-- end #nav -->
	
	<div id="main">

	<div class="log">
		<h3>Log in</h3>
		  <form action="BO.php" method="post">
		  Username: <input type="text" name="tbUsername" /><br>
		  Password: <input type="text" name="tbPassword" /><br><br>
		  <input type="submit" name="btnSubmit" value="LogIn" />
		  </form>
    </div>

    <div class="reg">
		<h3>Register</h3>
		  <form action="reg.php" method="post">
		  Username: <input type="text" name="tbUsername" /><br>
		  Password: <input type="text" name="tbPassword" /><br><br>
		  <input type="submit" name="btnSubmit" value="Register" />
		  </form>
    </div>

		
	</div><!-- end #main -->

	
	<div id="footer">
		<p>Login & Register<p>
	</div>
	
</div>

</body>
</html>


