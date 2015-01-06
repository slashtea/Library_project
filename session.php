<?php session_start(); 

	function loged_in(){
		return $_SESSION['user'];
	}
	
	function confirm_loged_in() { 
		if(!loged_in()) {
		header("Location: index.php");
			}
	}
?>
