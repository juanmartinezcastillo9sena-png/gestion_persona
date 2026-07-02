<?php
class carro{
    public $marca;
    public $color;
    public $modelo;

    public function __construct($marca, $color, $modelo)
    {
        $this->marca=$marca;
        $this->color=$color;
        $this->modelo=$modelo;

    }

    public function informacion(){
        echo "La marca del carro es ".$this->marca." su color es ".$this->color." y modelo ".$this->modelo."<br>";
    }
}
?>