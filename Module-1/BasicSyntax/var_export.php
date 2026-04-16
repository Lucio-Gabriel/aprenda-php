<?php

/**
 * var_export — Mostra ou retorna uma representação string analisável de uma variável
 * var_export() obtém informação estruturada sobre a variável informada. Ela é similar a var_dump() 
 * com uma exceção: a representação retornada é um código PHP válido.
 */

$a = [1, 2, ["a", "b", "c"]];
var_export($a);