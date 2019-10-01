<?php 
   include ("nore.php");
 ?>
 <!-- Juan leonardo Ramirez Velasquez
Jean Sebastian Gomez Salinas
Cristian Felipe Saenz Guarnizo
Ronal Andrey Rojas Riaño
Universidad de Cundinamarca
Profesor Alonso Guevara -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="styles/estilosforms.css">
	<link rel="stylesheet" href="icomoon/style.css">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<title>Registro | Kbra</title>
	<link rel="stylesheet" href="styles/loader.css">
</head>
<body>
	 <div id="contenedor_carga">
     <div id="carga">
      <img src="images/logo2.svg">
     </div>
	</div> 
	<form action="recivir.php" method="POST" accept-charset="utf-8" class="contenedor">
		<div class="container">
			<h1 class="titulo-login">Registro</h1>
		</div>
			<div class="inputs">
			<input type="text" placeholder="nombre" class="cajas" required name="name">
			<input type="text" placeholder="apellido" class="cajas" required name="surname">
			<input type="text" placeholder="Nombre de usuario" class="cajas" required name="username">
			<input type="password" placeholder="Contraseña" class="cajas" required name="password">
			<input type="text" placeholder="tecno@email.com" class="cajas" required name="email">
			<input type="checkbox" required=""><a href="terminoscondiciones.html" style="text-decoration: none; color:#fff;">Terminos y Condiciones</a>
			<input type="submit" value="Registrar" class="boton-entrar">
			<p class="ulr-reg">Ya tienes cuenta <a href="login.php">Aquí</a></p>
			</div>
	</form>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	 <script src="scripts/loader.js"></script>
</body>
</html>	