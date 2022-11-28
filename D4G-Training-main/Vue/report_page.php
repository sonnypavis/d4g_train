<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../CSS/style.css">
		<script src="../Javascript/engine.js"></script>
		<title>D4G training</title>
	</head>

	<body>
		<a href="../index.php" onclick="clearCookies()">
			<h1>Votre rapport personnel</h1>
		</a>
		<!-- Bouton pour télécharger le rapport -->
		<a onclick="downloadPage()">
			<div class="container-report">
			</div>
		</a>

		<div class="cards">
			<?php
			include '../Controller/arrayMaker.php';
			include '../Controller/tableMaker.php';

			$finalArray = explode(",",$_COOKIE["selection"]);

			$selectedPosts = arrayMaker($finalArray);
			echo tableMaker($selectedPosts);
			?>
		</div>

		<footer>
			Entrainement D4G 2022
		</footer>
	</body>
</html>
