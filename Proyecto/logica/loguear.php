<?php
require 'conexion.php';
session_start(); // Inicia la sesión

$no_cuenta = $_POST['no_identificacion']; // Almacena el número de identificación
$clave = $_POST['clave']; // Almacena la contraseña


//La función COUNT devuelve el número de filas de la consulta, es decir, el número de registros que cumplen una determinada condición.

//Los valores nulos no serán contabilizados
$q = "SELECT COUNT(*) as contar from usuarios where no_identificacion= '$no_cuenta' and password = '$clave'";

$consulta = mysqli_query($conexion, $q); // Ejecuta la consulta SQL y almacena el resultado en la variable 

$array = mysqli_fetch_array($consulta); // Almacena el resultado en un array asociativo

if ($array['contar'] > 0) {

    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['usermane'] = $no_cuenta;

    header("location: ../Principal.php");
    //header("location: ../inicio.php");
    
} else {

    header("location: ../indexError.php");
}
?>