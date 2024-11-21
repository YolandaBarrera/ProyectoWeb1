<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "BigQnevadas5@";
$db_name = "datos";

// Conexión a Infininy free:
// $host_db = "sql205.infinityfree.com";
// $user_db = "if0_37329524";
// $pass_db = "u9IqlPoJdeTjM";
// $db_name = "if0_37329524_datos";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>
