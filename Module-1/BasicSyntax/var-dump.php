<?php

/**
 * var_dump — Despeja na saída informações sobre uma variável
 * 
 * Esta função mostra na saída uma informação estruturada sobre uma ou mais expressões, 
 * incluindo o tipo e o valor. Arrays e objetos são explorados recursivamente com valores 
 * identados para mostrar a estrutura.
 */

$fruits =  ["Banana", "Morango", "Melancia"];
var_dump($fruits);

$a = array(1, 2, array("a", "b", "c"));
var_dump($a);

$b = 3.1;
$c = true;
var_dump($b, $c);