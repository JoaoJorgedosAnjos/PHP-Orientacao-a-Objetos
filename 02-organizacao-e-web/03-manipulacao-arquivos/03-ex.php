<?php

$stringJson = '{"nome":"Joao","anoNascimento":1990,"profissao":"Dev"}';

var_dump(json_decode($stringJson, true));
