<?php
	
function tableMaker($array) {
	$table = "<table>
	<tr>
	<td>Catégorie</td>
	<td>Recommandation</td>
	<td>Critères</td>
	<td>Justification</td>
	<td>Acteurs</td>
	<td>Indicateurs</td>
	</tr>
	";

	foreach ($array as $objectArray) {
		$table .= "<tr>";

		foreach ($objectArray as $key => $field) {
			if ($key != "ID_bonnes_pratiques" and $key != "ID" and $key != "Incontournables") {
				$table .= "<td>";
				$table .= $field;
				$table .= "</td>";
			}
		}

		$table .= "</tr>";
	}

	$table .= "</table>";

	return $table;
}

?>