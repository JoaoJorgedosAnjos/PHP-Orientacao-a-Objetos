<?php

$horas = 24;

if ($horas >= 0 and $horas <= 12) {
    echo"Bom dia!";}
else if ($horas > 12 and $horas <= 18) { 
    echo "Boa tarde!";}
else{
    echo "Boa noite";
}