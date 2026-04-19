<?php

$valor = "15.5";
$idade = 10;

echo gettype($valor);
echo gettype($idade);

settype($valor, "float");

echo gettype($valor);
echo $valor + 0.5;