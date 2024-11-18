<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');
$nombreUser = $_POST['nombre_usuario']; // Obtiene el valor 'nombre_usuario' enviado a través del método POST en un formulario.

echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<link rel='stylesheet' href='../styles.css'>";
echo "<link rel='shortcut icon' href='./logo/ico.jpeg' type='image/x-icon'>"; 
echo "<title>Enviar</title>";
echo "</head>";
echo "<body>";

$buscarusuario = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombreUser'"; 

$resultado = $conexion->query($buscarusuario); // Ejecuta la consulta a la base de datos y almacena el resultado.
$count = mysqli_num_rows($resultado); // Cuenta el número de filas devueltas por la consulta.

if ($count == 1) {
    echo "<div class='enviar'>";
    echo "<h1>El usuario ya está registrado</h1>";
    echo "<a href='../Registro.php'>Nuevo registro</a>";
    echo "</div>";
} else {
    mysqli_query($conexion, "INSERT INTO usuarios(
        nombre_usuario, apellidos_usuario, no_identificacion, direccion, telefono, correo, universo, password
    ) VALUES (
        '$_POST[nombre_usuario]',
        '$_POST[apellidos_usuario]',
        '$_POST[no_identificacion]',
        '$_POST[direccion]',
        '$_POST[telefono]',
        '$_POST[correo]',
        '$_POST[universo]',
        '$_POST[password]'
    )");

    echo "<div class='enviar'>";
    echo "<h1>Usuario creado con éxito</h1>";
    echo "<a href='../Registro.php'>Generar nuevo registro</a> | ";
    echo "<a href='../Principal.php'>Ver registros</a>";
    echo "</div>";
}

echo "</body>";
echo "</html>";
?>
