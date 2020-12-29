<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="Stylesheet" href="Estilos.css" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Iniciar Sesión</title>
</head>
<body class="imagen">
	<div class="container-login" >
		<div class="">
			<div>
	<br>
	<form method="POST" action="conexion.php">
		
		<div class="formulario" >
		<h1>INICIAR SESIÓN</h1><br>
			Usuario:<input type="text" style="width: 400px;height: 50px" class="componentes" name="_usuario" autocomplete="off"><br><br>
			Contraseña:<input type="password"  style="width: 400px;height: 50px"  class="componentes" name="_contra"><br><br>
	
			  <a href="score.php"><button class="btn btn-danger" type="submit">Entrar</button></a>
		</form>
		  <a href="Signin.php"><button class="btn btn-danger" type="button">Registrarme</button></a>

			</div>
		 </div>
	</div>

</body>
<script>
	

</script>
</html>