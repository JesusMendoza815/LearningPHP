<?php

$servidor = "localhost";
$usuario = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `fotos`";
    $sentencia = $conexion->prepare($sql); //prepara el resultado de sql
    $sentencia->execute();//ejecuto los resultados

    $resultado = $sentencia->fetchAll();//los obtengo

    foreach ($resultado as $foto) {
        echo $foto['id'].$foto['nombre'].'<br>';
    }



    echo "Conexion estable";
} catch (PDOException $error) {
    echo "Conexion fallida".$error;
}

?>