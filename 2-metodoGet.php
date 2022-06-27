<?php
if ($_GET) {
    //Get muestra los documentos a través de ua url
    $nombre  = $_GET['nombre'];

    echo 'Hola '.$nombre;
}

?>