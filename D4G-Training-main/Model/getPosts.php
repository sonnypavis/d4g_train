<?php

include "goodPractices.php";

function getPosts() {	
	$statement = fetchDB();
	$posts = [];
	
	while (($row = $statement->fetch())) {
		$post = [
			'ID' => $row['ID'],
			'ID_bonnes_pratiques' => $row['ID_Bonnes_Pratiques'],
			'Categorie' => $row['Famille_Origine'],
			'Recommandations' => $row['Recommandation'],
			'Criteres' => $row['Criteres'],
			'Justification' => $row['Justification'],
			'Acteurs' => $row['Acteurs'],
			'Indicateurs' => $row['Indicateurs'],
			'Incontournables' => $row['Incontournables']
		];

		$posts[] = $post;
	}

	return $posts;
}
	
?>