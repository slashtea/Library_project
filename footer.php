<?php require_once("session.php"); 
	if (!$_SESSION['user'])
		header("Location: index.php");
?>

<div id="footer">
	<p>Bibliotheque ENSA 2014/2015</p>
	<a href="livres.xml" taget="new"><img src="images/follow.jpg" alt="rss" title="rss" />Suivez nous !</a>
</div>