<?php
/*Juan leonardo Ramirez Velasquez
Jean Sebastian Gomez Salinas
Cristian Felipe Saenz Guarnizo
Ronal Andrey Rojas Riaño
Universidad de Cundinamarca
Profesor Alonso Guevara*/
	/**
	 * variables de conexion a la base datos 
	 */
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "basedatos";
	/**
	 *  conexion a la base de datos
	 */


	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	/**
	 *  insert de labase datos
	 */
	//$password=$_POST["password"];
	//$password_cifrado=password_hash(string, PASSWORD_DEFAULT);

	$sql = "INSERT INTO registro (name, surname, username, password, correo) /** columnas  de labase datos**/
		VALUES ('".$_POST["name"]."' , '".$_POST["surname"]."' , '".$_POST["username"]."' , '".$_POST["password"]."' , '".$_POST["email"]."')"; // valores del formulario

		if (mysqli_query($conn, $sql)) {
			header('Location: login.php');
			exit();

		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

mysqli_close($conn);


?>