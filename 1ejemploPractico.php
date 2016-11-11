<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO PRACTICO</title>
</head>
<body>
<?php 


$producto = "cebolla";

$productos = array( "papa","tomate","cebolla","arroz" );

$unidades = array("papa" => 30 ,"tomate" => 38,"cebolla" => 29,"arroz" => 35 );
$precio = array("papa" => 2.8 ,"tomate" => 0.8,"cebolla" => 1.2,"arroz" => 1.5  );


if ( in_array($producto,$productos ) ) {
	

	echo "El precio total de " . $unidades[$producto] ." unidades de $producto es igual a ".  $unidades[$producto] * $precio[$producto] . " soles ";

} else {
	echo "No existe el producto";
}



 ?>
</body>
</html>