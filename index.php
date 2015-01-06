<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Connection</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type"text/css" href="css/style.css" />
</head>
<body>
	<div class="container">
		<form method="post" action="index.php" class="form-signin">
			<h2>Veuillez vous identifier</h2>
			<div class="form-group">
	   			<input type="text" class="form-control" id="" name="login" id="" placeholder="login">
	   		</div>
	   		<div class="form-group">
	   			<input type="password" class="form-control" id="" name="password" id="" placeholder="password">
	   		</div>
	   		<button class="btn btn-lg btn-primary btn-block" type="submit">Identification</button>
		</form>
	</div>
	

	<?php
		$login = $_POST['login'];
		$password = $_POST['password'];

		$xmlDoc = new DOMDocument();
		$xmlDoc->load('users.xml'); 
		$params = $xmlDoc->getElementsByTagName('user');
		$k=0;
		foreach ($params as $value) {
			$base_login = $value->getElementsByTagName('login')->item($k)->nodeValue;
			$base_password = $value->getElementsByTagName('password')->item($k)->nodeValue;

			if(($base_login == $login) || ($base_password == $password)) {
					$_SESSION['user'] = $login;
					header('Location: accueil.php');			
			}else {
				$k++;
			}
		}
	?>
</body>
</html>