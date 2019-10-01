<?php 
/*Juan leonardo Ramirez Velasquez
Jean Sebastian Gomez Salinas
Cristian Felipe Saenz Guarnizo
Ronal Andrey Rojas Riaño
Universidad de Cundinamarca
Profesor Alonso Guevara*/
    $db="basedatos";
	$conect=mysqli_connect("localhost","root","")or die ("No se encontro el servidor");
	mysqli_select_db($conect, $db) or die ("No se ecnontro la base de datos");
	return $conect;
 ?>