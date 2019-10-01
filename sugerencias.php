<!-- Juan leonardo Ramirez Velasquez
Jean Sebastian Gomez Salinas
Cristian Felipe Saenz Guarnizo
Ronal Andrey Rojas Riaño
Universidad de Cundinamarca
Profesor Alonso Guevara -->
<?php 
    include ("autorizacion.php");
?>
<!DOCTYPE html>
<html lang="es">

<!--head es la cabeza o titulo de lapagina-->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!--title es el titulo de la pagina web-->
        <title> Solucion y Sugerencias</title>
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/estilossuge.css">
    <link rel="stylesheet" href="styles/loader.css">

  </head> 

<!--Body es el cuerpo de la pagina todo lo visual al cliente-->

<body> 
    <div id="contenedor_carga">
     <div id="carga">
      <img src="images/logo2.svg">
     </div>
  </div> 

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="inicio.php">
    <img src="images/logo2.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Kbra</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     <!-- <li class="nav-item active">
        <a class="nav-link active" href="#"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>-->
      <!--<li class="nav-item">
        <a class="nav-link btn-outline-success rounded" href="chat.html"><i class="far fa-question-circle"></i> Soporte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-outline-success rounded" href="sugerencias.php"><i class="fas fa-lightbulb"></i> Sugerencias</a>
      </li>-->
    </ul>
      <!--<li class="nav-item">
      </li>-->
  </div>
</nav>
<div class="container" style="margin-top: 80px;">
  
    <p class="alerta">
      -En esta página web vas a encontrar una variedad de articulos, pero para su mejora y asegurar tu uso de este sitio, queremos que respondas la siguiente sección de preguntas, se tendran en cuenta para las actualizaciones de la página. ¡Agradecemos tu tiempo otorgado!.  
    </p>

    <!--H1... Es para el titulo de la seccion visual a resolver dentro del cuerpo-->
    <h1>Responde Con  Sinceridad!</h1>
    <!--br /   es para el salto de linea-->
    <br />
    <br />

    <form action = "enviar.php" method="POST" accept-charset="UTF-8" class="container-form">
      <label for="Respuesta">¿Que te parece nuestro servicio?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta1" class="cajas">
      <br />
      <br />
      <label for="Respuesta">¿Problemas con algun pedido?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta2" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿La página web transmite la idea del proyecto?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta3" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿Las actividades del proyecto están bien definidas?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta4" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿Las distintas secciones y títulos son claras y facilitan el acceso a los contenidos?</label>
      <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta5" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿El contenido multimedia es adecuado para los propósitos del proyecto y contribuye a reforzar el resto de contenidos y el mensaje de la página web?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta6" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿El contenido es relevante y de buena calidad?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta7" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿La página se carga de forma rápida?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta8" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿Los distintos elementos de la página se muestran bien?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta9" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿Es fácil encontrar los contenidos?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta10" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿Es fácil volver a la página de inicio cuando se navega?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta11" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿El tamaño de la fuente es adecuado?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta12" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿Los colores y gráficos son adecuados?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta13" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿Los iconos de la página son adecuados para su propósito?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta14" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿La visualización de la página es buena?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta15" class="cajas">
            <br />
            <br />
      <label for="Respuesta">¿El diseño de la web es atractivo?</label>
            <br />
      <input type="text" placeholder="Escribe tu respuesta" name="pregunta16" class="cajas">
      <br />
      <br />

      
      <input type="submit" value="Enviar" class="btn btn-outline-success">


    </form>
</div>
<!-- Footer -->
<footer class="page-footer font-small">
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="inicio.php"> Kbra</a>
  </div>
</footer>
<!-- Footer -->
    <script src="scripts/bootstrap.min.js"></script>
    <script src="jquery-2.1.3.js"></script>
    <script src="scripts/loader.js"></script>
  </body>
</html>