<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="stylesheet" href="css/log.css" />
	<link rel="stylesheet" href="css/style.css" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libsjquery/1.5.2/jquery.min.js"></script> 
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
			<a href="index.html" class="links-circle">
				<img src="../images/home.svg">
			</a>
			<a href="login.php" class="links-circle">
				<img src="../images/user.svg">
			</a>
			<a href="registration.php" class="links-circle">
				<img src="../images/user-plus.svg">
			</a>
		</div>
		<div class="btn-circle">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
	</div>

	<?php

		require('date.php');
		$date = new Date () ; 
		$year = date('Y');
		$dates = $date->getAll($year);

	?>

	<div class="periods">

		<div class="year"><?php echo $year; ?></div>
		<div class="months">

			<ul>
				<?php foreach ($date->months as $id=>$m) : ?>
					<li><a href="#" id="linkMonth<?php echo $id+1; ?>"><?php echo utf8_encode(substr(utf8_decode($m),0,3)); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<?php $dates = current($dates);?>
		<?php foreach ($dates as $m=>$days) ?>
		<div class="month" id="month<?php echo $m ?>">
		<table>
				<thead>
						<tr>
							<?php foreach ($date->days as $d): ?>
								<th> <?php echo substr ($d,0,3);  ?> </th>
							<?php endforeach; ?>

						</tr>
				</thead>
			<tbody>
			<tr>
				<?php foreach ($days as $d=>$w): ?>
					<td><?php echo  $d?></td>
					<?php if ($w == 7) : ?>
						<tr></tr>
						<?php endif; ?>
				<?php endforeach; ?>
				</tr>
			</tbody>
		</table>


		</div>


	</div>

	<pre><?php print_r($dates); ?></pre>

	<!--Utilisation du script pour les différentes animation (titre, menu)-->
	<script src="javascript/titre.js"></script>
	<script src="javascript/menu.js"></script>

</body>

</html>