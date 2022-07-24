<?php

$servidor = "localhost";
$usuario = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg');";
    $conexion->exec($sql);

    echo "Conexion estable";
} catch (PDOException $error) {
    echo "Conexion fallida".$error;
}

?>