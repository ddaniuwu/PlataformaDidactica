<!DOCTYPE html>
<html>
<head>
	<title>Memorama Y Abecedario</title>
	<link rel="stylesheet" type="text/css" href="Estilos.css?v=<?php echo(rand()); ?>" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<script language="javascript" type="text/javascript">
 

function alerta(){
	var confirmacion = confirm("¿Desea Cerrar Sesion?");
	if(confirm("¿Desea Cerrar Sesion?")){
	   location.href ="login.php";
} else {
	alert("Hola");
}
}

		var ctx, canvas;
		var primerCarta = true;
		var cartaPrimera, cartaSegunda;
		var colorDelante="yellow";
		var colorAtras="blue";
		var colorCanvas="green";
		var inicioX=30;
		var inicioY=30;
		var cartaMargen=30;
		var cartaLon=30;
		var cartaAncho=cartaLon*4;
		var cartaAlto=cartaLon*4;
		var cartas_array=new Array();
		var iguales=false;
		var cartas=0;
		
		var imagenes=new Array(26);
		function cargarImagenes(){

		}
		
		window.onload = cargarImagenes;
	
		function cargarImagenes(){
			imagenes[cartas] = new Image();
			imagenes[cartas].src = "images/"+cartas+".jpg";
			cartas++;
			if(cartas<26){
				imagenes[cartas-1].onload = cargarImagenes;
			}else{
				imagenes[cartas-1].onload = iniciar;
			}
		}
		
		function iniciar(){
			cartas=0;
			canvas=document.getElementById("miCanvas");
			canvas.width=630;
			canvas.height=510;
			if(canvas && canvas.getContext){
				ctx = canvas.getContext("2d");
				if(ctx){
					canvas.removeEventListener("click",iniciar,false);
					canvas.addEventListener("click",selecciona,false);
					tablero();
					barajar();
					aciertos();
				}else{
					document.write("Tu navegador no soporta canvas");
				}
			}
		}

		function tablero(){
			var i, j;
			var carta;
			var x=inicioX;
			var y=inicioY;
			for(i=0; i<4; i++){
				for(j=0; j<3; j++){
					carta=new Carta(x,y,cartaAncho,cartaAlto,i);
					cartas_array.push(carta);
					carta.dibuja();
					
					y +=inicioY+cartaAlto;
				}
				y = inicioY;
				x+=cartaAncho+cartaMargen;
			}
		}
		
		function Carta(x,y,ancho,largo,info){
			this.x=x;
			this.y=y;
			this.ancho=ancho;
			this.largo=largo;
			this.info=info;
			this.dibuja=dibujaCarta;
		}
		function dibujaCarta(){
			ctx.fillStyle=colorAtras;
			ctx.fillRect(this.x,this.y,this.ancho,this.largo);
		}

		
		function barajar(){
			var i,j;
			var aTemp1= new Array();
			var aTemp2= new Array();
			var lon=cartas_array.length/2;
			for(i=0; i<lon;i++){
				do{
					j=Math.floor(Math.random()*lon);
				}while(aTemp1.indexOf(j)!=-1)
				aTemp1.push(j);
				do{
					j=Math.floor(Math.random()*lon);
				}while(aTemp2.indexOf(j)!=-1)
				aTemp2.push(j);	
			}
			aTemp1 = aTemp2.concat(aTemp1);
			for(i=0; i<lon*2; i++){
				cartas_array[i].info=aTemp1[i];
			}
		}
		
		function ajusta(xx,yy){
			var posCanvas = canvas.getBoundingClientRect();
			var x = xx-posCanvas.left;
			var y = yy-posCanvas.top;
			return {x:x,y:y}
		}
		function selecciona(e){
			var pos=ajusta(e.clientX,e.clientY);
			//alert(pos.x+','+pos.y);
			
			for(var i=0; i<cartas_array.length; i++){
				var carta = cartas_array[i];
				if(carta.x>0){
					if( (pos.x>carta.x) && (pos.x<carta.x+carta.ancho) && (pos.y>carta.y) && (pos.y<carta.y+carta.largo)){
						if((primerCarta) || (i!=cartaPrimera)) {
							break;
						}
					}
				}
			}
			if(i<cartas_array.length){
				if(primerCarta){
					cartaPrimera=i;
					primerCarta=false;
					pinta(carta);
				}else{
					canvas.removeEventListener("click",selecciona,false);
					cartaSegunda=i;
					pinta(carta);
					primerCarta=true;
					if(cartas_array[cartaPrimera].info==cartas_array[cartaSegunda].info){
						iguales=true;
						cartas++;
						aciertos();
					}else{
						iguales=false;
					}
					setTimeout(volteaCarta,1000);
				}
			}
		}
		function pinta(carta){
			ctx.fillStyle = colorDelante;
			ctx.fillRect(carta.x,carta.y,carta.ancho,carta.largo);
			
			ctx.font="bold 40px comic";
			ctx.fillStyle = "black";
			//ctx.fillText(String(carta.info), carta.x+carta.ancho/2-10, carta.y+carta.largo/2+10);
			ctx.drawImage(imagenes[carta.info],carta.x,carta.y,carta.ancho,carta.largo);
		}
		function volteaCarta(){
			if(!iguales){
				cartas_array[cartaPrimera].dibuja();
				cartas_array[cartaSegunda].dibuja();
			}else{
				ctx.clearRect(	cartas_array[cartaPrimera].x,
								cartas_array[cartaPrimera].y,
								cartas_array[cartaPrimera].ancho,
								cartas_array[cartaPrimera].largo);
				
				ctx.clearRect(	cartas_array[cartaSegunda].x,
								cartas_array[cartaSegunda].y,
								cartas_array[cartaSegunda].ancho,
								cartas_array[cartaSegunda].largo);
				
				cartas_array[cartaPrimera].x = -1;
				cartas_array[cartaSegunda].x = -1;
			}
			if(cartas<26){
				canvas.addEventListener("click",selecciona,false);
			}else{
				cartas=0;
				cartas_array=[];
				canvas.addEventListener("click",iniciar,false);
				ctx.fillStyle="white";
				ctx.fillText("JUEGO TERMINADO",120,canvas.height/2);
			}
		}
		
		function aciertos(){
			ctx.save();
			ctx.clearRect(0,480,canvas.width,canvas.height);
			ctx.fillStyle="gray"
			ctx.fillRect(0,480,canvas.width,canvas.height);
			ctx.font = "bold 40px comic";
			ctx.fillStyle="black";
			ctx.fillText("Aciertos: "+String(cartas),canvas.width-220,510);
			ctx.restore();
		}
	</script>


