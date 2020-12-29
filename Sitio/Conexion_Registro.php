<?php
$Nombre = $_POST['nombre'];
$Ap_Pat = $_POST['ApPat'];
$Ap_Mat = $_POST['ApMat'];
$Email = $_POST['correo'];
$Edad = $_POST['age'];
$Sexo = $_POST['sex'];
$Usuario = $_POST['_User'];
$Contra = $_POST['password'];

$mysqli = new mysqli("localhost","root","LuisDaniel16","Sitio");
if($mysqli===false){
    die ("ERROR: No se ha podido conectar al servidor".mysqli_connect_error());
}


  if(empty($Nombre) or empty($Ap_Pat) or empty($Ap_Mat) or empty($Email) or empty($Edad) or empty($Usuario) or empty($Sexo) or empty($Contra)){
        echo '<script type="text/javascript">
        alert("Es necesario llenar todos los campos");
        window.location.href="Signin.php";
        </script> ';
   }else{

$sql ="SELECT * FROM usuarios WHERE nombre_usuario='$Usuario'";
    $result=$mysqli->query($sql);
        if($result->num_rows==0){
    $sql="insert into usuarios(Nombre ,Apellido_Paterno, Apellido_Materno , email , edad , sexo , nombre_usuario , contrasena)
    VALUES('$Nombre','$Ap_Pat','$Ap_Mat','$Email','$Edad','$Sexo','$Usuario','$Contra')";

    if($mysqli->query($sql)===true){
        echo '<script type="text/javascript">
        alert("Se ha completado el registro exitosamente.");
        window.location.href="Profile.php";
        </script> ';
            session_start();
                $_SESSION["_usuario"] = $Usuario;
    }else{
        echo 'No se ha podido concretar el registro'.$mysqli->error;
        }
    
        }else{
            if($result->num_rows>0){
              echo '<script type="text/javascript">
                alert("El usuario ya existe");
                window.location.href="signin.php";
                </script> ';
            
        }
    }
}
    
    
?>