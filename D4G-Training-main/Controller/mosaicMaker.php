<?php

include "cardMaker.php";

function mosaicMaker($array, $page) {
	$mosaic = '';

	for ($i = 0; $i < count($array); $i ++) {
		$mosaic .= cardMaker($array, $i, $page);
	}

	return $mosaic;
}

?>