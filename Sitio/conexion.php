<?php
$usu=$_POST['_usuario'];
$contrasena=$_POST['_contra'];
$mysqli= new mysqli("localhost","root","LuisDaniel16","sitio");
if($mysqli===false){
	die("ERROR:NO SE ESTABLECIO LA CONEXION".mysqli_connect_error());
}

if(empty($usu) or empty($contrasena)){
	echo '<script type="text/javascript">
        alert("Es necesario llenar todos los campos");
        window.location.href="login.php";
        </script> ';
}else{
	
$sql="SELECT nombre_usuario,contrasena FROM usuarios WHERE nombre_usuario = '$usu' AND contrasena = '$contrasena'";
if($result=$mysqli->query($sql)){
	if($result->num_rows>0){
		while($row=$result->fetch_array()){
			echo '<script type="text/javascript">
        alert("Bienvenido");
        window.location.href="Profile.php";
        </script> ';
          session_start();
        		$_SESSION["_usuario"] = $usu;

		}
		$result->close();
	}else{
		echo '<script type="text/javascript">
        alert("Nombre de usuario o contraseña incorrectos");
        window.location.href="login.php";
        </script> ';
	}
}else{
	echo "ERROR:No fue posible ejecutar $sql".$mysqli->error;
}

}
$mysqli->close();

?>