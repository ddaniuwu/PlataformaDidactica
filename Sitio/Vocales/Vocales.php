<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="Stylesheet" href="../Estilos.css?v=<?php echo(rand()); ?>" type="text/css">
	<script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script type="text/javascript">
	
	function alerta(){
	var confirmacion = confirm("¿Desea Cerrar Sesion?");
	if(confirm("¿Desea Cerrar Sesion?")){
	   location.href ="../login.php";
} else {
	alert("Hola");
}
}
</script>
	<title></title>
</head>
<body>
<header>
	<section class="wrapper">
	<nav>
		<ul>
			<li><a href="../JuegoAhorcado.php">Juega y Aprende</a></li>
			<li><a href="../Galeria.php">Abecedario</a></li>
            <li><a href="Vocales.php">Vocales</a></li>
            <li><a href="../Consonantes.php">Consonantes</a></li>
            <li><a href="../Palabras.php">Palabras</a></li>
            <a href="../Profile.php"><button type="button" class="btn btn-warning btn-lg">Mi Perfil</button></a>
             <button type="button" onclick="alerta()" class="btn btn-warning btn-lg">CERRAR SESION</button>
            
		</ul>
	</nav>
	</section>
</header>
<br><br><br><br>

<div class="shadow-lg p-3 mb-5 bg-white rounded">
<center>
<h1 class="h1">Vocales</h1>
</center>
</div>

		<table class="table3">	
		<tr>
			<td>	  
				<a href="Vocales-a.php"><img src="https://images.vexels.com/media/users/3/190273/isolated/preview/0310d9ec84eb4f0a045ec1be5160226b-galleta-de-jengibre-letra-a-by-vexels.png" class="imagenrotar"></a>
				<a href="Vocales-e.php"><img src="https://images.vexels.com/media/users/3/190277/isolated/preview/55f568322f945b1e6637d640e84ffc74-galleta-de-jengibre-letra-e-by-vexels.png" class="imagenrotar"></a>
				<a href="Vocales-i.php"><img src="https://images.vexels.com/media/users/3/190281/isolated/preview/3e7b2cffe647d64f4005dc7035fe58c3-galleta-de-jengibre-letra-i-by-vexels.png" class="imagenrotar"></a>
				<a href="Vocales-o.php"><img src="https://images.vexels.com/media/users/3/190287/isolated/preview/e3924a82657eb4efbee782e1bdfdd70e-galleta-de-jengibre-letra-o-by-vexels.png" class="imagenrotar"></a>
				<a href="Vocales-u.php"><img src="https://images.vexels.com/media/users/3/190293/isolated/preview/d5cbc79fa1076230a75419b1d4d96597-galleta-de-jengibre-letra-u-by-vexels.png" class="imagenrotar"></a>
			</td>
			<td>
				<div class="card">
  <div class="card-body">
    Una vocal o monoptongo es un sonido de una lengua natural hablada que se pronuncia con el tracto vocal abierto, no habiendo un aumento de la presión del aire en ningún punto más arriba de la glotis. 
  </div>
</div>
  <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/OHUktPPdTaM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
			</td>

		</tr>
		</table>

	


<footer class="pie-pagina">
	Envianos un comentario.
<form method="POST" action="../coments.php">
        <input type="text-area" name="comentario" autocomplete="off"><br><br>
        <button type="submit" class="btn btn-warning btn-lg">Enviar</button>
    </form>
</footer>

</body>

 
</html>