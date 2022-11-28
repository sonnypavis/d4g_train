<?php

include '../Model/getPosts.php';
	
function arrayMaker($array) {
	$goodPractice = getPosts();
	$resultArray = [];

	foreach ($array as &$id){
		foreach ($goodPractice as &$object) {
			if ($object['ID_bonnes_pratiques']==$id) {
				array_push($resultArray, $object);
			}
		}
	}

	return $resultArray;
}

?>