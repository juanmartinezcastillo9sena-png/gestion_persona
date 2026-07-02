<?php
class persona
{
    public $nombre;
    public $edad;
    public $correo;
    public $apellido;

    public function saludar()
    {
        echo "Hola, mi nombre es:  ".$this->nombre." tengo ".$this->edad." y mi correo es ".$this->correo."<br>";
        }
}
?>