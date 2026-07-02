<?php
class persona
{
    public $nombre;
    public $edad;
    public $correo;
    public $apellido;

    public function __construct($nombre, $edad, $correo, $apellido)
    {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->correo=$correo;
        $this->apellido=$apellido;

    }

    public function saludar()
    {
        echo "Hola, mi nombre es:  ".$this->nombre." ".$this->apellido." tengo ".$this->edad." y mi correo es ".$this->correo."<br>";
        }
}


?>