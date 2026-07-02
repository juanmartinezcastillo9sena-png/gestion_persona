<?php

require_once "../clases/persona.php";
require_once "../clases/carro.php";

    $persona1=new persona("Juan", "28", "juanmartinez@gmail.com", "Martinez");
    $persona2=new persona("Pino", "20", "pino@gmail.com", "Parra");
    
    
    $persona1->saludar() ;

    $persona2->saludar();

    

    $carro1=new carro("Mercedez", "negro", "2025");
    $carro2=new carro("BMW", "azul", "2016");

    $carro1->informacion();

    $carro2->informacion();

?>