</head>
<body >
	<header>
	<section class="wrapper">
	<nav>
		<ul>
			<li><a href="JuegoAhorcado.php">Juega y Aprende</a></li>
			<li><a href="Galeria.php">Abecedario</a></li>
			<li><a href="Vocales/Vocales.php">Vocales</a></li>
            <li><a href="Consonantes.php">Consonantes</a></li>
            <li><a href="Palabras.php">Palabras</a></li>
            <a href="Profile.php"><button type="button" class="btn btn-warning btn-lg">Mi Perfil</button></a>
            <button type="button" onclick="alerta()" class="btn btn-warning btn-lg">CERRAR SESION</button>
 
</center>


		</ul>
	</nav>
	</section>
</header>


<section class="fondo">
<br><br><br>
<div class="shadow-lg p-3 mb-5 bg-white rounded">
 	<h1 >Bienvenido </h1>
 </div>

<center>
<table>
	<tr>
		<td><img src="https://blogpedagog.files.wordpress.com/2017/07/pocoyo-abc.png?w=584" class="rounded-circle"></td>
		<td><canvas id="miCanvas" class="rounded-top"></canvas></td>
		<td><img src="https://www.pocoyo.com/img/Categorias/Adivinanzas/2018/01/thumb-adivinanzas-faciles.jpg" class="rounded-circle"></td>
	</tr>
</table>
</center>
</section>
<div class="shadow-lg p-3 mb-5 bg-white rounded">
  <h2 class="h2">ABCDario</h2>
 </div>

