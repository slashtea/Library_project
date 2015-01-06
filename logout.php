<?php require_once("functions.php"); ?>
<?php 
	
	/**
	 * Four steps to close a Session.
	 */
	 
	 // 1) Find the session.
	 session_start();
	 
	 // 2) Unset the session variables.
	$_SESSION = array();

	// 3) Destroy the session coockie.
	if(isset($_COOCKIE[session_name()])) {
		setcoockie(session_name(), '', time()-42000, '/');
	}
	
	// 4) Session destoy.
	session_destroy();
	
	header("Location: index.php?logout=1");
?>