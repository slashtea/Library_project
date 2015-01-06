<?php require_once("session.php");
	if (!$_SESSION['user'])
		header("Location: index.php");
 ?>

<?php

	include 'header.php';
	$id = $_GET['id'];

	$xml = new DOMDocument();
	$xml->load('livres.xml'); 

	$xpath = new DOMXPATH($xml);


	$query = "/biblio/livre[id='$id']";
	$edit = $xpath->query($query)->item(0);
	$livre = $edit->parentNode;

	$_SESSION['id'] = $id;

	$titre = $livre->getElementsByTagName("titre")->item(0)->nodeValue;
	$auteur = $livre->getElementsByTagName('auteur')->item(0)->nodeValue;
	$langue = $livre->getElementsByTagName("langue")->item(0)->nodeValue;
	$annee = $livre->getElementsByTagName('annee')->item(0)->nodeValue;
	$prix = $livre->getElementsByTagName('prix')->item(0)->nodeValue;
	$disponibilite = $livre->getElementsByTagName('disponibilite')->item(0)->nodeValue;
	$nombre = $livre->getElementsByTagName('nombre')->item(0)->nodeValue;

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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3" id="div_gauche">
				<h1>
		  			<a href="accueil.php">
		  				<img src="images/test_logo.svg" />
		  			</a>	
				</h1>
				<?php include 'getMenu.php'; ?>
			</div>
			<div class="col-md-9" id="div_droite">
				<img src="images/test_anim.svg" />
				<form method="post" class="books_" action="modif_process.php">	
					<table id="books_table" class="table-bordered">
						<tr id="first_row">
							<td>Id</td>
							<td>Titre</td>
							<td>Auteur</td>
							<td>Langue</td>
							<td>Annee</td>
							<td>Prix</td>
							<td>Disponibilite</td>
							<td>Nombre</td>
						</tr>
						<tr>
							<td>
								<input type="text"	value='<?php echo $id; ?>' name="id" id="id" />
							</td>

							<td>
								<input type="titre"	value ='<?php echo $titre ; ?>' name="titre" id="titre" />
							</td>

							<td>
								<input type="auteur" value ='<?php echo $auteur ; ?>' name="auteur" id="auteur" />
							</td>

							<td>
								<input type="langue" value ='<?php echo $langue ; ?>' name="langue" id="langue" />
							</td>

							<td>
								<input type="annee" value ='<?php echo $annee ; ?>' name="annee" id="annee" />
							</td>

							<td>
								<input type="prix" value ='<?php echo $prix ; ?>' name="prix" id="prix" />
							</td>

							<td>
								<input type="disponibilite"	value ='<?php echo $disponibilite ; ?>' name="disponibilite" id="disponibilite" />
							</td>

							<td>
								<input type="nombre"  value ='<?php echo $nombre ; ?>' name="nombre" id="nombre" />
							</td>
						</tr>
					</table>
					<button class="btn btn-sm btn-success btn-block save_btn" type="submit">Enregistrer</button>	
				</form>	
			</div>
		</div>	
	</div>
<script type="text/javascript" src="js/svg_animate.js"></script>
</body>
</html>