<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado =$_POST['no_identificacion']; // Obtiene el valor enviado desde el formulario a través del método POST
$consulta="DELETE FROM usuarios WHERE no_identificacion = "; // consulta SQL base para eliminar un usuario 

mysqli_query($conexion, $consulta . $registroEliminado); 
mysqli_close($conexion); 
header('Location: ../EliminarUsuario.php');// Redirige al usuario 

?>