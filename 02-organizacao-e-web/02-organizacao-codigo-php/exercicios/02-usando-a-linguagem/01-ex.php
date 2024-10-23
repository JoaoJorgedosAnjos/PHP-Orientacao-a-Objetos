<?php

$notas = [10,14,5,6,22];

rsort($notas);
for ($i = 0; $i < 3; $i++) {
    echo "$notas[$i]\n";
}