<?php
require_once "persona.php";

class estudiante extends persona{
    public function saludar()
    {
        parent::saludar();
        echo "y soy un estudiante<br>";
    }
}
?>