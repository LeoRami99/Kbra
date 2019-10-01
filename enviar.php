<?php
/*Juan leonardo Ramirez Velasquez
Jean Sebastian Gomez Salinas
Cristian Felipe Saenz Guarnizo
Ronal Andrey Rojas Riaño
Universidad de Cundinamarca
Profesor Alonso Guevara*/
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "bdprueba";
$conn = new mysqli($servername, $user, $password, $dbname);
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
	# code...
}
	$sql = "INSERT INTO respuestas (respuesta1, respuesta2, respuesta3, respuesta4, respuesta5, respuesta6, respuesta7, respuesta8, respuesta9, respuesta10, respuesta11, respuesta12, respuesta13, respuesta14, respuesta15, respuesta16) /** columnas  de labase datos*/
		VALUES ('".$_POST["pregunta1"]."' , '".$_POST["pregunta2"]."' , '".$_POST["pregunta3"]."' , '".$_POST["pregunta4"]."' , '".$_POST["pregunta5"]."' , '".$_POST["pregunta6"]."' , '".$_POST["pregunta7"]."' , '".$_POST["pregunta8"]."' , '".$_POST["pregunta9"]."' , '".$_POST["pregunta10"]."' ,'".$_POST["pregunta11"]."' , '".$_POST["pregunta12"]."' , '".$_POST["pregunta13"]."' , '".$_POST["pregunta14"]."' , '".$_POST["pregunta15"]."' , '".$_POST["pregunta16"]."')";

if (mysqli_query($conn, $sql)) {

	header('location:index.php');
	exit();
	# code...
}
else{
	echo "<script>alert('Error de conexion...')</script>";
}

mysqli_close($conn);

?>