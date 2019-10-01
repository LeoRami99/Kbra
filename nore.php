<?php
/*Juan leonardo Ramirez Velasquez
Jean Sebastian Gomez Salinas
Cristian Felipe Saenz Guarnizo
Ronal Andrey Rojas Riaño
Universidad de Cundinamarca
Profesor Alonso Guevara*/
  session_start();
  include 'server.php';
  if (isset($_SESSION['username'])) {
    header('location:inicio.php');
  }
?>