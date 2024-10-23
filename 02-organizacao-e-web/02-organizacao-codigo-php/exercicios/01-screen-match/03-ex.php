<?php

function convertCelsiusToFahrenhe($celsius) {
    return ($celsius * 1.8) + 32;
}

echo convertCelsiusToFahrenhe(32);