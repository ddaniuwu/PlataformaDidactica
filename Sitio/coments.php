<?php 
$mysqli = new mysqli("localhost","root","LuisDaniel16","Sitio");
$coment = $_POST['comentario'];

if($coment==""){
	  	   echo '<script type="text/javascript">
        alert("No se puede quedar en blanco los comentarios");
        </script> ';
    }else{


 $sql="insert into comentarios(comentario)
    VALUES('$coment')";
        if($mysqli->query($sql)===true){
        	   echo '<script type="text/javascript">
        alert("Tus comentarios nos ayudan a brindarte un mejor servicio . Gracias");
        </script> ';
        }else{
        	echo "no se ha podido enviar el comentario".$mysqli->error;
        }
        
    }
  
?>