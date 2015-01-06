<?php require_once("session.php"); 
	if (!$_SESSION['user'])
		header("Location: index.php");
?>
<?php 
	$xmlDoc = new DOMDocument();
	$xmlDoc->load('livres.xml'); 
	$params = $xmlDoc->getElementsByTagName('livre');
	echo '<table id="books_table" class="table-bordered">';
	echo '<tr>';
		echo '<td></td>';
		echo '<td></td>';
		echo '<td>Numero</td>';
		echo '<td>Titre</td>';
		echo '<td>Auteur</td>';
		echo '<td>Langue</td>';
		echo '<td>Annee</td>';
		echo '<td>Prix</td>';
		echo '<td>Disponibilite</td>';
		echo '<td>Exemplaires</td>';
	echo '</tr>';	
	foreach ($params as $param) {
		$id = $param->getElementsByTagName('id')->item(0)->nodeValue;
?>			
		<tr>
			<td><a href="editLivres.php?id=<?php echo urlencode($id); ?>"><img src=images/modify.png /></a></td>
			<td><a href="deleteLivre.php?id=<?php echo urlencode($id); ?>" onclick="return confirm('Etes vous sure?')"><img src=images/supp.gif /></a></td>
			<td><?php echo $param->getElementsByTagName('id')->item(0)->nodeValue; ?></td>
			<td><?php echo $param->getElementsByTagName('titre')->item(0)->nodeValue; ?></td>
			<td><?php echo $param->getElementsByTagName('auteur')->item(0)->nodeValue; ?></td>
			<td><?php echo $param->getElementsByTagName('langue')->item(0)->nodeValue; ?></td>
			<td><?php echo $param->getElementsByTagName('annee')->item(0)->nodeValue; ?></td>
			<td><?php echo $param->getElementsByTagName('prix')->item(0)->nodeValue; ?></td>
			<td><?php  if($param->getElementsByTagName('disponibilite')->item(0)->nodeValue == 1) {
				echo 'Oui';
					}else {
						echo 'Non';
					} ?>
			</td>
			<td><?php echo $param->getElementsByTagName('nombre')->item(0)->nodeValue; ?></td>
		</tr>	
	<?php		
	}
	echo '</table>';
?>