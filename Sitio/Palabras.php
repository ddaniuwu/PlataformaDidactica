<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="Estilos.css?v=<?php echo(rand()); ?>" type="text/css">

	<script src="diseño.js?v=<?php echo(rand()); ?>"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
</head>
<body>
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
		</ul>
	</nav>
	</section>
</header>

<br><br><br>
 <div style="text-align:center;">
<div class="shadow-lg p-3 mb-5 bg-white rounded">
 	<h1 >Completa las palabras</h1>
  <h2 class="h2">La sílaba es cada una de las divisiones fonológicas en las que se divide una palabra.<br>
   Es la segunda menor división de la cadena hablada.</h2>
 </div>
<table style="margin: 0 auto;">
	<tr>
		<td><div class="card" style="width: 18rem;">
  <img src="https://st.depositphotos.com/1001599/1495/v/950/depositphotos_14950863-stock-illustration-swimming-pool.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p  class="card-title" id="cont4">Alberc</p>
    <p  class="card-title" id="cont4-1">Sílabas: </p>

    <h5 class="card-title">Presiona para jugar</h5>
<button type="button" onclick="letraA()"  class="btn btn-warning btn-lg">JUGAR</button>
  </div>
</div>

	</td>
	<td>
		<div class="card" style="width: 18rem;">
  <img src="https://image.freepik.com/vector-gratis/zanahoria_172107-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p  class="card-title" id="cont5">zanahori</p>
    <p  class="card-title" id="cont5-1">Sílabas: </p>
    <h5 class="card-title">Presiona para jugar</h5>
<button type="button" onclick="letraS()" class="btn btn-warning btn-lg">JUGAR</button>
  </div>
</div>	
	</td>
	<td>
				<div class="card" style="width: 18rem;">
  <img src="https://i.pinimg.com/originals/a6/90/49/a690496d7e1176c783f54793aed1cfcc.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p  class="card-title" id="cont6">perr</p>
     <p  class="card-title" id="cont6-1">Sílabas:</p>
    <h5 class="card-title">Presiona para jugar</h5>
<button type="button" onclick="letraO()" class="btn btn-warning btn-lg">JUGAR</button>
  </div>
</div>	
	</td>
	<td>
				<div class="card" style="width: 18rem;">
  <img src="https://image.freepik.com/vector-gratis/dibujos-animados-caballo-blanco_43633-7163.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p  class="card-title" id="cont7">caball</p>
    <p  class="card-title" id="cont7-1">Sílabas:</p>

    <h5 class="card-title">Presiona para jugar</h5>
<button type="button" onclick="letraO2()" class="btn btn-warning btn-lg">JUGAR</button>
  </div>
</div>	
	</td>
	</tr>

		<tr>
		<td><div class="card" style="width: 18rem;">
  <img src="https://i.pinimg.com/originals/f4/ab/1c/f4ab1c771b3590c7224ed278671883c2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p  class="card-title" id="cont8">Aguacat</p>
    <p  class="card-title" id="cont8-1">Sílabas: </p>

    <h5 class="card-title">Presiona para jugar</h5>
<button type="button" onclick="letraE()" class="btn btn-warning btn-lg">JUGAR</button>
  </div>
</div>

	</td>
	<td>
		<div class="card" style="width: 18rem;">
  <img src="https://image.freepik.com/vector-gratis/baile-dibujos-animados-lindo-pinguino_29190-4677.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p  class="card-title" id="cont1">pingüin</p>
    <p  class="card-title" id="cont1-1">Sílabas: </p>
    <h5 class="card-title">Presiona para jugar</h5>
<button type="button" onclick="letraO3()" class="btn btn-warning btn-lg">JUGAR</button>
  </div>
</div>	
	</td>
	<td>
				<div class="card" style="width: 18rem;">
  <img src="https://us.123rf.com/450wm/jihane123/jihane1231504/jihane123150400086/39096109-dibujos-animados-divertidos-de-cangrejo.jpg?ver=6" class="card-img-top" alt="...">
  <div class="card-body">
    <p  class="card-title" id="cont2">cangre</p>
     <p  class="card-title" id="cont2-1">Sílabas:</p>
    <h5 class="card-title">Presiona para jugar</h5>
<button type="button" onclick="letraCO()" class="btn btn-warning btn-lg">JUGAR</button>
  </div>
</div>	
	</td>
	<td>
				<div class="card" style="width: 18rem;">
  <img src="https://st.depositphotos.com/1141522/1370/v/600/depositphotos_13707909-stock-illustration-volcano-erupting.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p  class="card-title" id="cont3">volcá</p>
    <p  class="card-title" id="cont3-1">Sílabas:</p>

    <h5 class="card-title">Presiona para jugar</h5>
<button type="button" onclick="letraN()" class="btn btn-warning btn-lg">JUGAR</button>
  </div>
</div>	
	</td>
	</tr>
</table>
</div>


<div class="container">
  <div class="row">
    <table border="1" class="table" id="tablaprueba">
      <thead class="thead-dark">
        <tr>
          <th>Palabra</th>
          <th>Intentos</th>
          <th>Aciertos</th>
          <th>Errores</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>

  
  </div>
</div>


<footer class="pie-pagina">
	Envianos un comentario.
	<form method="POST" action="coments-php">
		<input type="text-area" name="comentario"><br><br>
		<button type="submit" class="btn btn-warning btn-lg">Enviar</button>
	</form>
</footer>
</body>
</html>