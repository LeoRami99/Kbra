<?php 
    include ("autorizacion.php");
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
    <meta charset="UTF-8">
    <title>Kbra | Tienda</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">-->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="styles/carrito.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="scripts/carrito.js"></script>
    <link rel="stylesheet" href="styles/loader.css">
    <link rel="stylesheet" href="styles/anadidos.css">
    <script src="scripts/arriba.js"></script>
    <!--<script src="scripts/jsPDF-1.3.2/dist/jspdf.min.js"></script>-->
</head>
<body style="background-color:#A9A8A7;">
<span class="ir-arriba"><i class="fas fa-arrow-circle-up"></i></span>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <img src="images/logo2.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Kbra</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     <!-- <li class="nav-item active">
        <a class="nav-link active" href="#"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link btn-outline-success rounded" href="chat.php"><i class="far fa-question-circle"></i> Soporte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-outline-success rounded" href="sugerencias.php"><i class="fas fa-lightbulb"></i> Sugerencias</a>
      </li>
    </ul>
      <!--<li class="nav-item">
      </li>-->
      <a href="cerrar_sesion.php" class="btn btn-outline-danger"><i class="fas fa-door-open"></i> Cerrar sesion</a>
  </div>
</nav>


    <div class="bd-example" style="margin-top: 45px;">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <!--<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>-->
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/foto1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>BIENVENIDO</h5>
          <p>Aquí te brindaremos la mejor atención</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/fondo.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <!--<div id="contenedor_carga">
     <div id="carga"></div>
    </div>-->
    
    <div class="container" style="margin-bottom: 20px; margin-top: 20px">
        <div class="row">
            <!-- Elementos generados a partir del JSON -->
            <main id="items" class="col-sm-12 row"></main>
            <!-- Carrito -->
            <aside class="col-sm-10" id="factura" style="background-color:#A9A8A7;">
                <h2><i class="fas fa-shopping-cart"></i>Carrito</h2>
                <center><img src="favicon/mstile-150x150.png" alt="" width="100px" height="100px;"></center> 
                <!-- Elementos del carrito -->
                <div id="capa"></div>
                <ul id="carrito" class="list-group"></ul>
                <hr>
                <!-- Precio total -->
                <h4><?php echo $_SESSION['username']?></h4>
                <div id="dato-1"></div>
                <div id="dato-2"></div>
                <div id="dato-3"></div>
                <div id="dato-4"></div>
                <form action="#" method="get">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-route"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Dirección de la residencia" id="diruser" required="Por favor introduce tu dirección">
                </div>
                </form>
                <p class="text-right">Total: <span id="total"></span>&dollar;</p>
            </aside>
       		<button onclick="alert('Gracias por comprar ❤', HTMLtoPDF())" id="myBtn" class="btn btn-danger d-inline-block mx-auto " type="submit"><i class="fas fa-scroll"></i> Generar factura de pago</button>
            <!--<a id="descargar">descarga</a>-->
        </div>	
        
                <!--<a href="#" onclick="HTMLtoPDF()">Download PDF</a>-->
    </div>

    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <!--<script src="scripts/loader.js"></script>-->
<!-- Footer -->
<footer class="page-footer font-small bg-dark lighten-3 pt-4" style="color:#fff;">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mb-4">Kbra</h5>
          <p>Kbra nace de la idea de exposición para apoyar el emprendimiento local en el municipio de ubaté</p>
        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mb-4">Páginas</h5>

          <ul class="list-unstyled">
            <li>
              <p>
                <a href="chat.php">Chat</a>
              </p>
            </li>
            <li>
              <p>
                <a href="sugerencias.php">Sugerencias</a>
              </p>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Contact details -->
          <h5 class="font-weight-bold text-uppercase mb-4">Dirección</h5>

          <ul class="list-unstyled">
            <li>
              <p>
                <i class="fas fa-home mr-3"></i> Local 21, C. comercial plaza de mercado</p>
            </li>
            <li>
              <p>
                <i class="fas fa-phone mr-3"></i> +573002100794</p>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="inicio.html">Kbra</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  	<script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="jspdf.js"></script>
  	<script src="pdfFromHTML.js"></script>
</body>
</html>