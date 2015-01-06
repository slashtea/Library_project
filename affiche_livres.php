<?php require_once("session.php");
	if (!$_SESSION['user'])
		header("Location: index.php");
 ?>

<html>
<head>
	<title>Bibliotheque ENSA</title>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-type" content="image/svg-xml" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<?php include 'header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-3" id="div_gauche">
				<h1>
				  <a href="accueil.php">
				  	<img src="images/test_logo.svg" alt="logo" title="image" id="logo" />
				  </a>	
				</h1>
				<?php include 'getMenu.php'; ?>
			</div>
			<div class="col-md-9" id="div_droite">
				<img src="images/test_anim.svg" alt="titre" />
				<?php include 'getLivres.php'; ?>
				<a href="ajouterLivre.php"><button class="btn btn-sm btn-success btn-block add"><span class="glyphicon glyphicon-plus"></span>Ajouter un Livre</button></a>
				<a href="logout.php"><button class="btn btn-sm btn-danger logout">Logout</button></a>
			</div>
		</div>	
	</div>
<script  src="js/jquery-2.1.3.min.js"></script>	
<script  src="js/bootstrap.min.js"></script>		
</body>
</html>
