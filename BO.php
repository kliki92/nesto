<?php
require "config.php";
?>

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
		<?php
			$username = $_POST["tbUsername"];
			$password = $_POST["tbPassword"];
			$user = User::getUser($username,$password);
			if(!$user){
				header("Location: message.php");
			}else{
				?>
				<ul>
					<li><a href="log.php">Hello <?php echo $user->username;?></a></li>
				<?php
			}
			?>	
			<li><a href="#">List All Users</a>
			<ul>
			<?php
			$users = User::getAllUsers();
			foreach($users as $user){
				?>
				<li><a href="about.html"><?php echo $user->username ."<br><br>Date: ". $user->date; ?></a></li>
				<?php
			}
			?>	
			</ul>
		
			<li><a href="log.php">Log Out</a></li>
		</ul>
	</div><!-- end #nav -->
</div>

</body>
</html>


