/*Juan leonardo Ramirez Velasquez
Jean Sebastian Gomez Salinas
Cristian Felipe Saenz Guarnizo
Ronal Andrey Rojas Riaño
Universidad de Cundinamarca
Profesor Alonso Guevara*/
 window.onload = function () {
    var pdf = new jsPDF();
            // Variables
            let baseDeDatos = [
                {
                    id: 1,
                    nombre: 'Gorra',
                    des: 'Gorra marca Adidas negra con amarilla muy atractiva no se estiñe al lavarla no use detergente para prevenir este daño',
                    img: "./productos/gorra.jpg",
                    precio: 14000
                },
                {
                    id: 2,
                    nombre: 'Gorra',
                    img: "./productos/gorra2.jpg",
                    des : 'Gorra negra sencilla para hombre con velcro no estiñe al lavarla, evita detergente para prevenir esta problemática de que pierda el color.',
                    precio: 12000
                },
                {
                    id: 3,
                    nombre: 'Gorras',
                    des: ' Gorra en malla para dama y caballero, diferentes diseños, no estiñe.',
                    img:"./productos/gorra3.jpg",
                    precio: 12000
                },
                {
                    id: 4,
                    nombre: 'Gorra',
                    des: 'Gorra caballero buena calidad, diferentes diseños de color, no estiñe.',
                    img:"./productos/gorra4.jpg",
                    precio: 14000
                },
                {
                    id: 5,
                    nombre: 'Gorra',
                    des:'Gorra para dama color negro, buena calidad, no estiñe.',
                    img: "./productos/gorra5.jpg",
                    precio: 12000
                },
                {
                    id: 6,
                    nombre: 'Gorra',
                    des:' Gorra para dama con lentejuelas de adorno.',
                    img:"./productos/gorra6.jpg",
                    precio: 15000
                },
                {
                    id: 7,
                    nombre: 'Gorra',
                    des:' Gorra azul marca fox para hombre, no estiñe al momento de lavarla.',
                    img:"./productos/gorra7.jpg",
                    precio: 15000
                },
                {
                    id: 8,
                    nombre: 'Reloj',
                    des:' Reloj marca xinjia, unisex, resistente al agua.',
                    img:"./productos/reloj3.jpg",
                    precio: 10000
                },
                {
                    id: 9,
                    des:' Reloj para hombre elegante resisten al agua, diferentes diseños.',
                    nombre: 'Reloj',
                    img:"./productos/relojH.jpg",
                    precio: 45000
                },{
                    id: 10,
                    nombre: 'Reloj',
                    des:'Reloj para dama resistente al agua diferentes diseños y tamaños.',
                    img:"./productos/relojM.jpg",
                    precio: 37000
                },
                {
                    id: 11,
                    nombre: 'Reloj',
                    des:'Reloj para niño y niña con luces y dinámicos (no resistentes al agua)',
                    img:"./productos/relojNiños.jpg",
                    precio: 8000
                },
                {
                    id: 12,
                    nombre: 'Reloj',
                    des:' Reloj para niño y niña con luces y dinámicos (no resistentes al agua)',
                    img:"./productos/relojNiños1.jpg",
                    precio: 8000
                },
                {
                    id: 13,
                    nombre: 'Cinturon',
                    des:' Cinturon en cuero color café también en color negro',
                    img:"./productos/cinturon.jpg",
                    precio: 17000
                },
                {
                    id: 14,
                    nombre: 'Cinturon',
                    des:' Riata para hombre buena lona de chapa gruesa.',
                    img:"./productos/cinturon5.jpg",
                    precio: 12000
                },
                {
                    id: 15,
                    nombre: 'Cinturon',
                    des:' Cinturón ancho en cuero para dama se encuentra en colores negro, café, blanco, rojo.',
                    img:"./productos/cinturon2.jpg",
                    precio: 15000
                },
                {
                    id: 16,
                    nombre: 'Cinturon',
                    des:' Cinturón para dama delgado en cuero para dama se encuentra en colores blanco, negro, café, rojo.',
                    img:"./productos/cinturon3.jpg",
                    precio: 10000
                },
                {
                    id: 17,
                    nombre: 'Cinturon',
                    des:'riata unisex lona delgadita se encuentra en diferentes colores tanto para hombre como para dama.',
                    img:"./productos/cinturon4.jpg",
                    precio: 6000
                },
                {
                    id: 18,
                    nombre: 'PolyStation',
                    des:' Consola de videojuegos tradicionales en casete, posee 30 juegos incorporados además de que consigues los casetes por tan solo $6000',
                    img:"./productos/polystation.jpg",
                    precio: 40000
                },
                {
                    id: 19,
                    nombre: 'PolyStation',
                    des:' Consola de videojuegos tradicionales en casete, posee 30 juegos incorporados además de que consigues los casetes por tan solo $6000',
                    img:"./productos/polystationf.jpg",
                    precio: 40000
                }
            ]
            let $items = document.querySelector('#items');
            let carrito = [];
            let total = 0;
            let $carrito = document.querySelector('#carrito');
            let $total = document.querySelector('#total');
            // Funciones
            function renderItems () {
                for (let info of baseDeDatos) {
                    // Estructura
                    let miNodo = document.createElement('div');
                    miNodo.classList.add('card', 'col-sm-3', 'border-dark' ,'mb-3');
                    miNodo.style.backgroundColor = '#9D9D9D';
                    //miNodo.style.borderRadius = '20px';
                    miNodo.style.boxShadow='2px 2px 5px black';
                    miNodo.style.marginRight = '20px';
                    miNodo.style.marginLeft = '50px';
                    
                    // Body
                    let miNodoCardBody = document.createElement('div');
                    miNodoCardBody.classList.add('card-body');
                    //
                    let miNodoTitle2 = document.createElement('img');
                    miNodoTitle2.classList.add('card-img-top');
                    miNodoTitle2.setAttribute("src", info['img']); 
                    miNodoTitle2.imgContent = info['img'];
                    // Titulo
                    let miNodoTitle = document.createElement('h5');
                    miNodoTitle.classList.add('card-text');
                    miNodoTitle.style.fontWeight = 'bold';
                    miNodoTitle.textContent = info['nombre'];
                    // Descripción
                    let miNodoDes = document.createElement('p');
                    miNodoDes.classList.add('card-text');
                    miNodoDes.textContent = info['des'];
                    // Precio
                    let miNodoPrecio = document.createElement('p');
                    miNodoPrecio.classList.add('card-text');
                    miNodoPrecio.textContent = info['precio'] + '$';
                    // Boton 
                    let miNodoBoton = document.createElement('button');
                    miNodoBoton.classList.add('btn', 'btn-primary','fas', 'fa-cart-plus');
                    miNodoBoton.style.boxShadow='2px 2px 2px black';
                    //miNodoBoton.textContent = '+';
                    miNodoBoton.setAttribute('marcador', info['id']);
                    miNodoBoton.addEventListener('click', anyadirCarrito);
                    // Insertamos
                    miNodoCardBody.appendChild(miNodoTitle);
                     miNodoCardBody.appendChild(miNodoTitle2);
                    miNodoCardBody.appendChild(miNodoDes);
                    miNodoCardBody.appendChild(miNodoPrecio);
                    miNodoCardBody.appendChild(miNodoBoton);
                    miNodo.appendChild(miNodoCardBody);
                    $items.appendChild(miNodo);
                }
            }
            function anyadirCarrito () {
                // Anyadimos el Nodo a nuestro carrito
                carrito.push(this.getAttribute('marcador'))
                // Calculo el total
                calcularTotal();
                // Renderizamos el carrito 
                renderizarCarrito();

            }

            function renderizarCarrito () {
                // Vaciamos todo el html
                $carrito.textContent = '';
                // Generamos los Nodos a partir de carrito
                carrito.forEach(function (item, indice) {
                    // Obtenemos el item que necesitamos de la variable base de datos
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    // Creamos el nodo del item del carrito
                    let miNodo = document.createElement('li');
                    miNodo.style.backgroundColor='#9D9D9D';
                    miNodo.style.borderRadius='10px';
                    miNodo.style.boxShadow='5px 5px 5px #000';
                    miNodo.style.marginBottom='20px';
                    miNodo.classList.add('list-group-item', 'text-center');
                    miNodo.textContent = `${miItem[0]['des']} - ${miItem[0]['nombre']} - ${miItem[0]['precio']}$-`;
                    // Boton de borrar
                    let miBoton = document.createElement('button');
                    miBoton.classList.add('btn', 'btn-danger', 'mx-5', 'fas','fa-times-circle');
                    //miBoton.textContent = '-';
                    miBoton.setAttribute('posicion', indice);
                    miBoton.addEventListener('click', borrarItemCarrito);
                    // Mezclamos nodos
                    miNodo.appendChild(miBoton);
                    $carrito.appendChild(miNodo);
                })
            }

            function borrarItemCarrito () {
                // Obtenemos la posicion que hay en el boton pulsado
                let posicion = this.getAttribute('posicion');
                // Borramos la posicion que nos interesa
                carrito.splice(posicion, 1);
                // volvemos a renderizar
                renderizarCarrito();
                // Calculamos de nuevo el precio
                calcularTotal();

            }

            function calcularTotal () {
                // Limpiamos precio anterior
                total = 0;
                // Recorremos el array del carrito
                for (let item of carrito) {
                    // De cada elemento obtenemos su precio
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    total = total + miItem[0]['precio'];
                }
                // Formateamos el total para que solo tenga dos decimales
                let totalDosDecimales = total.toFixed(0);
                // Renderizamos el precio en el HTML
                $total.textContent = totalDosDecimales;
                return total;
            }
            // Eventos

            // Inicio
            renderItems();
            /*function boton () {
                var boton=document.getElementById('boton');
                boton.addEventListener("click", );
            }
            boton();*/
            /*var x=document.getElementById('container').value;
            var contenidoDeArchivo = x;
            var elem = document.getElementById('descargar');

            elem.download = "archivo.txt";
            elem.href = "data:application/octet-stream," /*/
        

    
} 