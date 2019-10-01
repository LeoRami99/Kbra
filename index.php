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
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/loader.css">
  <link rel="stylesheet" href="styles/anadidos.css">
  <script src="scripts/arriba.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">


<title>Kbra</title>
</head>
<body>
  <span class="ir-arriba"><i class="fas fa-arrow-circle-up"></i></span>
  <div id="contenedor_carga">
     <div id="carga">
      <img src="images/logo2.svg">
     </div>
</div> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <img src="images/logo2.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Kbra</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    </ul>
      <a href="registro.php "class="btn btn-outline-success rounded m-1"><i class="fas fa-user-plus"></i> Registro</a>
      <a href="login.php "class="btn btn-outline-danger rounded m-1"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
  </div>
</nav>
<!-- Carrusel de imagenes -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/fondo.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/foto1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!--<div style="padding-left:16px">
  <h2>Responsive Topnav Example</h2>
  <p>Resize the browser window to see how it works.</p>
</div>-->
<h1 class="titulo-cre">KBRA</h1>
<div class="container" style="margin-top: 20px;">
  <div class="card-deck">
    
    <div class="row">
      <div class="col-sm-12 row">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;  box-shadow: 5px 5px 20px #000;margin-left:30px;">
  <div class="card-header"><i class="fas fa-tags"></i> Productos</div>
  <div class="card-body">
    <p class="card-text">Siempre tenemos los mejores productos de calidad y abajo costo para ti y tu familia.</p>
  </div>
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;  box-shadow: 5px 5px 20px #000;margin-left:30px;">
  <div class="card-header"><i class="fas fa-question-circle"></i> Soporte</div>
  <div class="card-body">
    <p class="card-text">Te brindamos la mejor atención, siempre estamos disponible ante cualquier pregunta y/o queja.</p>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 18rem;  box-shadow: 5px 5px 20px #000;margin-left:30px;">
  <div class="card-header"><i class="fas fa-map-marked-alt"></i> Lugar</div>
  <div class="card-body">
    <p class="card-text">También nos puedes visitar en nuestra tienda física te atenderemos de la mejor manera</p>
  </div>
</div> 
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;  box-shadow: 5px 5px 20px #000;margin-left:30px;">
  <div class="card-header"> <i class="fas fa-exclamation"></i>Kbra</div>
  <div class="card-body">
    <p class="card-text">En Kbra encontraras lo necesesario las 24/7</p>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<!-- SECCION DE PRODUCTOS-->
<h1 class="titulo-cre">PRODUCTOS</h1>
<div class="container">
  <div class="card-deck">
    
    <div class="card mb-3" style="max-width: 540px; box-shadow: 5px 5px 20px #000">
    <div class="row no-gutters">
      <div class="col-md-10">
        <img src="productos/gorra.jpg" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Gorra</h5>
          <p class="card-text">Gorra marca Adidas negra con amarillo muy atractiva no se estiñe al lavarla no use detergente para prevenir este daño.</p>
          <p class="card-text"><small class="text-muted">Kbra</small></p>
        </div>
      </div>
    </div>
  </div>

   <div class="card mb-3" style="max-width: 540px;box-shadow: 5px 5px 20px #000">
    <div class="row no-gutters">
      <div class="col-md-10">
        <img src="productos/cinturon.jpg" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Cinturón</h5>
          <p class="card-text">Cinturón en cuero color café también en color negro.</p>
          <p class="card-text"><small class="text-muted">Kbra</small></p>
        </div>
      </div>
    </div>
  </div>

   <div class="card mb-3" style="max-width: 540px;box-shadow: 5px 5px 20px #000">
    <div class="row no-gutters">
      <div class="col-md-10">
        <img src="productos/polystationf.jpg" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">PolyStation</h5>
          <p class="card-text">Consola de videojuegos tradicionales en casete, posee 30 juegos incorporados.</p>
          <p class="card-text"><small class="text-muted">Kbra</small></p>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<!--FIN DE LA SECCION PRODUCTOS-->
<h1 class="titulo-cre">CREADORES</h1>
<!-- CREADORES DE LA PÁGINA WEB PARA PROYECTO DE PROGRAMACIÓN -->
    <div class="container" style="margin-bottom: 20px;margin-top: 20px;">
    <div class="card-deck">
      <div class="row">
        <div class="col-sm-12 row">
              <div class="card border-success mb-3" style="width: 18rem; box-shadow: 5px 5px 20px #000;margin-left:30px;">
              <img class="card-img-top" src="images/leo2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Juan Leonardo Ramírez Velasquez</h5>
                <p class="card-text">Lider del proyecto Kbra. Estudiante de la Universidad de Cundinamarca seccional Ubaté.</p>
                <p class="card-text"><small class="text-muted">Kbra</small></p>
              </div>
            </div>
            <div class="card border-success mb-3" style="width: 18rem; box-shadow: 5px 5px 20px #000; margin-left:30px;">
              <img class="card-img-top" src="images/felipe.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Cristian Felipe Saenz Gurnizo</h5>
                <p class="card-text">Encargado Base de Datos y backend. Estudiante de la Universidad de Cundinamarca seccional Ubaté.</p>
                <p class="card-text"><small class="text-muted">Kbra</small></p>
              </div>
            </div>
            <div class="card card border-success mb-3" style="width: 18rem; box-shadow: 5px 5px 20px #000; margin-left:30px;">
              <img class="card-img-top" src="images/Jean.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Jean Sebastian Gomez Salinas</h5>
                <p class="card-text">Encargado base de datos. Estudiante de la Universidad de Cundinamarca seccional Ubaté.</p>
                <p class="card-text"><small class="text-muted">Kbra</small></p>
              </div>
            </div>
            <div class="card border-success mb-3" style="width: 18rem; box-shadow: 5px 5px 20px #000; margin-left:30px;">
              <img class="card-img-top" src="images/logo2.svg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Ronal Andrey Rojas Riaño</h5>
                <p class="card-text">Encargado de maquetado y diseño. Estudiante de la Universidad de Cundinamarca seccional Ubaté.</p>
                <p class="card-text"><small class="text-muted">Kbra</small></p>
              </div>
            </div>
        </div>
      </div>
  </div>
</div>  
<!-- Aqui termina los creadores -->

      <!-- Footer -->
<footer class="page-footer font-small pt-4" style="background: linear-gradient(98deg, #396DF1, #4031AB, #59C7DE 100%);color:#fff;">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="inicio.html"> Kbra</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script src="scripts/loader.js"></script>
 <script src="scripts/jquery-3.4.1.min.js"></script>
  <script src="scripts/bootstrap.min.js"></script>

</body>
</html>