<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="Stylesheet" href="../Estilos.css?v=<?php echo(rand()); ?>" type="text/css">
	<script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
		
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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
            <li><a href="../Palabras.php">Palabras</a></li>
            <li><a href="../Consonantes.php">Consonantes</a></li>
           <a href="../Profile.php"><button type="button" class="btn btn-warning btn-lg">Mi Perfil</button></a>

		</ul>
	</nav>
	</section>
</header>
<br><br><br>
	
	<table class="table">
		<tr>
			<td>
				<a href="vocales-a.php"></a><img src="https://images.vexels.com/media/users/3/190273/isolated/preview/0310d9ec84eb4f0a045ec1be5160226b-galleta-de-jengibre-letra-a-by-vexels.png" class="imagenrotar"></a>
				<a href="vocales-e.php"><img src="https://images.vexels.com/media/users/3/190277/isolated/preview/55f568322f945b1e6637d640e84ffc74-galleta-de-jengibre-letra-e-by-vexels.png" class="imagenrotar"></a>
				<a href="vocales-i.php"><img src="https://images.vexels.com/media/users/3/190281/isolated/preview/3e7b2cffe647d64f4005dc7035fe58c3-galleta-de-jengibre-letra-i-by-vexels.png" class="imagenrotar"></a>
				<a href="vocales-o.php"></a><img src="https://images.vexels.com/media/users/3/190287/isolated/preview/e3924a82657eb4efbee782e1bdfdd70e-galleta-de-jengibre-letra-o-by-vexels.png" class="imagenrotar"></a>
				<a href="vocales-u.php"></a><img src="https://images.vexels.com/media/users/3/190293/isolated/preview/d5cbc79fa1076230a75419b1d4d96597-galleta-de-jengibre-letra-u-by-vexels.png" class="imagenrotar"></a>


			</td>
			<td>
		<img src="https://images.vexels.com/media/users/3/190468/isolated/preview/2201c6d0b72c327f2ca952abfb057e3c-escorpi--n-de-ilustraci--n-by-vexels.png" class="imagenes">
			<h1>Escorpión</h1>
			</td>

			<td>
		<img src="https://images.vexels.com/media/users/3/206003/isolated/preview/7e9b672b6ccac85b49b8ade8fd06335d-dibujos-animados-lindo-l--piz-by-vexels.png" class="imagenes">
			<h1>Escribir</h1>
			</td>

			<td>
				<img src="https://images.vexels.com/media/users/3/211270/isolated/preview/d2e9242ee1cdc1c0b8745f2c0ecadae5-carrera-de-escalera-de-granja-by-vexels.png" class="imagenes">
				<h1>Escalera</h1>
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