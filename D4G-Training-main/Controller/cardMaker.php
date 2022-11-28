<?php
	
function cardMaker($array, $index, $page) {
	$goodPractice = $array[$index];

	$id = (string) $goodPractice['ID_bonnes_pratiques'];
	$usefulId = (string) $goodPractice['ID'];
	$categorie = (string) $goodPractice['Categorie'];
	$recommandations = (string) $goodPractice['Recommandations'];
	$criteres = (string) $goodPractice['Criteres'];
	$justification = (string) $goodPractice['Justification'];
	$acteurs = (string) $goodPractice['Acteurs'];
	$incontournables = (string) $goodPractice['Incontournables'];

	$result = "";

	if ($page == "landing-page") {
		// print_r(explode(';',$acteurs));
		$listOfActors = "";
		if (explode(';',$acteurs)[0]!=""){
			$listOfActors = "<ul>";
			foreach (explode(';',$acteurs) as $value) {
				if ($value != "") {
					$listOfActors .= "<li>".$value."</li>";
				}
			}
			$listOfActors .= "</ul>";
		}

		if ($incontournables != "") {
			$result = '
			<div onclick="cardSelection(this)" class="card selected-card unselectable" id='.$id.'>
				<h2>'.$categorie.'</h2>
				<div class="content">
					'.$listOfActors.'
					<p>'.$criteres.'</p>
				</div>
			</div>
		';
		} else {
			$result = '
			<div onclick="cardSelection(this)" class="card" id='.$id.'>
				<h2>'.$categorie.'</h2>
				<div class="content">
					'.$listOfActors.'
					<p>'.$criteres.'</p>
				</div>
			</div>
		';
		}
	} else {
		$result = '
			<div class="card report-card" id='.$id.'>
				<h2>'.$usefulId." ".$categorie.'</h2>
				<div class="content">
					<p>'.$recommandations.'</p>
					<p>'.$criteres.'</p>
					<p>'.$justification.'</p>
				</div>
			</div>
		';
	}


	return $result;
}

?>