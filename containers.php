<?php

$container = array(
	1 => array( 
 		'Numero_identifiant' => '1',
 		'Poid_max' => '2',
 		'Poid_reel' => '1',
 		'Type_contenu' => 'Alu',
 ),

	2 => array( 
 		'Numero_identifiant' => '2',
 		'Poid_max' => '3',
 		'Poid_reel' => '1',
 		'Type_contenu' => 'Carton',
 ),

	3 => array( 
 		'Numero_identifiant' => '1',
 		'Poid_max' => '2',
 		'Poid_reel' => '1',
 		'Type_contenu' => 'Plastique',
 ),

	4 => array( 
 		'Numero_identifiant' => '2',
 		'Poid_max' => '2',
 		'Poid_reel' => '1',
 		'Type_contenu' => 'Organique',
 ),
	5 => array( 
 		'Numero_identifiant' => '1',
 		'Poid_max' => '2',
 		'Poid_reel' => '1',
 		'Type_contenu' => 'Plastique',
 ),

	6 => array( 
 		'Numero_identifiant' => '2',
 		'Poid_max' => '3',
 		'Poid_reel' => '1',
 		'Type_contenu' => 'Organique',
 ),
);
?>

<table>
		<tr>
			<th>Numéro d'identifiant</th>
			<th>Poids maximum</th>
			<th>Poids réel</th>
			<th>Type de contenu</th>
		</tr>
		<?php foreach ($container as $key => $value) { 
		?>
		<tr>
			<td><?php echo $value["Numero_identifiant"]; ?></td>
			<td><?php echo $value["Poid_max"]; ?></td>
			<td><?php echo $value["Poid_reel"]; ?></td>
			<td><?php echo $value["Type_contenu"]; ?></td>
		</tr>	
		<?php } 
		?>
</table>	
	








