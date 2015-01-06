<?php require_once("session.php");
	if (!$_SESSION['user'])
		header("Location: index.php");
 ?>

<?php
	
	$old_id = $_SESSION['id'];
	echo $old_id;

	$new_id = $_POST['id'];

	$xml = new DOMDocument();
	$xml->load('livres.xml'); 

	$xpath = new DOMXPATH($xml);
	$query = "/biblio/livre[id='$old_id']";
	$edit = $xpath->query($query)->item(0);
	$livre = $edit->parentNode;

	// Get new values from form.
	$new_title = $_POST['titre'];
	$new_author = $_POST['auteur'];
	$new_lang = $_POST['langue'];
	$new_year =$_POST['annee'];
	$new_price = $_POST['prix'];
	$new_dispo = $_POST['disponibilite'];
	$new_number = $_POST['nombre'];



	// Changing values.
	$livre->getElementsByTagName('id')->item(0)->nodeValue = $new_id;
	$livre->getElementsByTagName('titre')->item(0)->nodeValue = $new_title;
	$livre->getElementsByTagName('auteur')->item(0)->nodeValue = $new_author;
	$livre->getElementsByTagName('langue')->item(0)->nodeValue = $new_lang;
	$livre->getElementsByTagName('annee')->item(0)->nodeValue = $new_year;
	$livre->getElementsByTagName('prix')->item(0)->nodeValue = $new_price;
	$livre->getElementsByTagName('disponibilite')->item(0)->nodeValue = $new_dispo;
	$livre->getElementsByTagName('nombre')->item(0)->nodeValue = $new_number;
 

	$xml->save('livres.xml');


	header('Location: affiche_livres.php');
?>