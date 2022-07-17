<?php

class User2 {
//El encapsulamiento es báicamente privar o limitar 
//el acceso o  visibiliad al usuario final a los datos de la clase o instancia 
//meidnate metodos getters y setters 
    public $nombre;
    private $edad;
    protected $altura;

    public function __construct($name) {
        $this -> nombre = $name;
    }

    public function setName($name){
        $this->nombre = $name;
    }
    public function getNombre(){
        echo 'Hola, yo soy: '.$this->nombre;
    }
    public function setAge($age){
        $this->edad = $age;
    }
    public function getAge(){
        echo 'Mi edad es: '.$this->edad;
    }
}

$user1 = new User2('Juan Werez');
$user1 -> getNombre();

?>