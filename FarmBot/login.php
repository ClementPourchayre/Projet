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
	session_start();

	if (isset($_POST['username'])) {
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($conn, $username);
		$_SESSION['username'] = $username;
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn, $password);

		$query = "SELECT * FROM `users` WHERE username='$username' and password='" . hash('sha256', $password) . "'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

		if (mysqli_num_rows($result) == 1) {
			$user = mysqli_fetch_assoc($result);
			header('location: index2.html');
		} else {
			$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
		}
		$_SESSION['type'] = $user['type'];
	}
	?>

	<form class="box" action="" method="post" name="login">
		<h2 class="box-title">Connexion</h2>
		<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
		<input type="password" class="box-input" name="password" placeholder="Mot de passe">
		<input type="submit" value="Connexion " name="submit" class="box-button">
		<!--<p class="box-register">Vous êtes nouveau ici? <a href="registration.php">S'inscrire</a></p>-->
		<?php if (!empty($message)) { ?>
			<p class="errorMessage"><?php echo $message; ?></p>
		<?php } ?>
	</form>

	<!--Utilisation du script pour les différentes animation (titre, menu)-->
	<script src="javascript/titre.js"></script>
	<script src="javascript/menu.js"></script>

</body>

</html>