<?php

$texto = "Joao Jorge, 2007, Programador";
$resultado = str_getcsv($texto);
print_r($resultado);
foreach ($resultado as $palavra) {  
    echo "{$palavra}\n";}
