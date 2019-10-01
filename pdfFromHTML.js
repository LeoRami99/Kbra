/*Juan leonardo Ramirez Velasquez
Jean Sebastian Gomez Salinas
Cristian Felipe Saenz Guarnizo
Ronal Andrey Rojas Riaño
Universidad de Cundinamarca
Profesor Alonso Guevara*/
function HTMLtoPDF(){
  function datoscompra () {
    // body... 
    /*var direccion_usuario=document.getElementById('direcccion_user').value;
    document.getElementById('dato-3').innerHTML=direccion_usuario;*/
    var titulo_tienda='Kbra';
    document.getElementById("dato-1").innerHTML =titulo_tienda;
    var direccion_local='Local 21, C. comercial plaza de mercado';
    document.getElementById("dato-2").innerHTML = "*Dirección tienda: "+direccion_local;
    var numfactura=(Math.random() * 10000) + 1;
    document.getElementById("dato-4").innerHTML="*Referencia de pago: "+numfactura;
    //document.getElementById("dato-3").innerHTML= direccion_usuario;
    var direccion_usuario=document.getElementById('diruser').value;
    var r=document.getElementById('dato-3').innerHTML="*Dirección del comprador: "+direccion_usuario;
  }
   
  
  datoscompra();

var pdf = new jsPDF('p', 'pt', 'letter');
source = $('#factura')[0];
specialElementHandlers = {
	'#bypassme': function(element, renderer){
		return true
	}
}
margins = {
    top: 50,
    left: 50,
    width: 500
  };
pdf.fromHTML(
  	source // HTML string or DOM elem ref.
  	, margins.left // x coord
  	, margins.top // y coord
  	, {
  		'width': margins.width // max width of content on PDF
  		, 'elementHandlers': specialElementHandlers
  	},
  	function (dispose) {
  	  // dispose: object with X, Y of the last line add to the PDF
  	  //          this allow the insertion of new lines after html
        pdf.save('Factura.pdf');
      }
  )		
}



