<?php require_once("session.php");
	if (!$_SESSION['user'])
		header("Location: index.php");
 ?>

 <?php include 'header.php'; ?>

<div class="container">
	 <form method="post" action="ajouterLivre.php" class="form-signin">
	 	<div class="form-group">
	 		<label for="inputId">ID</label>
   			<input type="text" class="form-control" id="" name="id" placeholder="id">
   		</div>
   		<div class="form-group">
	 		<label for="inputTitre">Titre</label>
   			<input type="text" class="form-control" id="" name="titre" placeholder="titre">
   		</div>
   		<div class="form-group">
	 		<label for="inputAuteur">Auteur</label>
   			<input type="text" class="form-control" id="" name="auteur" placeholder="auteur">
   		</div>
   		   		<div class="form-group">
	 		<label for="inputLangue">Langue</label>
   			<input type="text" class="form-control" id="" name="langue" placeholder="langue">
   		</div>
   		<div class="form-group">
	 		<label for="inputAnnee">Annee</label>
   			<input type="text" class="form-control" id="" name="annee" placeholder="annee">
   		</div>
   		<div class="form-group">
	 		<label for="inputPrix">Prix</label>
   			<input type="text" class="form-control" id="" name="prix" placeholder="prix">
   		</div>
   		<div class="form-group">
	 		<label for="inputAuteur">Diponibilite ( 0 pour non 1 pour oui)</label>
   			<input type="text" class="form-control" id="" name="disponibilite" placeholder="disponibilite">
   		</div>
   		<div class="form-group">
	 		<label for="inputAuteur">Nombre</label>
   			<input type="text" class="form-control" id="" name="nombre" placeholder="nombre">
   		</div>
   		<button class="btn btn-lg btn-success btn-block" type="submit">Ajouter</button>
	</form>
</div>

<?php 
	
	if(isset($_POST['id']) && isset($_POST['titre']) && isset($_POST['auteur']) && isset($_POST['langue']) 
		&& isset($_POST['annee']) && isset($_POST['prix']) && isset($_POST['disponibilite']) 
		&& isset($_POST['nombre'])) {


			$id = $_POST['id'];
			$titre = $_POST['titre'];
			$auteur = $_POST['auteur'];
			$langue = $_POST['langue'];
			$annee = $_POST['annee'];
			$prix = $_POST['prix'];
			$disponibilite = $_POST['disponibilite'];
			$nombre = $_POST['nombre'];

			$xml = new DomDocument("1.0");
			$xml->load("livres.xml");

			// Create new tag book.
			

			$root = $xml->getElementsByTagName("biblio")->item(0);
			
			$Newbook = $xml->createElement("livre");
			$root->appendChild($Newbook);

			$xml->formatOutput=true;

			// Create new id tag.
			$idTag = $xml->createElement("id");
			$Newbook->appendChild($idTag);

			$id_value = $xml->createTextNode("$id");
			$idTag->appendChild($id_value);


			// Create new new title tag.
			$titreTag = $xml->createElement("titre");
			$Newbook->appendChild($titreTag);

			$titre_value = $xml->createTextNode("$titre");
			$titreTag->appendChild($titre_value);


			// Create new auteur tag.
			$auteurTag = $xml->createElement("auteur");
			$Newbook->appendChild($auteurTag);

			$auteur_value = $xml->createTextNode("$auteur");
			$auteurTag->appendChild($auteur_value);

			// Create new langue tag
			$langueTag = $xml->createElement("langue");
			$Newbook->appendChild($langueTag);

			$langue_value = $xml->createTextNode("$langue");
			$langueTag->appendChild($langue_value);


			// Create new annee tag.
			$anneeTag = $xml->createElement("annee");
			$Newbook->appendChild($anneeTag);

			$annee_value = $xml->createTextNode("$annee");
			$anneeTag->appendChild($annee_value);


			// Create new prix tag.
			$prixTag = $xml->createElement("prix");
			$Newbook->appendChild($prixTag);

			$prix_value = $xml->createTextNode("$prix");
			$prixTag->appendChild($prix_value);


			// Create new disponibilite tag.
			$disponibiliteTag = $xml->createElement("disponibilite");
			$Newbook->appendChild($disponibiliteTag);

			$disponibilite_value = $xml->createTextNode("$disponibilite");
			$disponibiliteTag->appendChild($disponibilite_value);



			// Create new nombre tag.
			$nombreTag = $xml->createElement("nombre");
			$Newbook->appendChild($nombreTag);

			$nombre_value = $xml->createTextNode("$nombre");
			$nombreTag->appendChild($nombre_value);


			$xml->formatOutput=true;
			$xml->save("livres.xml");

			header('Location: affiche_livres.php');
	}

?>