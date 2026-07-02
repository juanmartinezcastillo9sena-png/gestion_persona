<?php

require_once "../clases/persona.php";

    $persona1=new persona();

    $persona1->nombre = "Juan";
    $persona1->edad = 28;
    $persona1->correo = "juanmartinezcastillo9@gmail.com";
    
    $persona1->saludar() ;

    $persona2=new persona();

    $persona2->nombre = "Pino";
    $persona2->edad = "21";
    $persona2->correo = "pino@gmail.com";

    $persona2->saludar();

?>