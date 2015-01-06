<?php 
	$xmlDoc = new DOMDocument();
	$xmlDoc->load('menu.xml'); 
	$params = $xmlDoc->getElementsByTagName('lien');
?>	
	<table id="menu_table" class="table-bordered">
		<th id="first_row">menu</th>
		<?php 	
			foreach ($params as $param) {
				echo '<tr>';
					echo '<td><a href='.$param->getElementsByTagName('chemin')->item(0)->nodeValue.'>'.$param->getElementsByTagName('titre')->item(0)->nodeValue.'</a></td>';
				echo '</tr>';
			}
		?>
	</table>