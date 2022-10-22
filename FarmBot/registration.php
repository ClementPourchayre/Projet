<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="stylesheet" href="css/log.css" />
	<link rel="stylesheet" href="css/style.css" />

	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>

<body>

	<h1 class="title">
		<div class="span-container s1">
			<span>Agribot</span>
		</div>
		<div class="span-container s2">
			<span>France</span>
		</div>
	</h1>
	<div class="container-corner">
		<div class="circle-menu">
			<a href="login.php" class="links-circle">
				<img src="images/user.svg">
			</a>
			<a href="registration.php" class="links-circle">
				<img src="images/user-plus.svg">
			</a>
		</div>
		<div class="btn-circle">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
	</div>
	<?php

	require('config.php');

	if (isset($_REQUEST['username'], $_REQUEST['password'])) {
		// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($conn, $username);
		// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn, $password);

		$query = "INSERT into `users` (username, password)
				VALUES ('$username','" . hash('sha256', $password) . "')";
		$res = mysqli_query($conn, $query);

		if ($res) {
			echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
		}
	} else {
	?>
		<form class="box" action="" method="post">
			<h2 class="box-title">S'inscrire</h2>
			<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
			<input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
			<input type="submit" name="submit" value="S'inscrire" class="box-button" />
			<!--<p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>-->
		</form>
	<?php } ?>

	<!--Utilisation du script pour les différentes animation (titre, menu)-->
	<script src="javascript/titre.js"></script>
	<script src="javascript/menu.js"></script>

</body>

</html>