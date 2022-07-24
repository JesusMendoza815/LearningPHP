<?php

class UnaClase{
    public static function unMetodo() {
        echo 'Soy un metod';
    }
}

$objeto = new UnaClase();
$objeto->unMetodo();

UnaClase::unMetodo();

?>