<section class="fondoGaleria">
	<center>
	<table>
		<tr>
			<td> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSlHNPMXBGcu0iyF3MaNYahtUeiLH9q2pQ9wg&usqp=CAU" class="imageclass"> </td>
			<td> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRGm3QlA_6qHhHMOMncSw5ivohYPKHC3bu1zA&usqp=CAU" class=imageclass></td>
			<td> <img src="https://cdn5.dibujos.net/dibujos/pintados/202023/letra-c-letras-y-numeros-mayusculas-11815132.jpg" class="imageclass"></td>
			<td> <img src="https://lasletras.org/wp-content/uploads/d.jpg" class="imageclass"></td>
		</tr>

		<tr>
			<td><img src="https://lasletras.org/wp-content/uploads/e.jpg"class="imageclass"></td>
			<td><img src="https://static.vecteezy.com/system/resources/previews/000/222/137/non_2x/3d-retro-letter-f-typography-vector.jpg"class="imageclass"></td>
			<td><img src="https://static.wixstatic.com/media/2d1c84_cf58b144cc0a4a3e9b1c234b5333b19b~mv2.gif"class="imageclass"></td>
			<td><img src="https://images.vexels.com/media/users/3/190316/isolated/preview/4a9ab3427a550f2d319dd44da0b81ddd-pan-de-jengibre-letra-h-by-vexels.png"class="imageclass"></td>
		</tr>

		<tr>
			<td><img src="https://cdn5.dibujos.net/dibujos/pintados/201941/letra-i-letras-y-numeros-mayusculas-11642568.jpg"class="imageclass"></td>
			<td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRZldovnbCk0UBMXFB-jf4Gnm7hDF8N3lA6wg&usqp=CAU"class="imageclass"></td>
			<td><img src="https://kinuma.com/7976-large_default/letra-k-de-animal.jpg"class="imageclass"></td>
			<td><img src="https://images.vexels.com/media/users/3/200412/isolated/preview/67c95e5e6af11fc543c44947166418c3-carnaval-letra-l-color-by-vexels.png"class="imageclass"></td>
		</tr>

		<tr>
			<td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQK0slQfgMFg1Ob5luUnWZw1JJX9fd8VEnScw&usqp=CAU" class="imageclass"></td>
			<td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQLPWgYxZ0CXeWUNi9G8xeEeyYPcS62hf8nSA&usqp=CAU"class="imageclass"></td>
			<td><img src="https://lasletras.org/wp-content/uploads/o.jpg"class="imageclass"></td>
			<td><img src="https://cdn5.dibujos.net/dibujos/pintados/201826/letra-p-letras-y-numeros-mayusculas-11396129.jpg"class="imageclass"></td>
		</tr>

		<tr>
			<td><img src="https://images.vexels.com/media/users/3/198847/isolated/preview/eccd1b12124fa1a8f0e180fdf2957953-letra-q-mardi-gras-by-vexels.png" class="imageclass"></td>
			<td><img src="https://images-na.ssl-images-amazon.com/images/I/31JytwlZLBL._AC_.jpg"class="imageclass"></td>
			<td><img src="https://images.vexels.com/media/users/3/142317/isolated/preview/e6a7e6e1c960033adbcd05ceaeeca431-membrete-de-ne--n-rojo-alfabeto-s-by-vexels.png"class="imageclass"></td>
			<td><img src="https://previews.123rf.com/images/chrisroll/chrisroll1204/chrisroll120400318/13272879-semitonos-3d-en-may%C3%BAsculas-la-letra-t.jpg"class="imageclass"></td>
		</tr>

		<tr>
			<td><img src="https://cdn5.dibujos.net/dibujos/pintados/202034/letra-u-letras-y-numeros-mayusculas-11946020.jpg" class="imageclass"></td>
			<td><img src="https://images.vexels.com/media/users/3/142339/isolated/preview/7217d48d90b1b9d037b6769038b6ce20-membrete-rojo-ne--n-tipo-de-letra-v-by-vexels.png"class="imageclass"></td>
			<td><img src="https://i.pinimg.com/736x/32/89/e2/3289e22beaa3dda110d4e30bb22a8f47.jpg"class="imageclass"></td>
			<td><img src="https://cdn5.dibujos.net/dibujos/pintados/201832/letra-x-letras-y-numeros-mayusculas-11428780.jpg"class="imageclass"></td>
		</tr>

			<tr>
			<td><img src="https://images.vexels.com/media/users/3/142321/isolated/preview/ccfc8b4f7fd19107ce678fc98718206e-membrete-rojo-ne--n-alfabeto-y-by-vexels.png" class="imageclass"></td>
			<td></td>
			<td></td>
			<td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTomTdqXu5U04hphlxT9UAklE6_mLQ2G_bYbg&usqp=CAU"class="imageclass"></td>
		</tr>
	</table>
	</center>
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
