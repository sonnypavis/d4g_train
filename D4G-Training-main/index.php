<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="CSS/style.css">
		<link rel="stylesheet" href="CSS/landing.css">
		<script src="Javascript/engine.js"></script>
		<title>D4G training</title>
	</head>

	<body onload="cookieBigbang()">
		<h1>Sélectionnez les bonnes pratiques de développement !</h1>

		<!-- Bouton pour lancer la génération du rapport -->
		<a href="/Vue/report_page.php" id="counter">
			<div class="container-landing">
				<div id="selected-items">43</div>
			</div>
		</a>

		<div id="sum-up"></div>

		<div class="cards">
			<?php
			include "Model/getPosts.php";
			include "Controller/mosaicMaker.php";

			$postsArray = getPosts();
			echo mosaicMaker($postsArray, "landing-page");
			?>
		</div>

		<footer>
			Entrainement D4G 2022
		</footer>

	</body>
</html>
