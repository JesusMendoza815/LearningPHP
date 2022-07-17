<?php

class User {
//El encapsulamiento es báicamente privar o limitar 
//el acceso o  visibiliad al usuario final a los datos de la clase o instancia 
//meidnate metodos getters y setters 
    public $nombre;
    private $edad;
    protected $id;

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

class Worker extends User {
    public $workName;

    public function setWorkName($newWorkName){
        $this->workName = $newWorkName;
        echo 'Hola, mi nombre es: '.$this->nombre.' y soy '.$this->workName;
    }
}
// $objUser1 = new User();
// $objUser1 -> setName('Pedro');
// $objUser1 -> getNombre();
// $objUser1 -> setAge(22);
// $objUser1 -> getAge();

// $objUser2 = new User();
// $objUser2 -> setName('Pedro');
// $objUser2 -> getNombre();
// $objUser2 -> setAge(22);
// $objUser2 -> getAge();
$worker1 = new Worker();
$worker1 -> setName('Pedro Worker');
$worker1 -> setWorkName('Programador');


?>