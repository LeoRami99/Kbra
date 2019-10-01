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
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kbra | Soporte</title>
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="styles/loader.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Scripts jQuery, bootstrap -->
	
	  		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	       
	       <!-- Estilos  bootstrap, chat-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	      <!-- área de código Firebase y lectura de Mensajes-->
	       <script src="https://www.gstatic.com/firebasejs/3.6.1/firebase.js"></script>
	<script>
	    // Initialize Firebase
	  var config = {
	    apiKey: "AIzaSyAQfLcuIvS09cb9SlqxOMGeHEECr2P2ggA",
	    authDomain: "chat-cfe97.firebaseapp.com",
	    databaseURL: "https://chat-cfe97.firebaseio.com",
	    projectId: "chat-cfe97",
	    storageBucket: "chat-cfe97.appspot.com",
	    messagingSenderId: "876790398333"
	  };
	  firebase.initializeApp(config);
	 
	    //Variable con acceso a datos 
	    var TablaDeBaseDatos= firebase.database().ref('chat');
	    
	    TablaDeBaseDatos.limitToLast(20).on('value',function(snapshot){
	        
	         $(".chat").html(""); // Limpiamos todo el contenido del chat
	        
	        // Leer todos los mensajes en firebase
	        snapshot.forEach(function(e){
	            var objeto=e.val(); // Asignar todos los valores a un objeto
	            
	            // Validar datos nulos y agregar contenido en forma de lista etiqueta <li>
	             if((objeto.Mensaje!=null)&&(objeto.Nombre!=null)){
	                 
	                 // Copia el contenido al template y luego lo inserta en el chat
	                 $( "#plantilla" ).clone().prependTo( ".chat" );
	                 $('.chat #plantilla').show(10);
	                 $('.chat #plantilla .Nombre').html(objeto.Nombre);
	                 $('.chat #plantilla .Mensaje').html(objeto.Mensaje);
	                 $('.chat #plantilla .Tiempo').html(objeto.Fecha);
	                 $('.chat #plantilla').attr("id","");
	             }
	            
	        });
	    });
	    
	    
	    
	</script>
</head>
<body style="background: linear-gradient(98deg, #456990, #5933CE, #297BD0 100%);">
	<div id="contenedor_carga">
     <div id="carga">
      <img src="images/logo2.svg">
     </div>
	</div> 
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="inicio.php">
    <img src="images/logo2.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Kbra</a>

</nav>
	<section>
		
        <!-- inicio de la caja de chat con bootstrap -->
       	<div class="todo">
       		
			        <div class="col-md-6 col-md-offset-3">
			            <div class="panel panel-primary">
			                <div class="panel-heading">
			                    <span class="glyphicon glyphicon-comment"></span> Kbra | Soporte
			                    <div class="btn-group pull-right">
			                        <!--<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
			                            <span class="glyphicon glyphicon-chevron-down"></span>
			                        </button>
			                        <ul class="dropdown-menu slidedown">
			                            <li><a href="http://develoteca.com"><span class="glyphicon glyphicon-refresh">
			                            </span>Develoteca</a></li>
			                            <li><a href="https://www.youtube.com/user/dimit28"><span class="glyphicon glyphicon-ok-sign">
			                            </span>Youtube</a></li>
			                            
			                        </ul>-->
			                    </div>
			                </div>
			                <div class="panel-body">
			                    <ul class="chat"> </ul>
			                </div>
			                <div class="panel-footer">
			                    <div class="input-group">
			                        <input id="Mensaje" type="text" class="form-control input-sm" placeholder="Escribe un mensaje..." />
			                        <span class="input-group-btn">
			                            <button class="btn btn-warning btn-sm" id="btnEnviar" >
			                                Enviar</button>
			                        </span>
			                    </div>
			                </div>
			            </div>
			        </div>
       	</div>
			        <!--  Fin de la caja de chat con bootstrap -->
			    </div>
			</div>
  <!-- template del item del chat (Oculto: para agarrar un clon y llenarlo e insertar en el chat)-->
       <li style="display:none" id="plantilla" class="left clearfix">
           <span class="chat-img pull-left">
             <img src="https://ukla.org/images/icons/user-icon.svg" width="50px" height="50px"class="img-circle"/>
           </span>
            <div class="chat-body clearfix">
                    <div class="header">
                      <strong class="primary-font Nombre" >Jack Sparrow</strong>
                        <small class="pull-right text-muted">
                        <span class="glyphicon glyphicon-asterisk Tiempo">
                        </span> </small>
                    </div>
                        <p class="Mensaje">
                               Mensaje
                        </p>
                </div>
        </li>
</section>
    <!-- Scripts de acción al botón -->
      <script>
       var Nombre= "<?php echo $_SESSION['username']?>";
          
       $('#btnEnviar').click(function(){
           var formatofecha= new Date(); 
           var d= formatofecha.getUTCDate();
           var m= formatofecha.getMonth()+1;
           var y= formatofecha.getFullYear();
           var h=formatofecha.getHours();
           var min= formatofecha.getMinutes();
           
           Fecha= d+"/"+m+"/"+y+" "+h+":"+min;
           
           TablaDeBaseDatos.push({
               Nombre:Nombre,
               Mensaje:$("#Mensaje").val(),
               Fecha:Fecha
            });
           
           
       });
       </script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/loader.js"></script>
</body>
</html>