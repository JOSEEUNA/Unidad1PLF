<?php

//incluir la clase
include "persona.php";

//instaciar la clase 
$maria= new Persona();

//asignar valores a las propiedades del objeto
$maria->setEdad(28);
$maria->setAltura(1.75);
$maria->setPeso(65);


echo "<br/>Edad: ".$maria->edad;
echo "<br/>Altura: ".$maria->altura;
echo "<br/>Peso: ".$maria->peso;
echo "<br/>IMC: ".$maria->imc();

