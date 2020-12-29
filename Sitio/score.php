<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="../diseño.js?v=<?php echo(rand()); ?>"></script>
  <script type="text/javascript">
    var sun = new Image();
var moon = new Image();
var earth = new Image();
function init() {
  sun.src = 'https://mdn.mozillademos.org/files/1456/Canvas_sun.png';
  moon.src = 'https://mdn.mozillademos.org/files/1443/Canvas_moon.png';
  earth.src = 'https://mdn.mozillademos.org/files/1429/Canvas_earth.png';
  window.requestAnimationFrame(draw);
}

    function draw() {
  var ctx = document.getElementById('canvas4').getContext('2d');

  ctx.globalCompositeOperation = 'destination-over';
  ctx.clearRect(0, 0, 300, 300); // clear canvas

  ctx.fillStyle = 'rgba(0, 0, 0, 0.4)';
  ctx.strokeStyle = 'rgba(0, 153, 255, 0.4)';
  ctx.save();
  ctx.translate(150, 150);

  // Earth
  var time = new Date();
  ctx.rotate(((2 * Math.PI) / 60) * time.getSeconds() + ((2 * Math.PI) / 60000) * time.getMilliseconds());
  ctx.translate(105, 0);
  ctx.fillRect(0, -12, 40, 24); // Shadow
  ctx.drawImage(earth, -12, -12);

  // Moon
  ctx.save();
  ctx.rotate(((2 * Math.PI) / 6) * time.getSeconds() + ((2 * Math.PI) / 6000) * time.getMilliseconds());
  ctx.translate(0, 28.5);
  ctx.drawImage(moon, -3.5, -3.5);
  ctx.restore();

  ctx.restore();
  
  ctx.beginPath();
  ctx.arc(150, 150, 105, 0, Math.PI * 2, false); // Earth orbit
  ctx.stroke();
 
  ctx.drawImage(sun, 0, 0, 300, 300);

  window.requestAnimationFrame(draw);
}

init();
  </script>
<body>
	<center><h1 class="H1">Mi perfil</h1></center>
	<?php
  session_start();

$_SESSION["_usuario"];
$usuario = $_SESSION["_usuario"];
$link = new PDO('mysql:host=localhost;dbname=sitio', 'root', 'LuisDaniel16');  
?>
<center>
<canvas id="canvas4">
  

</canvas>
</center>
	<div class="container">
  <div class="row">
  <table class="table">
  <thead>
  	<?php  foreach ($link->query("SELECT * from usuarios where nombre_usuario='$usuario'") as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 

    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">email</th>
      <th scope="col">edad</th>
      <th scope="col">sexo</th>
      <th scope="col">usuario</th>
      <th scope="col">contraseña</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $row['Nombre'] ?></td>
      <td><?php echo $row['Apellido_Paterno'] ?></td>
      <td><?php echo $row['Apellido_Materno'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['edad'] ?></td>
      <td><?php echo $row['sexo'] ?></td>
      <td><?php echo $row['nombre_usuario'] ?></td>

    </tr>
  </tbody>
  <?php
	}
?>
</table>

  <a href="Manualdeusuario.pdf" target="_blank"> <button type="button" class="btn btn-primary mr-2">Ver Manual de Usuario</button></a>

    <div class="form-group">
      <a href="Editar.php"><button type="button" class="btn btn-primary mr-2">Asistente</button></a>
    </div>
  </div>
</div>

</body>
</html>