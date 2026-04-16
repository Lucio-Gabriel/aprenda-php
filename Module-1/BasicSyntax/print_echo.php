<?php

// Echo: Ligeiramente mais rápido que print porque não retorna um valor e pode lidar com múltiplos argumentos.
// Print: Ligeiramente mais lento devido ao seu valor de retorno e limitação de argumento único.

// Echo: Não pode ser usado em expressões porque não retorna um valor.
// $resultOne = echo "Hello";

// Print: Pode ser usado em expressões, já que retorna um valor.
$result = print "Hello";

// Echo: Suporta múltiplos argumentos.
echo "Hello", " ", "World";

// Print: Suporta apenas um único argumento.
print "Hello World two";