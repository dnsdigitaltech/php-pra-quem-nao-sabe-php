<?php

//Verificando se a variável existe

$name = 'Davi';

echo isset($name);

$person = ['name' => 'Davi', 'age' => 39];
echo isset($person['name']);
// 1 = thruty
// 0 = falsy