<?php 

	function redirect_to($location = NULL) {
		if($location != NULL){
			header("Location: /Biblio_project/{$location}");
			exit;
		}
	}


	/*function node_element($n_name, $parent) {
		global $xml;
		$node = $xml->createElement($n_name);
		$parent = $xml->appendChild($node);
	}

	function node_value($value, $parent) {
		global $xml;
		$value = $xml->createTextNode($value);
		$parent->appendChild($value);
		return $value;
	}*/

?>	