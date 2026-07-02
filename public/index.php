<?php

require_once "../clases/persona.php";

    $persona1=new persona("Juan", "28", "juanmartinez@gmail.com", "Martinez");
    $persona2=new persona("Pino", "20", "pino@gmail.com", "Parra");
    
    
    $persona1->saludar() ;

    $persona2->saludar();

?>