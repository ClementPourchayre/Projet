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
			<a href="index2.html" class="links-circle">
				<img src="images/home.svg">
			</a>
		</div>
		<div class="btn-circle">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
	</div>

	<form class="box" action="" method="post">
		<h2 class="box-title">Ajouter un légume</h2>
		<input type="text" class="box-input" name="Nom" placeholder="Nom" required />
		<input type="text" class="box-input" name="Race" placeholder="Race" required />
		<input type="text" class="box-input" name="Humidité" placeholder="Humidité" required />
		<input type="text" class="box-input" name="Taille" placeholder="Taille (hauteur)" required />
		<input type="text" class="box-input" name="Espace" placeholder="Espace (autour)" required />
		<input type="submit" name="submit" value="Ajouter" class="box-button" />
	</form>
	<?php
	/*
	require('config.php');

	if (isset($_REQUEST['Nom'], $_REQUEST['Race'], $_REQUEST['Humidité'], $_REQUEST['Taille'], $_REQUEST['Espace'])) {
		// récupérer la donnée et supprimer les antislashes ajoutés par le formulaire
		$Nom = stripslashes($_REQUEST['Nom']);
		$Nom = mysqli_real_escape_string($conn, $Nom);
		
		$Race = stripslashes($_REQUEST['Race']);
		$Race = mysqli_real_escape_string($conn, $Race);
		
		$Humidité = stripslashes($_REQUEST['Humidité']);
		$Humidité = mysqli_real_escape_string($conn, $Humidité);
		
		$Taille = stripslashes($_REQUEST['Taille']);
		$Taille = mysqli_real_escape_string($conn, $Taille);
		
		$Espace = stripslashes($_REQUEST['Espace']);
		$Espace = mysqli_real_escape_string($conn, $Espace);

		$query = "INSERT into `legume` (Nom, Race, Humidité, Taille, Espace)
				VALUES ('$Nom','$Race','$Humidité','$Taille','$Espace')";
		$res = mysqli_query($conn, $query);

		if ($res) {
			echo "<div class='sucess'>
             <h3>Légume ajouter avec succès.</h3>
             <p>Cliquez ici pour revenir a la page<a href='index2.html'>d'accueil</a></p>
			 </div>";
		}
	} else {
	?>
		<form class="box" action="" method="post">
			<h2 class="box-title">Ajouter un légume</h2>
			<input type="text" class="box-input" name="Nom" placeholder="Nom" required />
			<input type="text" class="box-input" name="Race" placeholder="Race" required />
            <input type="text" class="box-input" name="Humidité" placeholder="Humidité" required />
            <input type="text" class="box-input" name="Taille" placeholder="Taille (hauteur)" required />
            <input type="text" class="box-input" name="Espace" placeholder="Espace (autour)" required />
			<input type="submit" name="submit" value="Ajouter" class="box-button" />
		</form>
	<?php } */



	if (isset($_POST['submit'])) {
		//se connecter a la BDD
		$bdd = mysqli_connect("localhost", "root", "", "farmbot");

		//récupérer les données saisie par l'utilisateur
		$Nom = $_POST['Nom'];
		$Race = $_POST['Race'];
		$Humidité = $_POST['Humidité'];
		$Taille = $_POST['Taille'];
		$Espace = $_POST['Espace'];

		//créer la requete ajout
		$sql = 'INSERT INTO legume VALUES("","' . $Nom . '","' . $Race . '","' . $Humidité . '","' . $Taille . '","' . $Espace . '")';

		//execute la requete
		$res = mysqli_query($bdd, $sql);
		if ($res) {
			echo "<div class='sucess'>
             <h3>Légume ajouter avec succès.</h3>
             <p>Cliquez ici pour revenir a la page <a href='index2.html'>d'accueil</a></p>
			 </div>";
		}

		//fermer la connexion a la bdd
		mysqli_close($bdd);
	}

	?>

	<!--Utilisation du script pour les différentes animation (titre, menu)-->
	<script src="javascript/titre.js"></script>
	<script src="javascript/menu.js"></script>

</body>

</html>