<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Juego del ahorcado</title>
<link rel="Stylesheet" href="Estilos.css" type="text/css">
<script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
<script type="text/javascript">
    
    function alerta(){
    var confirmacion = confirm("¿Desea Cerrar Sesion?");
    if(confirm("¿Desea Cerrar Sesion?")){
       location.href ="login.php";
} else {
    alert("Hola");
}
}
</script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        </head>
    <body>
<header>
    <section class="wrapper">
    <nav >
        <ul>
            <li><a href="JuegoAhorcado.php">Juega y Aprende</a></li>
            <li><a href="Galeria.php">Abecedario</a></li>
            <li><a href="Vocales/Vocales.php">Vocales</a></li>
            <li><a href="Consonantes.php">Consonantes</a></li>
            <li><a href="Palabras.php">Palabras</a></li>
            <a href="Profile.php"><button type="button" class="btn btn-warning btn-lg">Mi Perfil</button></a>
        <button type="button" onclick="alerta()" class="btn btn-warning btn-lg">CERRAR SESION</button>
 
        </ul>
    </nav>
    </section>
</header>

    <section class=fondo>
       <br><br><br>  
<div class="shadow-lg p-3 mb-5 bg-white rounded">Juego del Ahorcado</div>
        <canvas id="pantalla" width="960px" height="450px"> <!-- etiqueta del canvas con sus medidas en la pantalla -->
            Tu navegador no soporta Canvas.
        </canvas>
        <!-- El boton que nos sirve para recargar la pagina y asi generar una nueva palabra y volver a jugar -->
       <center> <button id="boton" type="reset" onclick="javascript:window.location.reload();">Volver a Jugar</button></center>
        <script>
            
            /* Variables */
            var ctx;
            var canvas;
            var palabra;
            var letras = "QWERTYUIOPASDFGHJKLÑZXCVBNM";
            var colorTecla = "#585858";
            var colorMargen = "red";
            var inicioX = 200;
            var inicioY = 300;
            var lon = 35;
            var margen = 20;
            var pistaText = "";

            /* Arreglos */
            var teclas_array = new Array();
            var letras_array = new Array();
            var palabras_array = new Array();

            /* Variables de control */
            var aciertos = 0;
            var errores = 0;
            
            /* Palabras */
            palabras_array.push("LEON");
            palabras_array.push("CABALLO");
            palabras_array.push("PERRO");
            palabras_array.push("GATO");
            palabras_array.push("LAGARTIJA");
            palabras_array.push("RINOCERONTE");
            palabras_array.push("TIBURON");
            palabras_array.push("CARACOL");
            palabras_array.push("ALACRAN");
            palabras_array.push("ARAÑA");
            palabras_array.push("CHAPULIN");
            palabras_array.push("AVESTRUZ");
            palabras_array.push("OCELOTE");
            palabras_array.push("MUSARAÑA");
            palabras_array.push("NUEVE");
            palabras_array.push("DIEZ");
            palabras_array.push("DIEZYNUEVE");
            palabras_array.push("VEINTIOCHO");
            palabras_array.push("CINCO");
                    
            /* Objetos */
            function Tecla(x, y, ancho, alto, letra){
                this.x = x;
                this.y = y;
                this.ancho = ancho;
                this.alto = alto;
                this.letra = letra;
                this.dibuja = dibujaTecla;
            }
            
            function Letra(x, y, ancho, alto, letra){
                this.x = x;
                this.y = y;
                this.ancho = ancho;
                this.alto = alto;
                this.letra = letra;
                this.dibuja = dibujaCajaLetra;
                this.dibujaLetra = dibujaLetraLetra;
            }
           
         

            /* Dibujar Teclas*/
            function dibujaTecla(){
                ctx.fillStyle = colorTecla;
                ctx.strokeStyle = colorMargen;
                ctx.fillRect(this.x, this.y, this.ancho, this.alto);
                ctx.strokeRect(this.x, this.y, this.ancho, this.alto);
                
                ctx.fillStyle = "white";
                ctx.font = "bold 20px courier";
                ctx.fillText(this.letra, this.x+this.ancho/2-5, this.y+this.alto/2+5);
            }
            
            /* Dibua la letra y su caja */
            function dibujaLetraLetra(){
                var w = this.ancho;
                var h = this.alto;
                ctx.fillStyle = "black";
                ctx.font = "bold 40px Courier";
                ctx.fillText(this.letra, this.x+w/2-12, this.y+h/2+14);
            }
            function dibujaCajaLetra(){
                ctx.fillStyle = "white";
                ctx.strokeStyle = "black";
                ctx.fillRect(this.x, this.y, this.ancho, this.alto);
                ctx.strokeRect(this.x, this.y, this.ancho, this.alto);
            }
            
            
            /// Funcion para dar una pista la usuario ////
            function pistaFunction(palabra){
                let pista = ""; // Se crea la variable local pista que contendra nuestra frase de pista
                switch(palabra){  // Se crea un switch para poder controlar las pistas segun la palabra 
                    case 'LEON':   // Se debera hacer un case por cada palabra 
                        pista = "Ruge y es fuerte";
                        break;     // Es importante el break en cada case 
                    case 'CABALLO':
                        pista = "Hay de tierra y hay de mar";
                        break;
                    case 'PERRO':
                        pista = "El mejor amigo del hombre";
                        break;
                    case 'GATO':
                        pista = "Son tiernos pero arañan";
                        break;
                    case 'LAGARTIJA':
                        pista = "Se arrastra y es verde";
                        break;
                    case 'RINOCERONTE':
                        pista = "Es grande, gordo y con un cuerno";
                        break;
                    case 'TIBURON':
                        pista = "Vive en el mar y come peces";
                        break;
                    case 'ALACRAN':
                        pista = "Tiene dos tenazas";
                        break;
                    case 'ARAÑA':
                        pista = "Teje su tela";
                        break;
                    case 'CHAPULIN':
                        pista = "Salta sin parar";
                        break;
                    case 'NUEVE':
                        pista = "1+8=¿?";
                        break;
                    case 'LUPA':
                        pista = "Se usa para ver mejor";
                        break;
                    case 'DIEZYNUEVE':
                        pista = "10+9=¿?";
                        break;
                    case 'VEINTIOCHO':
                        pista = "20+8=¿?";
                        break;
                    case 'CINCO':
                        pista = "0+5=¿?";
                        break;
                    case 'AVESTRUZ':
                        pista = "Tiene grandes patas";
                        break;
                }
                // Pintamos la palabra en el canvas , en este ejemplo se pinta arriba a la izquierda //
                ctx.fillStyle = "black";  // Aqui ponemos el color de la letra
                ctx.font = "bold 20px Courier";  // aqui ponemos el tipo y tamaño de la letra
                ctx.fillText(pista, 10, 15);  // aqui ponemos la frase en nuestro caso la variable pista , seguido de la posx y posy
            }
           
                    
             /* Distribuir nuestro teclado con sus letras respectivas al acomodo de nuestro array */
            function teclado(){
                var ren = 0;
                var col = 0;
                var letra = "";
                var miLetra;
                var x = inicioX;
                var y = inicioY;
                for(var i = 0; i < letras.length; i++){
                    letra = letras.substr(i,1);
                    miLetra = new Tecla(x, y, lon, lon, letra);
                    miLetra.dibuja();
                    teclas_array.push(miLetra);
                    x += lon + margen;
                    col++;
                    if(col==10){
                        col = 0;
                        ren++;
                        if(ren==2){
                            x = 280;
                        } else {
                            x = inicioX;
                        }
                    }
                    y = inicioY + ren * 50;
                }
            }
            
            
            /* aqui obtenemos nuestra palabra aleatoriamente y la dividimos en letras */
            function pintaPalabra(){
                var p = Math.floor(Math.random()*palabras_array.length);
                palabra = palabras_array[p];
      
                pistaFunction(palabra);
            
                var w = canvas.width;
                var len = palabra.length;
                var ren = 0;
                var col = 0;
                var y = 230;
                var lon = 50;
                var x = (w - (lon+margen) *len)/2;
                for(var i=0; i<palabra.length; i++){
                    letra = palabra.substr(i,1);
                    miLetra = new Letra(x, y, lon, lon, letra);
                    miLetra.dibuja();
                    letras_array.push(miLetra);
                    x += lon + margen;
                }
            }
            
            /* dibujar cadalzo y partes del pj segun sea el caso */
            function horca(errores){
                var imagen = new Image();
                imagen.src = "imagenes/ahorcado"+errores+".png";
                imagen.onload = function(){
                    ctx.drawImage(imagen, 390, 0, 230, 230);
                }
                /*************************************************
                // Imagen 2 mas pequeña a un lado de la horca //       
                var imagen = new Image();
                imagen.src = "imagenes/ahorcado"+errores+".png";
                imagen.onload = function(){
                    ctx.drawImage(imagen, 620, 0, 100, 100);
                }
                *************************************************/
            }
            
            /* ajustar coordenadas */
            function ajusta(xx, yy){
                var posCanvas = canvas.getBoundingClientRect();
                var x = xx-posCanvas.left;
                var y = yy-posCanvas.top;
                return{x:x, y:y}
            }
            
            /* Detecta tecla clickeada y la compara con las de la palabra ya elegida al azar */
            function selecciona(e){
                var pos = ajusta(e.clientX, e.clientY);
                var x = pos.x;
                var y = pos.y;
                var tecla;
                var bandera = false;
                for (var i = 0; i < teclas_array.length; i++){
                    tecla = teclas_array[i];
                    if (tecla.x > 0){
                        if ((x > tecla.x) && (x < tecla.x + tecla.ancho) && (y > tecla.y) && (y < tecla.y + tecla.alto)){
                            break;
                        }
                    }
                }
                if (i < teclas_array.length){
                    for (var i = 0 ; i < palabra.length ; i++){ 
                        letra = palabra.substr(i, 1);
                        if (letra == tecla.letra){ /* comparamos y vemos si acerto la letra */
                            caja = letras_array[i];
                            caja.dibujaLetra();
                            aciertos++;
                            bandera = true;
                        }
                    }
                    if (bandera == false){ /* Si falla aumenta los errores y checa si perdio para mandar a la funcion gameover */
                        errores++;
                        horca(errores);
                        if (errores == 5) gameOver(errores);
                    }
                    /* Borra la tecla que se a presionado */
                    ctx.clearRect(tecla.x - 1, tecla.y - 1, tecla.ancho + 2, tecla.alto + 2);
                    tecla.x - 1;
                    /* checa si se gano y manda a la funcion gameover */
                    if (aciertos == palabra.length) gameOver(errores);
                }
            }
            
            /* Borramos las teclas y la palabra con sus cajas y mandamos msj segun el caso si se gano o se perdio */
            function gameOver(errores){
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.fillStyle = "black";

                ctx.font = "bold 50px Courier";
                if (errores < 5){
                    ctx.fillText("Muy bien, la palabra es: ", 110, 280);
                } else {
                    ctx.fillText("Lo sentimos, la palabra era: ", 110, 280);
                }
                
                ctx.font = "bold 80px Courier";
                lon = (canvas.width - (palabra.length*48))/2;
                ctx.fillText(palabra, lon, 380);
                horca(errores);
            }
            
            /* Detectar si se a cargado nuestro contexco en el canvas, iniciamos las funciones necesarias para jugar o se le manda msj de error segun sea el caso */
            window.onload = function(){
                canvas = document.getElementById("pantalla");
                if (canvas && canvas.getContext){
                    ctx = canvas.getContext("2d");
                    if(ctx){
                        teclado();
                        pintaPalabra();
                        horca(errores);
                        canvas.addEventListener("click", selecciona, false);
                    } else {
                        alert ("Error al cargar el contexto!");
                    }
                }
            }
        </script>
    </section>
<footer class="pie-pagina">
    Envianos un comentario.
<form method="POST" action="coments.php">
        <input type="text-area" name="comentario" autocomplete="off"><br><br>
        <button type="submit" class="btn btn-warning btn-lg">Enviar</button>
    </form>
</footer>
    </body>
</html>