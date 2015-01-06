<?php require_once("session.php");
	if (!$_SESSION['user'])
		header("Location: index.php");
 ?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
		    	<a class="navbar-brand" href="accueil.php">Bibliotheque ENSA</a>
		    	<p class="navbar-text navbar-right">Bienvenue <?php  echo $_SESSION['user']; ?>
		    	<a href="logout.php" class="logout_header">Logout</a></p>
		     </div>
		</div><!-- end container-fluid -->
	</nav><!-- end navbar -->
<script  src="js/jquery-2.1.3.min.js"></script>	
<script  src="js/bootstrap.min.js"></script>	
</body>
</html>