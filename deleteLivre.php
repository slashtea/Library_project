<?php require_once("session.php"); ?>
<?php

	$id = $_GET['id'];
	$xml = new DomDocument();
	$xml->load('livres.xml');

	$xpath = new DOMXPATH($xml);

	foreach ($xpath->query("/biblio/livre[id = '$id']") as $node) {
		$node->parentNode->removeChild($node);
	}


	$xml->save('livres.xml');
	$xml->formatOutput = true;

	header('Location: affiche_livres.php');
?>