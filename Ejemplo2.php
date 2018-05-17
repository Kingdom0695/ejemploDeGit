<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Arreglos</title>
	<style>
	 body{background-color: #B5CDE6;
	 	font-family: Arial;
	 	font-size: 4em;
	 	padding: 50px;}
	 </style>
</head>
<body>
	<?php
		$Frutas = array('platano', 'manzana', 'uvas', 'fresa' );
		print_r($Frutas) . "<br />";

		echo $Frutas[2] . "<br />";
		echo count ($Frutas) . " elementos" . "<br>";

		for ($i=0; $i < count($Frutas); $i++) { 
			echo $Frutas[$i] . "<br />";
		}

		$edades = array('Daniel' => 19, 'Juan' => 20, 'Omar' => 27 );
		print_r($edades) . "<br />";
		echo $edades['Juan'] . "<br />";

		foreach ($edades as $key => $value) {
			echo $key . " tiene el valor de " . $value . "<br />";
		}

	?>

</body>
</html>