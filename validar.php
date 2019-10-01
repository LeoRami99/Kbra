<?php  
/*Juan leonardo Ramirez Velasquez
Jean Sebastian Gomez Salinas
Cristian Felipe Saenz Guarnizo
Ronal Andrey Rojas Riaño
Universidad de Cundinamarca
Profesor Alonso Guevara*/

	session_start();
?>	
<?php 
include 'server.php';
	if (isset($_POST['login'])) {
		$usuario = $_POST['username'];
		$pw = $_POST['password'];
		//password_verify($password, hash)
		$log = mysqli_query($conect,"SELECT * FROM registro WHERE username='$usuario' AND password='$pw'");
		if (mysqli_num_rows($log)>0) {
			$row = mysqli_fetch_array($log);
			$_SESSION["username"]=$row['username'];
			header("location:inicio.php");
		}
		else{
			echo '<script type="text/javascript">
			alert("Contraseña y usuario incorrecto");
			function redireccionar(){
			  window.location="index.php";
			} 
			setTimeout ("redireccionar()", 1000);
			</script>';
		}
	}
 ?>