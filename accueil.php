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
				<a target="new" href="http://www.livredepoche.com/feed"><h2>Flux RSS de Livre en poche</h2></a>
				<?php 
					$url = "http://www.livredepoche.com/feed/tobepublishedbooks/feed.xml";
					$xml = simplexml_load_file($url);
					
					echo '<table id="books_table" class="table-hover">';
						echo '<tr>';
							echo '<td><h3>Titre</h3></td>';
							echo '<td><h3>Lien</h3></td>';
						echo '</tr>';

					for($i=0; $i<10; $i++) {
						$title = $xml->channel->item[$i]->title;
						$lien = $xml->channel->item[$i]->link;
						
						echo '<tr>';
							echo '<td>' . $title . '</td>';
							echo '<td>' . $lien . '</td>';
						echo '</tr>';	
					}
					echo '</table>';
				?>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>
