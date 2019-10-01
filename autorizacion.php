<?php
/*Juan leonardo Ramirez Velasquez
Jean Sebastian Gomez Salinas
Cristian Felipe Saenz Guarnizo
Ronal Andrey Rojas Riaño
Universidad de Cundinamarca
Profesor Alonso Guevara*/ 
      session_start();
      error_reporting(0);
      $varsesion= $_SESSION['username'];
      if ($varsesion== null || $varsesion= '') {
          echo '<script type="text/javascript">
			alert("Usted no tiene autorización");
			function redireccionar(){
			  window.location="index.php";
			} 
			setTimeout ("redireccionar()", 1000);
			</script>';
          die();
      }
?>