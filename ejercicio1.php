<?php
    if ($_POST) {
        //Metodo post ocluta y recepciona los datos
        $nombre = $_POST['txtNombre'];

        echo 'Hola '.$nombre;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo PHP</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        Nombre: 
        <input type="text" name="txtNombre" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>