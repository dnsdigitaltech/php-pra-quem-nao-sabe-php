<?php

//operadores de atribuicao

$name = 'Davi';

$name = $name . ' Bernardo';

echo $name;

//forma mais simples
$name .= 'Bernardo';

echo $name;

//operadores de atribuicao com operadores aritmeticos
$number = 10;

$number += 20;
$number *= 20;
$number /= 20;
$number -= 20;
$number %= 20;

echo $number;
